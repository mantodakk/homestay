<?php

if (isset($_POST['register'])) {
  $errors = array();

  echo "<script>console.log('testregister');</script>";


  if (empty($_POST['name'])) {
    $errors['name'] = "Name required";
  } else {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

  }

  if (empty($_POST['email'])) {
    $errors['email'] = "email required";
  } else {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

  }

  if (empty($_POST['password1'])) {
    $errors['password1'] = "password required";
  } else {
    $password1 = mysqli_real_escape_string($conn, $_POST['password1']);

  }

  if (empty($_POST['password2'])) {
    $errors['password2'] = "confirm password required";
  } else {
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

  }

  if (!isset($_POST['agree_terms'])) {
    $errors['agree_terms'] = "must agree";

  }

  $role = 2;

  if (!empty($_POST['password1']) && !empty($_POST['password2'])) {

    if ($password1 != $password2) {
      $errors['password1'] = "Passwords dont match";
      $errors['password2'] = "Passwords dont match";
    }

  }


  if (isset($name) && isset($email)) {

    $user_check_query = "SELECT * FROM users WHERE   email='$email'    LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists


      if ($user['email'] === $email) {
        $errors['email'] = "Email already registered";

      }


    }

  }

  if (count($errors) == 0) {
    $password = md5($password1);

    $query = "INSERT INTO users (name,email,password,role) 
                          VALUES('$name','$email','$password','$role')";
    mysqli_query($conn, $query);


    $_SESSION['user_details'] = [
      'name' => $name,
      'email' => $email,
      'role' => $role,

    ];
    header("Location: " . $basePath2 . "/dashboard");


  }
  // header("Location: " . $basePath2 . "/register");



}