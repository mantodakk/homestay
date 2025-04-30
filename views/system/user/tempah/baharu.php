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

                <div class="col-12">
                    <div class="card card-calendar">
                        <div class="card-body p-3">
                            <div class="calendar fc fc-media-screen fc-direction-ltr fc-theme-standard"
                                data-bs-toggle="calendar" id="calendar">

                            </div>
                        </div>
                    </div>
                </div>

            </div>





            <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

            <!-- //modal -->
            <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="card card-plain">
                                    <div class="card-header pb-0 text-left">
                                        <h5 class="">Tempahan</h5>
                                        <p class="mb-0">Enter your email and password to sign in</p>
                                    </div>
                                    <div class="card-body">
                                        <form role="form text-left">
                                            <div class="input-group input-group-static my-3">
                                                <label>Tarikh</label>
                                                <input type="text" class="form-control" id="tarikh" name="tarikh">
                                            </div>



                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-round btn-primary btn-lg w-100 mt-4 mb-0"
                                                    name="tempahan_baharu_form">Tempah</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                center: '',
                end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
            },

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
            },
            validRange: function (nowDate) {
                // Create a new Date object for today at 14:00
                const start = new Date(nowDate.valueOf());
                start.setHours(14, 0, 0, 0); // 14:00:00.000

                return {
                    start: start.toISOString()
                    // Optional: add 'end' if you want to restrict the upper limit too
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
                // {
                //     url: '/api/events2',
                //     method: 'POST',
                //     extraParams: {
                //         type: 'cuti'
                //     },
                //     failure: function () {
                //         alert('Failed to load events from Source 2');
                //     },
                //     color: 'green',
                //     textColor: 'white'
                // },
            ],

            selectable: true,
            select: function (info) {
                const selectedStart = info.start;
                const selectedEnd = info.end;

                let currentDate = new Date(info.start);
                const startStr = formatDate(currentDate);
                $('#tarikh').val(startStr);


                var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                modal.show();




            },




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