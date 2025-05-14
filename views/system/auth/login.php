<html lang="en" class="">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="bg-gray-200">


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar2.php"); ?>


  <main class="main-content mt-0 ps">
    <div class="page-header align-items-start min-vh-100"
      style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>

                </div>
              </div>
              <div class="card-body">
                <form role="form" class=" " method="POST">
                  <div class="input-group input-group-outline  d-block my-3">

                    <label class="text-dark font-weight-bolder mt-3 mb-3">Email</label>
                    <div class="  mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                    </div>

                    <label class="text-dark font-weight-bolder">Password</label>
                    <div class="  mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                        name="password">
                    </div>
                    <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" name="login">Sign in</button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Don't have an account?
                      <a href="<?php echo $rootPath ?>/register"
                        class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/footer2.php"); ?>


    </div>

  </main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>


</body>

</html>