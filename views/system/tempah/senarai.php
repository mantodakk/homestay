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


            <div class="row ">
                <div class="  col-12 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Senarai</h6>
                                    <p class="text-sm mb-0">
                                        <!-- <i class="fa fa-check text-info" aria-hidden="true"></i> -->
                                        <!-- <span class="font-weight-bold ms-1">30</span> this month -->
                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                        <!-- 
                                        <a class="btn btn-primary" href="<?php echo $rootPath ?>/tempah/senarai">Lebih
                                            Lanjut</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0" id="eventsTable">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  text-center opacity-7">
                                                ID
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tarikh Mula</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tarikh Tamat
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            </th>
                                            <!-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Student_name</th> -->



                                        </tr>

                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>






                <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer2.php"); ?>

            </div>




            <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

            <!-- //modal -->
            <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  " role="document">
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
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" class="form-control" name="user_id"
                                                        value="<?php echo $_SESSION['user_details']['id'] ?>">
                                                    <div class="input-group input-group-static my-3 ">
                                                        <label>Tarikh Mula</label>
                                                        <input type="text" class="form-control" id="tarikh_mula"
                                                            name="tarikh_mula" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-6">

                                                    <div class="input-group input-group-static my-3 ">
                                                        <label>Tarikh Tamat</label>
                                                        <input type="text" class="form-control" id="tarikh_tamat"
                                                            name="tarikh_tamat" readonly>
                                                    </div>
                                                </div>

                                                <div class="input-group input-group-static my-3">
                                                    <label>Upload File</label>
                                                    <input type="file" class="form-control file-selector-button"
                                                        name="file_input" accept=".jpg, .jpeg, .png, .pdf">
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit"
                                                        class="btn btn-round btn-primary btn-lg w-100 mt-4 mb-0"
                                                        name="tempahan_baharu_form">Tempah</button>
                                                </div>

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


        $(document).ready(function () {
            $('#eventsTable').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true, //dashboard doesnt have state save
                responsive: true,
                pageLength: 5,  // Number of entries per page (you can change this to whatever number you want)
                lengthMenu: [5],  // Allow the user to change the number of entries shown per page
                paging: true,         // Disable pagination

                ajax: {
                    url: "<?php echo $rootPath ?>/tempahan/senarai",
                    "type": "POST",
                    "data": function (d) {
                        d.senarai_tempahan_list = true;
                        d.role = '<?php echo $_SESSION['user_details']['role'] ?>';
                        d.user_id = '<?php echo $_SESSION['user_details']['id'] ?>';



                        console.log('Request Data:', d);
                    },

                    "error": function (xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    },
                    "dataSrc": function (json) {
                        console.log('dataSrc received data:', json);  // Log response here
                        return json.data || [];
                    },
                },

                columns: [
                    { "data": "id", class: "text-center", responsivePriority: 1 },
                    // { "data": "student_name" },
                    // { "data": "lecturer_name" },
                    { "data": "tarikh_mula", class: " ", responsivePriority: 2 },
                    { "data": "tarikh_tamat", class: " ", responsivePriority: 3 },
                    // { "data": "start" },
                    // { "data": "end" },


                    {
                        "data": "status",
                        "class": " ",
                        "responsivePriority": 2,
                        "render": function (data, type, row, meta) {
                            let statusLabel = '';
                            let btnClass = '';

                            switch (data) {
                                case '0':
                                case 0:
                                    statusLabel = 'Rejected';
                                    btnClass = 'btn btn-danger  ';
                                    break;
                                case '1':
                                case 1:
                                    statusLabel = 'Pending';
                                    btnClass = 'btn btn-warning  ';
                                    break;
                                case '2':
                                case 2:
                                    statusLabel = 'Approved';
                                    btnClass = 'btn btn-success ';
                                    break;
                                default:
                                    statusLabel = 'Unknown';
                                    btnClass = 'btn btn-secondary btn-sm';
                            }

                            return `<button class="${btnClass}" disabled>${statusLabel}</button>`;
                        }
                    },
                    {
                        "data": "id",
                        "class": " ",
                        "responsivePriority": 1,
                        "render": function (data, type, row, meta) {
                            return `<a class="btn btn-primary  "  href="<?php echo $rootPath ?>/tempah/details/${data}">More</a>`;
                        }
                    }




                ],
            });
        });




    </script>
</body>

</html>