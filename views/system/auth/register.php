<html lang="en" class="">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="bg-gray-200">


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar2.php"); ?>


  <main class="main-content mt-0 ps">
    <div class="page-header align-items-start min-vh-100"
      style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1650&amp;q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 mx-auto">
            <div class="card z-index-0">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>

                </div>
              </div>
          
              <div class="card-body">
                <form role="form" method="POST">
                  <label class="text-dark font-weight-bolder">Name</label>
                  <div class="  mb-3">
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name">
                  </div>
                  <label class="text-dark font-weight-bolder">Email</label>
                  <div class="  mb-3">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                  </div>
                  <label class="text-dark font-weight-bolder">Password</label>
                  <div class="  mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                      name="password1">
                  </div>
                  <label class="text-dark font-weight-bolder">Confirm Password</label>
                  <div class="  mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password"
                      aria-label="Confirm Password" name="password2">
                  </div>
                  <div class="form-check text-start ps-0">
                  <input class="form-check-input" type="checkbox" value="" name="agree_terms" id="flexCheckDefault"
                  checked>
                    
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" name="register">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo $rootPath ?>/login"
                      class="text-dark font-weight-bolder">Sign in</a></p>
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