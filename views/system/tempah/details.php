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

            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                <span class="mask  bg-gradient-dark  opacity-6"></span>
            </div>
            <div class="card card-body mx-2 mx-md-2 mt-n6">
                <div class="row gx-4 mb-2">



                </div>
                <div class="row">
                    <div class="row mt-3">

                        <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4 position-relative">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Maklumat Tempahan</h6>
                                        </div>
                                        <div class="col-md-4 text-end">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">

                                    <hr class="horizontal gray-light my-2">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                class="text-dark">ID:</strong> <?php echo $tempah['id'] ?></li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Tarikh Check In:</strong>
                                            <?php echo $tempah['tarikh_mula'] ?></li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Tarikh Check Out:</strong>
                                            <?php echo $tempah['tarikh_tamat'] ?></li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Status:</strong> <?php echo $tempah['status'] ?></li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-12 col-xl-6 mt-xl-0 mt-4">
                            <div class="card card-plain h-100">
                                <div class="card-header p-3">
                                    <div
                                        class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-lg float-start">
                                        <i class="material-symbols-rounded opacity-10">splitscreen</i>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h6 class="mb-0">To do list</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                            <small>23 - 30 March 2020</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-group list-group-flush" data-toggle="checklist">
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item checklist-item-primary ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Check status</h6>
                                                    <div class="dropstart  float-lg-end ms-auto">
                                                        <a href="javascript:;" class="cursor-pointer"
                                                            id="dropdownTable2" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="material-symbols-rounded text-secondary text-sm">
                                                                settings
                                                            </i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                            aria-labelledby="dropdownTable2" style="">
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Another action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center ms-4 mt-3 ps-1">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Date</p>
                                                        <span class="text-xs">24 March 2019</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <p class="mb-0 text-secondary">Project</p>
                                                        <span class="text-xs">2414_VR4sf3#</span>
                                                    </div>
                                                    <div class="mx-auto">
                                                        <p class="mb-0 text-secondary">Company</p>
                                                        <span class="text-xs">Creative Tim</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item checklist-item-dark ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault1" checked="">
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Management discussion</h6>
                                                    <div class="dropstart  float-lg-end ms-auto">
                                                        <a href="javascript:;" class="cursor-pointer"
                                                            id="dropdownTable3" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="material-symbols-rounded text-secondary text-sm">
                                                                settings
                                                            </i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                            aria-labelledby="dropdownTable3" style="">
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Another action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Date</p>
                                                        <span class="text-xs">24 March 2019</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <p class="mb-0 text-secondary">Project</p>
                                                        <span class="text-xs">4411_8sIsdd23</span>
                                                    </div>
                                                    <div class="mx-auto">
                                                        <p class="mb-0 text-secondary">Company</p>
                                                        <span class="text-xs">Apple</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item checklist-item-warning ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault2" checked="">
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">New channel distribution</h6>
                                                    <div class="dropstart  float-lg-end ms-auto">
                                                        <a href="javascript:;" class="cursor-pointer" id="dropdownTable"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="material-symbols-rounded text-secondary text-sm">
                                                                settings
                                                            </i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                            aria-labelledby="dropdownTable" style="">
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Another action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Date</p>
                                                        <span class="text-xs">25 March 2019</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <p class="mb-0 text-secondary">Project</p>
                                                        <span class="text-xs">827d_kdl33D1s</span>
                                                    </div>
                                                    <div class="mx-auto">
                                                        <p class="mb-0 text-secondary">Company</p>
                                                        <span class="text-xs">Slack</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item checklist-item-success ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault3">
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">IOS App development</h6>
                                                    <div class="dropstart float-lg-end ms-auto">
                                                        <a href="javascript:;" class="cursor-pointer"
                                                            id="dropdownTable1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="material-symbols-rounded text-secondary text-sm">
                                                                settings
                                                            </i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                                            aria-labelledby="dropdownTable1" style="">
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Another action</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center ms-4 mt-3 ps-1">
                                                    <div>
                                                        <p class="mb-0 text-secondary">Date</p>
                                                        <span class="text-xs font-weight-bolder">26 March 2019</span>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <p class="mb-0 text-secondary">Project</p>
                                                        <span class="text-xs">88s1_349DA2sa</span>
                                                    </div>
                                                    <div class="mx-auto">
                                                        <p class="mb-0 text-secondary">Company</p>
                                                        <span class="text-xs">Facebook</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="vertical dark">


                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="mb-3 ps-3">
                                <h6 class="mb-1">Admin</h6>
                                <p class="text-sm">Contact Information</p>
                            </div>
                            <div class="row">

                                <?php foreach ($admins as $admin) { ?>
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="card-header p-0 m-2">

                                            </div>
                                            <div class="card-body p-3">
                                                <!-- <p class="mb-0 text-sm"></p> -->
                                                <a href="javascript:;">
                                                    <h5>
                                                        <?php echo $admin['email'] ?>
                                                    </h5>
                                                </a>
                                                <p class="mb-4 text-sm">
                                                    Phone
                                                </p>



                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button type="button" id="notify" data-admin="<?php echo $admin['id'] ?>"
                                                        class="btn btn-outline-primary btn-sm mb-0">Notify</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
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
    // jQuery to handle the button click event
    $(document).ready(function() {
        // When the 'Notify' button is clicked
        $('#notify').click(function() {
            // Get the admin ID from the 'data-admin' attribute
            var adminId = $(this).data('admin');
            
            // Log adminId to check it's working
            console.log('Notify admin with ID:', adminId);

            // Perform an AJAX request
            $.ajax({
                url: '<?php echo $basePath2 ?>/tempahan/notify_admin', // Replace with your PHP endpoint
                method: 'POST',
                data: { 
                    tempahan_notify_admin : "tempahan_notify_admin",
                    admin_id: adminId,
                 }, // Sending admin_id to the server
                success: function(response) {
                    // Handle the server response
                    var data = JSON.parse(response); // Parse the JSON response from PHP
                   
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the AJAX request
                    console.error('AJAX Error: ' + status + ' ' + error);
                    alert('Failed to send notification');
                }
            });
        });
    });
</script>
</body>

</html>