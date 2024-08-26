<?php 
    // Mục đích kiểm tra xem bạn có quyền truy cập trang này không thông qua BIẾN $_SESSION['da_dang_nhap']
    session_start();
    if (!$_SESSION["da_dang_nhap"]) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
;?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kuu Accessories | Quản trị vòng tay </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Trang chủ </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Liên hệ </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
      <img src="../images/demo/1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KUU Accessories</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/demo/gallery/smile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">JIMMY </a>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản trị sản phẩm  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="quan_tri_that_lung.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thắt lưng  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="quan_tri_vong_co.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vòng cổ </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="quan_tri_nhan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhẫn  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="quan_tri_vong_tay.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vòng tay  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="quan_tri_khuyen_tai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khuyên tai  </p>
                </a>
              </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> Thêm mới </a> </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
                <li class="breadcrumb-item active">Dữ liệu </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Content Wrapper. Contains page content -->
      <!-- Main content -->
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Quản trị vòng tay </h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item"><a href="quan_tri_san_pham.php">Quản trị sản phẩm </a></li>
              <li class="breadcrumb-item active">Quản trị vòng tay  </li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Danh sách vòng tay  | <a href="vong_tay_them_moi.php">Thêm mới </a>
              </div>
             <div class="card-body">
                  <form method="POST" action="vong_tay_them_moi_thuc_hien.php" enctype="multipart/form-data">
                      <div class="form-floating mb-3">
                          <label for="txtTenVongTay">Tên vòng tay  </label>
                          <input class="form-control" id="txtTenVongTay" name="txtTenVongTay" placeholder="Tên vòng tay  " />
                          
                      </div>
                      <div class="form-floating mb-3">
                          <label for="txtAnh">Ảnh minh họa</label>
                          <input type="file" class="form-control" id="txtAnh" name="txtAnh" placeholder="Ảnh minh họa" />
                          
                      </div>
                      <div class="form-floating mb-3">
                          <label for="txtGiaTien">Giá tiền </label>
                          <input class="form-control" id="txtGiaTien" name="txtGiaTien" placeholder="Giá tiền " />
                          
                      </div>
                      
                      <div class="mt-4 mb-0">
                          <button type="submit">Đăng bài</button>
                      </div>
                  </form>
              </div>
            </div>
          </div>
        </main>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0-rc
          </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>