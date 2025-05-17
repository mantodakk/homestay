<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="g-sidenav-show  bg-gray-100">

    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidebar.php"); ?>


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>



        <div class="container-fluid py-2">
            <div class="row">
                <div class="ms-3">
                    <h3 class="mb-0 h4 font-weight-bolder">Review</h3>
                    <p class="mb-4">
                        Tell us about your experience
                    </p>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>New Review</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form method="POST">
                            <!-- Description input -->

                              <input type="hidden" class="form-control" name="user_id"
                                                        value="<?php echo $_SESSION['user_details']['id'] ?>">
                                <label class="form-label ">Description</label>

                            <div class="input-group input-group-dynamic">
                                <textarea class="form-control" name="description" rows="3" required></textarea>
                            </div>

                            <!-- Star rating input -->
                            <div class="input-group input-group-outline my-4">
                                <label class="form-label">Star (1 to 5)</label>
                                <input type="number" class="form-control" name="star" min="1" max="5" required>
                            </div>

                            <!-- Review Guidelines -->
                            <h5 class="mt-5">Review Guidelines</h5>
                            <p class="text-muted mb-2">
                                Please write constructive and helpful reviews. For example:
                            </p>
                            <ul class="text-muted ps-4 mb-0 float-start">
                                <li><span class="text-sm">Be clear and concise</span></li>
                                <li><span class="text-sm">Avoid offensive language</span></li>
                                <li><span class="text-sm">Provide helpful feedback</span></li>
                                <li><span class="text-sm">Rate honestly (1 to 5 stars)</span></li>
                            </ul>

                            <!-- Submit button -->
                            <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0"
                                name="reviewbaharu">
                                Submit Review
                            </button>
                        </form>
                    </div>
                </div>


            </div>





            <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

            <!-- //modal -->
             
        </div>


        </div>
    </main>




    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>
    <script>
        var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
            contentHeight: 'auto',
            initialView: "dayGridMonth",
            headerToolbar: {
                start: 'title', // will normally be on the left. if RTL, will be on the right
                center: 'dayGridMonth',
                end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
            },
            eventOverlap: false,
            views: {
                month: {
                    titleFormat: {
                        month: "long",
                        year: "numeric"
                    }
                },
                agendaWeek: {
                    titleFormat: {
                        month: "long",
                        year: "numeric",
                        day: "numeric"
                    }
                },
                agendaDay: {
                    titleFormat: {
                        month: "short",
                        year: "numeric",
                        day: "numeric"
                    }
                }
            },
            selectOverlap: function (event) {
                return event.overlap === true; // Only allow overlap if explicitly set
            },

            eventClick: function (info) {
                if (info.event.display === 'background') {
                    info.jsEvent.preventDefault(); // Prevent any action
                }
                var eventId = info.event.id;

                console.log("Event ID: " + eventId);
                window.location.href = "<?php echo $basePath2 ?>/tempah/details/" + eventId;


            },
            validRange: function (nowDate) {

                const start = new Date(nowDate.valueOf());
                start.setHours(14, 0, 0, 0); // 14:00:00.000

                return {
                    start: start.toISOString()
                };
            },


            eventSources: [
                {
                    url: '<?php echo $basePath2 ?>/cuti/calendar',
                    method: 'POST',
                    extraParams: {
                        cuti_calendar: 'cuti_calendar'
                    },
                    failure: function () {
                        alert('Failed to load events from Source 1');
                    },

                },

                {
                    url: '<?php echo $basePath2 ?>/tempahan/calendar',
                    method: 'POST',
                    extraParams: {
                        tempahan_calendar: 'tempahan_calendar',
                        user_id: '<?php echo $_SESSION['user_details']['id'] ?>',
                        role: '<?php echo $_SESSION['user_details']['role'] ?>',
                    },
                    failure: function () {
                        alert('Failed to load events from Source 1');
                    },

                },

            ],

            selectable: true,
            select: function (info) {
                if (info.view.type === 'timeGridWeek') {

                    return; // Do nothing
                }
                const selectedStart = info.start;
                const selectedEnd = info.end;
                // Set check-in time to 14:00 PM (2:00 PM) for the start date
                selectedStart.setHours(14, 0, 0, 0); // Set to 14:00:00 (2:00 PM)

                // Set check-out time to 12:00 PM (12:00 PM) for the end date
                selectedEnd.setHours(12, 0, 0, 0);  // Set to 12:00:00 (12:00 PM)
                // Format the dates (assuming you are using moment.js or similar date formatting function)
                const startStr = formatDate(selectedStart); // Custom function to format the date (use your preferred formatting method)
                const endStr = formatDate(selectedEnd);

                // Set the values for tarikh mula and tarikh tamat
                $('#tarikh_mula').val(startStr);
                $('#tarikh_tamat').val(endStr);

                console.log(selectedStart);
                console.log(selectedEnd);

                // Show the modal (if needed)
                var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                modal.show();
            }




        });

        calendar.render();
        // Helper function to format date in 'YYYY-MM-DD' format using local time
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // month is 0-based
            const day = String(date.getDate()).padStart(2, '0'); // ensure two digits
            return `${year}-${month}-${day}`;
        }
    </script>
</body>

</html>