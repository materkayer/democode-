
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
  <title>Kuu Accessories | Quản trị người dùng </title>

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
    <body class="sb-nav-fixed">
        <?php         
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('../config.php');


            // 2. Lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
            $nguoi_dung_id = $_POST["txtID"];
            $ten_nguoi_dung = $_POST["txtHoTen"];
            $email = $_POST["txtEmail"];
            $so_dien_thoai = $_POST["txtSoDienThoai"];
            $dia_chi = $_POST["txtDiaChi"];
            $mat_khau = $_POST["txtMatKhau"];
            $ghi_chu = $_POST["txtGhiChu"];


            // 3. Viết câu lệnh truy vấn để sửa dữ liệu vào bảng TIN TỨC trong CSDL)
             
                $sql = "
                    UPDATE `tbl_nguoi_dung` SET `ten_nguoi_dung` = '".$ten_nguoi_dung."', `email` = '".$email."', `so_dien_thoai` = '".$so_dien_thoai."', `dia_chi` = '".$dia_chi."', `mat_khau` = '".$mat_khau."', `ghi_chu` = '".$ghi_chu."' WHERE `tbl_nguoi_dung`.`nguoi_dung_id` = '".$nguoi_dung_id."'
                    ";                
        
          // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã sửa tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã sửa bài viết thành công');
                </script>
            ";

            echo "
                <script type='text/javascript'>
                    window.location.href='quan_tri_nguoi_dung.php';
                </script>
            ";
        ;?>
    </body>
</html>