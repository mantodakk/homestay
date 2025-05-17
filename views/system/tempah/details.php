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

                    <div class="col-12 col-xl-6 mt-xl-0 mt-4 position-relative">
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
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tarikh
                                            Check In:</strong>
                                        <?php echo $tempah['tarikh_mula'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tarikh
                                            Check Out:</strong>
                                        <?php echo $tempah['tarikh_tamat'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Status:</strong> <?php echo $tempah['status'] ?></li>

                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <strong class="text-dark">Payment File:</strong>
                                        <?php
                                         if (!empty($tempah['payment_file'])) {
                                            $paymentFile = $tempah['payment_file']; // Assuming the payment file path is stored in the `payment_file` column
                                            ?>
                                            <a href="<?php echo $rootPath . "/assets/uploads/" . $paymentFile; ?>"
                                                class="fancybox" data-fancybox="gallery" data-caption="Payment File">
                                                <button class="btn btn-outline-primary btn-sm">View Payment File</button>
                                            </a>
                                            <?php
                                        } else {
                                            echo "<span>No payment file available.</span>";
                                        }
                                        ?>
                                    </li>
                                        <strong class="text-dark">Pictures:</strong>

                                    <li class="list-group-item border-0 ps-0 text-sm">
                                        <?php
                                        // Debug output - Optional for troubleshooting
                                        
                                        // Loop through the $tempah_details array
                                        foreach ($tempah_details as $detail) {
                                            if (!empty($detail['file'])) {
                                                $filepath = $detail['file']; // Assuming the payment file path is stored in the `payment_file` column
                                                $name = $detail['int_cond']; // Assuming the payment file path is stored in the `payment_file` column
                                                ?>
                                                <a href="<?php echo $rootPath . "/assets/uploads/" . htmlspecialchars($filepath); ?>"
                                                    class="fancybox" data-fancybox="gallery" data-caption="<?php echo $name ?>">
                                                    <button class="btn btn-outline-primary btn-sm">View Picture</button>
                                                </a>
                                                <?php
                                            } else {
                                                echo "<span>No payment file available.</span>";
                                            }
                                        }
                                        ?>
                                    </li>


                                    <?php if ($tempah['status'] == 1) { // Check if the status is '1' ?>


                                        <li class="list-group-item border-0 ps-0 text-sm">
                                            <strong class="text-dark">Actions:</strong>
                                            <div class="d-flex">
                                                <form method="POST">
                                                    <input type="hidden" name="tempah_id"
                                                        value="<?php echo $tempah['id']; ?>" />
                                                    <input type="hidden" name="guest_id"
                                                        value="<?php echo $tempah['user_id']; ?>" />
                                                    <button type="submit" name="approve_booking"
                                                        class="btn btn-success btn-sm me-2">Approve</button>
                                                    <input type="hidden" name="tempah_id"
                                                        value="<?php echo $tempah['id']; ?>" />
                                                    <button type="submit" name="reject_booking"
                                                        class="btn btn-danger btn-sm">Reject</button>
                                                </form>
                                            </div>
                                        </li>

                                    <?php } ?>


                                </ul>
                            </div>
                        </div>
                        <hr class="vertical dark">
                    </div>

                    <div class="col-12 col-xl-6 mt-xl-0 mt-4">

                        <?php





                        ?>

                        <div class="card card-plain h-100">
                            <div class="card-header p-3">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-lg float-start">
                                    <i class="material-symbols-rounded opacity-10">key</i>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h6 class="mb-0">Guest To-Do List</h6>
                                    </div>
                                    <!-- <div class="col-md-6 d-flex justify-content-end align-items-center">
                                            <small>Today</small>
                                        </div> -->
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="tempah_id" value="<?php echo $tempah['id']; ?>" />
                                    <ul class="list-group list-group-flush" data-toggle="checklist">

                                        <!-- Task 1 -->
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            name="task_1" value="1" id="checkIn" <?php echo ($tempah['status2'] >= 1) ? 'checked' : ''; ?> <?php echo ($tempah['status2'] < 0) ? 'disabled' : ''; ?>>
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Go to the lobby/counter to
                                                        collect your key</h6>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>

                                        <!-- Task 2 -->
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            name="task_2" value="1" id="takePicture1" <?php echo ($tempah['status2'] >= 2) ? 'checked' : ''; ?> <?php echo ($tempah['status2'] < 1) ? 'disabled' : ''; ?>>
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Take a picture of the homestay
                                                        for comparison of the condition of the house</h6>



                                                </div>


                                                <?php if ($tempah['status2'] == 1) { ?>
                                                    <div class="input-group input-group-static my-3">
                                                        <label>Upload Picture</label>
                                                        <input type="file" class="form-control file-selector-button"
                                                            name="pic_task2[]" accept=".jpg, .jpeg, .png, .pdf">
                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>

                                        <!-- Task 3 -->
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            name="task_3" value="1" id="takePicture2" <?php echo ($tempah['status2'] >= 3) ? 'checked' : ''; ?> <?php echo ($tempah['status2'] < 2) ? 'disabled' : ''; ?>>
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Take a picture of the homestay
                                                        for comparison of the condition of the house</h6>
                                                </div>

                                                <?php if ($tempah['status2'] == 2) { ?>
                                                    <div class="input-group input-group-static my-3">
                                                        <label>Upload Picture</label>
                                                        <input type="file" class="form-control file-selector-button"
                                                            name="pic_task3[]" accept=".jpg, .jpeg, .png, .pdf">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <hr class="horizontal dark mt-4 mb-0">
                                        </li>

                                        <!-- Task 4 -->
                                        <li
                                            class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
                                            <div class="checklist-item ps-2 ms-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check is-filled">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            name="task_4" value="1" id="checkOut" <?php echo ($tempah['status2'] >= 4) ? 'checked' : ''; ?> <?php echo ($tempah['status2'] < 3) ? 'disabled' : ''; ?>>
                                                    </div>
                                                    <h6 class="mb-0 text-dark text-sm">Return to the lobby/counter to
                                                        check out</h6>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <!-- Submit Button -->
                                    <div class="text-end mt-3">
                                        <button type="submit" name="update_booking_details"
                                            class="btn btn-primary">Update Booking Details</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>


                    <?php if ($role == 'guest') { ?>
                        <div class="col-12    mt-4 ">
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
                                                <!-- <p class="mb-4 text-sm">
                                                Phone
                                            </p> -->



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

                    <?php } ?>


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
        $(document).ready(function () {
            // When the 'Notify' button is clicked
            $('#notify').click(function () {
                // Get the admin ID from the 'data-admin' attribute
                var adminId = $(this).data('admin');

                // Log adminId to check it's working
                console.log('Notify admin with ID:', adminId);

                // Perform an AJAX request
                $.ajax({
                    url: '<?php echo $basePath2 ?>/tempahan/notify_admin', // Replace with your PHP endpoint
                    method: 'POST',
                    data: {
                        tempahan_notify_admin: "tempahan_notify_admin",
                        admin_id: adminId,
                    }, // Sending admin_id to the server
                    success: function (response) {
                        // Handle the server response
                        var data = JSON.parse(response); // Parse the JSON response from PHP

                    },
                    error: function (xhr, status, error) {
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