<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
  data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <!-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol> -->
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div> -->
      </div>
      <ul class="navbar-nav d-flex align-items-center  justify-content-end">
        <!-- <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li>
            <li class="mt-1">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li> -->
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <!-- <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
              </a> -->
        </li>
        <li class="nav-item dropdown pe-3 d-flex align-items-center ">
          <a href="javascript:;" class="nav-link text-body d-flex justify-content-center align-items-center"
            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            
            <i class="material-symbols-rounded">account_circle</i>
          </a>

          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
          <li class="mb-2">
              <div class="dropdown-item border-radius-md  "  >
                <div class="d-flex py-1">
                
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                       <?php  echo $_SESSION['user_details']['email']?> 
                    </h6>
                    
                  </div>
                </div>
              </div>
            </li>
            <!-- <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="<?php  echo $rootPath?>/profile">
                <div class="d-flex py-1">
                
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">Profile</span>
                    </h6>
                    
                  </div>
                </div>
              </a>
            </li> -->

            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="<?php  echo $rootPath?>/logout">
                <div class="d-flex py-1">
                
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">Logout</span>
                    </h6>
                    
                  </div>
                </div>
              </a>
            </li>
         
          </ul>
        </li>
        <li class="nav-item d-flex align-items-center">
          <!-- <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="material-symbols-rounded">account_circle</i>
              </a> -->
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->