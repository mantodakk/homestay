<html lang="en" class="">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/head.php"); ?>


<body class="bg-gray-200">


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/navbar2.php"); ?>


  <main class="main-content mt-0 ps">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/uploads/1413399939678471ea070/2c0343f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 m-auto text-center">
            <h1 class="display-1 text-bolder text-white">Error 404</h1>
            <h2 class="text-white">Erm. Page not found</h2>
            <p class="lead text-white">We suggest you to go to the homepage while we solve this issue.</p>
            <a   class="btn btn-outline-white mt-4" href="<?php  echo $rootPath?>/">Go to Homepage</a>
          </div>
        </div>
      </div>
    </div>
  <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>
  
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/system/template/script.php"); ?>


</body>

</html>