<!DOCTYPE html>
<html lang="en">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>

<body class="g-sidenav-show bg-gray-100">

    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/sidebar.php"); ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar.php"); ?>

        <div class="container-fluid py-2">

            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1920&amp;q=80');">
                <span class="mask bg-gradient-dark opacity-6"></span>
            </div>

            <div class="card card-body mx-2 mx-md-2 mt-n6">
                <div class="row gx-4 mb-2">

                </div>

                <div class="row">
                    <!-- Damage Details Section -->
                    <div class="col-12 col-lg-6 mt-xl-0 mt-4 ">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Maklumat Kerosakan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <hr class="horizontal gray-light my-2">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">ID
                                            Kerosakan:</strong> <?php echo $damage_info['id'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Tarikh
                                            Kerosakan:</strong> <?php echo $damage_info['created_at'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Description Kerosakan:</strong>
                                        <?php echo $damage_info['description'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Cost
                                            Kerosakan:</strong> <?php echo $damage_info['cost'] ?></li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Status
                                            Kerosakan:</strong> <?php echo $damage_info['status'] ?></li>

                                    <!-- Attachments -->
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Lampiran:</strong>
                                        <?php if (!empty($attachments)) { ?>
                                            <ul>
                                                <?php foreach ($attachments as $attachment) { ?>
                                                    <li>
                                                        <!-- FancyBox for Images -->
                                                        <a href="<?php echo $rootPath . "/" . $attachment; ?>" class="fancybox"
                                                            data-fancybox="gallery" data-caption="Attachment">
                                                            <img src="<?php echo $rootPath . "/" . $attachment; ?>"
                                                                alt="Attachment" style="max-width: 100px; max-height: 100px;">
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        <?php } else { ?>
                                            <span>No attachments available.</span>
                                        <?php } ?>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>

    <div class="col-12 col-lg-6 mt-xl-0 mt-4  ">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h6 class="mb-0">Maklumat Kerosakan</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">



                                <!-- Form for Updating Cost, Status, and Priority -->
                                <form method="POST">
                                    <input type="hidden" name="damage_id" value="<?php echo $damage_info['id']; ?>" />

                                    <!-- Cost Field -->
                                    <div class="input-group input-group-static my-3">
                                        <label for="cost">Cost Kerosakan</label>
                                        <input type="text" class="form-control" id="cost" name="cost"
                                            value="<?php echo $damage_info['cost']; ?>" required>
                                    </div>

                                    <!-- Status Field -->
                                    <div class="input-group input-group-static my-3">
                                        <label for="status">Status Kerosakan</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="cancelled" <?php echo ($damage_info['status'] == '0') ? 'selected' : ''; ?>>Cancelled</option>
                                            <option value="pending" <?php echo ($damage_info['status'] == '1') ? 'selected' : ''; ?>>Pending</option>
                                         
                                            <option value="completed" <?php echo ($damage_info['status'] == '2') ? 'selected' : ''; ?>>Completed</option>
                                        </select>
                                    </div>

                                    <!-- Priority Field -->
                                    <div class="input-group input-group-static my-3">
                                        <label for="priority">Priority</label>
                                        <select class="form-control" id="priority" name="priority" required>
                                            <option value="3" <?php echo ($damage_info['priority'] == '3') ? 'selected' : ''; ?>>Low</option>
                                            <option value="2" <?php echo ($damage_info['priority'] == '2') ? 'selected' : ''; ?>>Medium</option>
                                            <option value="1" <?php echo ($damage_info['priority'] == '1') ? 'selected' : ''; ?>>High</option>
                                        </select>
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-lg w-100 mt-4 mb-0"
                                            name="update_kerosakan">Update
                                            Damage Details</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

             



            </div>




            <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer.php"); ?>

        </div>
    </main>

    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>

</body>
<script>
    // Initialize FancyBox
    Fancybox.bind('[data-fancybox="gallery"]', {
        // Optional options
        loop: true, // Allows looping through images
        closeButton: "top", // Position of close button
        arrows: true, // Show next/prev arrows
        infobar: true, // Show infobar with image number
        toolbar: "auto", // Automatically show toolbar
    });
</script>

</html>