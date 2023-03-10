<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo _PATH_ROOT_PUBLIC . '/plugins/fontawesome-free/css/all.min.css' ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo _PATH_ROOT_PUBLIC . '/dist/css/adminlte.min.css' ?>">
  <link rel="stylesheet" href="<?php echo _PATH_ROOT_PUBLIC . '/css/customer.css' ?>">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .nav-link.active {
      background-color: #fff;
      color: #98cb50 !important;
    }

    html,
    body {
      font-family: 'Playfair Display', 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" style="min-height:100vh">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <!-- <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle"> -->
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <!-- <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"> -->
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img class="rounded-full !h-[2.1rem]" src="<?php
                                                        if (isset($_SESSION['user']['avt'])) {

                                                          echo _PATH_UPLOAD_AVT . $_SESSION['user']['avt'];
                                                        } else {

                                                          echo _PATH_UPLOAD_AVT . '/avt.jpg';
                                                        }

                                                        ?>" alt="">
            <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info mx-[auto]">




            <a href="#" class="d-block"><?php echo $_SESSION['user']['fullname'] ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Starter Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'home') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/admin/index' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-house"></i>
                    <p>Home</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'cate') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/category/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-sitemap"></i>
                    <p>Danh m???c s???n ph???m</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'product') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/products/list' ?>" class="nav-link <?php echo $active ?> ">
                    <i class="fa-solid fa-leaf"></i>
                    <p>S???n ph???m</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'group') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/groups/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-users"></i>
                    <p>Nh??m Ng?????i d??ng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'user') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/user/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-user"></i>
                    <p>Ng?????i d??ng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'slider') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/slider/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-sliders"></i>
                    <p>Slider</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'menu') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/menu/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-ellipsis"></i>
                    <p>Menu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'setting') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/setting/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-gear"></i>
                    <p>Setting</p>
                  </a>
                </li>
                <li class="nav-item">
                  <?php
                  $active = '';
                  if ($data['page_active'] == 'bill') {
                    $active = 'active';
                  }
                  ?>
                  <a href="<?php echo _WEB_ROOT . '/bill/list' ?>" class="nav-link <?php echo $active ?>">
                    <i class="fa-solid fa-list-check"></i>
                    <p>Bill</p>
                  </a>
                </li>
                <li class="nav-item">

                  <a href="<?php echo _WEB_ROOT . '/user' ?>" class="nav-link ">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <p>Exit</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper ">

      <?php
      require_once './mvc/views/pages/admin/' . $data['page'] . '.php';
      ?>

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <!-- <footer class="main-footer bg-[#f4f6f9]">
       To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
        Anything you want -->
    <!-- </div> -->
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
    <!-- </footer>  -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo _PATH_ROOT_PUBLIC . '/plugins/jquery/jquery.min.js' ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo _PATH_ROOT_PUBLIC . '/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- AdminLTE App -->
  <script src="<?php echo _PATH_ROOT_PUBLIC . '/dist/js/adminlte.min.js' ?>"></script>
  <script src="<?php echo _PATH_ROOT_PUBLIC . '/js/customer.js' ?>"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>