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
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form role="form" class=" " method="POST">

                   <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                      <ul>
                        <?php foreach ($errors as $error): ?>
                          <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                  
                  <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email"
                      name="email">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                      aria-label="Password" name="password">
                  </div>
                  <!-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div> -->
                  <div class="text-center">
                    <button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" type="submit"
                      name="login">Sign in</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="<?php echo $rootPath ?>/register" class="text-primary text-gradient font-weight-bold">Sign
                    up</a>
                </p>
              </div>
            </div>
          </div>
          <div
            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div
              class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="<?php echo $rootPath ?>/assets/img/shapes/pattern-lines.svg" alt="pattern-lines"
                class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2"
                  src="<?php echo $rootPath ?>/assets/img/illustrations/undraw_cabin_7fei.svg" alt="image">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into
                the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>



</body>

</html>