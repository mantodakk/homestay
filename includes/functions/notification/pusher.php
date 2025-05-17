<?php

use Pusher\PushNotifications\PushNotifications;

function publishToBeamsInterests(array $interests, string $title, string $body, string $deepLink): ?array
{
    // load your creds
    $instanceId = $_ENV['pusher_10_id']   ?? null;
    $secretKey  = $_ENV['pusher_10_key'] ?? null;

    if (! $instanceId || ! $secretKey) {
        error_log('[Beams] Missing credentials');
        return null;
    }

    // init client
    $beamsClient = new PushNotifications([
        'instanceId' => $instanceId,
        'secretKey'  => $secretKey,
    ]);

    // determine scheme + host
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host   = $_SERVER['HTTP_HOST'] ?? '';

    // build full URL only if deepLink is relative
    if (preg_match('#^https?://#i', $deepLink)) {
        $fullLink = $deepLink;
    } else {
        // ensure leading slash
        $path = '/' . ltrim($deepLink, '/');
        $fullLink = $scheme . $host . $path;
    }

    try {
        $response = $beamsClient->publishToInterests(
            $interests,
            [
                'web' => [
                    'notification' => [
                        'title'     => $title,
                        'body'      => $body,
                        'deep_link' => $fullLink,
                    ],
                ],
            ]
        );
        return json_decode(json_encode($response), true);
    } catch (\Throwable $e) {
        error_log('[Beams] publish failed: ' . $e->getMessage());
        return null;
    }
}


function sendPusherEvent($channel, $event, $data) {
    $options = [
        'cluster' => $_ENV['pusher_10a_cluster'],  // e.g., 'us2'
        'useTLS' => true
    ];

    $pusher = new Pusher\Pusher(
        $_ENV['pusher_10a_key'],      // Replace with your Pusher key
        $_ENV['pusher_10a_secret'],   // Replace with your Pusher secret
        $_ENV['pusher_10a_id'],   // Replace with your Pusher app ID
        $options
    );

    // Trigger the event
    return $pusher->trigger($channel, $event, $data);
}



function removeBeamsInterest(string $deviceId): bool
{
    $instanceId = $_ENV['pusher_10_id']   ?? null;
    $secretKey  = $_ENV['pusher_10_key']  ?? null;

    if (! $instanceId || ! $secretKey) {
        error_log('[Beams] Missing credentials');
        return false;
    }

    $url = "https://{$instanceId}.pushnotifications.pusher.com/device_api/v1/instances/{$instanceId}/devices/web/{$deviceId}/interests/{$deviceId}";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer {$secretKey}",
            "Content-Type: application/json",
        ],
    ]);

    $response = curl_exec($ch);
    $success = false;

    if (curl_errno($ch)) {
        error_log('[Beams] curl error: ' . curl_error($ch));
    } else {
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($code >= 200 && $code < 300) {
            error_log("[Beams] ✅ Removed interest for device: $deviceId");
            $success = true;
        } else {
            error_log("[Beams] ❌ Failed to remove interest for $deviceId (HTTP $code)");
        }
    }

    curl_close($ch);
    return $success;
}