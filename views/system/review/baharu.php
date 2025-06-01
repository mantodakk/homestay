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

                            <div class="input-group input-group-outline my-4">
                                <div class="star-rating d-flex justify-content-start"  >
                           
                                  


                                    
                                    <!-- 1 Star Radio Button (Empty Star) -->
                                    <input type="radio" id="star1" name="star" value="1" class="star-radio" />
                                    <label for="star1" class="star">
                                        <span class="material-symbols-outlined">star_border</span> <!-- Empty star -->
                                    </label>
                                    <!-- 2 Stars Radio Button -->
                                    <input type="radio" id="star2" name="star" value="2" class="star-radio" />
                                    <label for="star2" class="star">
                                        <span class="material-symbols-outlined">star</span>
                                    </label>
                                    
                                    <!-- 3 Stars Radio Button -->
                                    <input type="radio" id="star3" name="star" value="3" class="star-radio" />
                                    <label for="star3" class="star">
                                        <span class="material-symbols-outlined">star</span>
                                    </label>
                                      <!-- 4 Stars Radio Button -->
                                    <input type="radio" id="star4" name="star" value="4" class="star-radio" />
                                    <label for="star4" class="star">
                                        <span class="material-symbols-outlined">star</span>
                                    </label>
                                             <!-- 5 Stars Radio Button -->
                                    <input type="radio" id="star5" name="star" value="5" class="star-radio" />
                                    <label for="star5" class="star">
                                        <span class="material-symbols-outlined">star</span>
                                    </label>

                                </div>
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
        document.querySelectorAll('.star-radio').forEach((radio) => {
            radio.addEventListener('mouseover', function () {
                const rating = this.value;
                for (let i = 0; i < rating; i++) {
                    document.querySelectorAll('.star')[i].style.color = 'gold';
                }
            });

            radio.addEventListener('mouseout', function () {
                document.querySelectorAll('.star').forEach(star => {
                    star.style.color = '#ccc'; // Reset to gray on mouseout
                });
            });
        });
    </script>
</body>

</html>