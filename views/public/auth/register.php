<html lang="en" itemscope="" itemtype="http://schema.org/WebPage">


<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/head.php"); ?>


<body class="sign-in-illustration">

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/nav.php"); ?>


  <section>
<div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Enter your email and password to register</p>
              </div>
              <div class="card-body pb-3">


                <form role="form" method="POST">


                   <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                      <ul>
                        <?php foreach ($errors as $error): ?>
                          <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>


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
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" name="register">Sign up</button>
                  </div>
               
                </form>


              </div>
              <div class="card-footer text-center pt-0 px-sm-4 px-1">
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?php echo $rootPath ?>/login"
                      class="text-dark font-weight-bolder">Sign in</a></p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="<?php echo $rootPath ?>/assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo $rootPath ?>/assets/img/illustrations/undraw_best-place_dhzp.svg" alt="image">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">Your journey starts here</h4>
              <p class="text-white">Just as it takes a company to sustain a product, it takes a community to sustain a protocol.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>



</body>

</html>