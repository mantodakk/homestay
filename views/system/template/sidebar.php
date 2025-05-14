<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="<?php echo $rootPath; ?>/dashboard">
            <img src="<?php echo $rootPath; ?>/assets/img/logo.jpg" class="navbar-brand-img" width="26" height="26"
                alt="main_logo">
            <span class="ms-1 text-sm text-dark">Villa D'hati</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active bg-gradient-dark text-white" href="<?php echo $rootPath ?>/dashboard">
                    <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a data-bs-toggle="collapse" href="#sidebar_tempah" class="nav-link text-dark collapsed"
                    aria-controls="sidebar_tempah" role="button" aria-expanded="false">
                    <i class="material-symbols-rounded opacity-5   me-2 ">account_circle</i>
                    <span class="nav-link-text ms-1 ps-1">Tempah</span>
                </a>
                <div class="collapse" id="sidebar_tempah" style="">
                    <ul class="nav ">
                        <li class="nav-item  ms-1">
                            <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/tempah/baharu">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  ms-1  ps-1"> Baharu </span>
                            </a>
                        </li>
                        <li class="nav-item  ms-1">
                            <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/tempah/senarai">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-1  ps-1"> Senarai </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a data-bs-toggle="collapse" href="#sidebar_review" class="nav-link text-dark collapsed"
                    aria-controls="sidebar_review" role="button" aria-expanded="false">
                    <i class="material-symbols-rounded opacity-5   me-2 ">account_circle</i>
                    <span class="nav-link-text ms-1 ps-1">Review</span>
                </a>
                <div class="collapse" id="sidebar_review" style="">
                    <ul class="nav ">
                        <li class="nav-item  ms-1">
                            <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/review/baharu">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal  ms-1  ps-1"> Baharu </span>
                            </a>
                        </li>
                        <li class="nav-item  ms-1">
                            <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/review/senarai">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-1  ps-1"> Senarai </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a data-bs-toggle="collapse" href="#sidebar_report" class="nav-link text-dark collapsed"
                    aria-controls="sidebar_report" role="button" aria-expanded="true">
                    <i class="material-symbols-rounded opacity-5   me-2 ">dashboard</i>
                    <span class="nav-link-text ms-1 ps-1">Report</span>
                </a>
                <div class="collapse  " id="sidebar_report" style="">
                    <ul class="nav ">
                        <li class="nav-item  ms-1">
                            <a class="nav-link text-dark  collapsed" data-bs-toggle="collapse" aria-expanded="false"
                                href="#sidebar_kerosakan">
                                <span class="sidenav-mini-icon"> K </span>
                                <span class="sidenav-normal  ms-1  ps-1"> Kerosakan <b class="caret"></b></span>
                            </a>
                            <div class="collapse" id="sidebar_kerosakan" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item ms-2">
                                        <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/aduan/kerosakan/baharu">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal  ms-1  ps-1"> Baharu </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ms-2">
                                        <a class="nav-link text-dark " href="<?php echo $rootPath; ?>/aduan/kerosakan/senarai">
                                            <span class="sidenav-mini-icon"> S </span>
                                            <span class="sidenav-normal  ms-1  ps-1"> Senarai </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <!-- <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a> -->
            <!-- <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> -->
        </div>
    </div>
</aside>