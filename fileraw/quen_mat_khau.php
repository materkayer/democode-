<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Tài khoản</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src='https://360boutique.vn/wp-content/themes/360boutique/js/jquery-latest.min.js' type='text/javascript'></script>
<script>
var formatMoney = '{{amount}}₫';
jQuery.themeAssets = {
  arrowDown: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12 8" style="enable-background:new 0 0 12 8; width: 12px; height: 8px;" xml:space="preserve"><polyline points="0,2 2,0 6,4 10,0 12,2 6,8 0,2 "/></svg>',
  arrowRight: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31 10" style="enable-background:new 0 0 31 10; width: 31px; height: 10px;" xml:space="preserve"><polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "/></svg>',
};
jQuery.themeCartSettings = 'overlay';
</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '338625417764000');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=338625417764000&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "355801197916763");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +84 929571485</li>
        <li><i class="far fa-envelope rgtspace-5"></i> kuuaccessories@gmail.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 

      <!-- ################################################################################################ -->
      <ul class="nospace">
              <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Tìm kiếm sản phẩm&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
                 <li><a href="tai_khoan.php" title="Tài khoản"><i class="fas fa-user-circle"></i></a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.php" width="20px" height="20px"><img src="images/demo/1.jpg" style="width: 50px; height: auto;"></a>   Kuu Accessories</h1>

        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="index.php">Trang chủ</a></li>
          <li><a href="index.php#works">Giới thiệu</a></li>
          <li><a class="drop" href="#">Sản phẩm</a>
            <ul>
              <li><a href="san_pham/that_lung.php">Thắt lưng</a></li>
              <li><a href="san_pham/vong_co.php">Vòng cổ</a></li>
              <li><a href="san_pham/vong_tay.php">Vòng tay</a></li>
              <li><a href="san_pham/khuyen_tai.php">Khuyên tai</a></li>
              <li><a href="san_pham/nhan.php">Nhẫn</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Giảm giá</a>
            <ul>
              <li><a href="giam_gia/30.php">30%</a></li>          
              <li><a href="giam_gia/40.php">40%</a></li>
              <li><a href="giam_gia/50.php">50%</a></li>
            </ul>
          </li>
          <li><a href="index.php#history">Đánh giá</a></li>
          <li><a href="meo_hay/tin_tuc.php">Mẹo nhỏ</a></li>

        </ul>
        <!-- ################################################################################################ -->
        <main class="main-index">
      </nav>
      </div>
      <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '4048725718498408');
fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=4048725718498408&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </header>
    </style>
  <link rel='stylesheet' id='wp-block-library-css'  href='https://360boutique.vn/wp-includes/css/dist/block-library/style.min.css?ver=5.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='toc-screen-css'  href='https://360boutique.vn/wp-content/plugins/table-of-contents-plus/screen.min.css?ver=2002' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/assets/css/select2.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.2.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='https://360boutique.vn/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=5.2.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
  </div>
  <main class=" woocommerce  ">
<div id="article">
  <div class="container-fluid">
    <div class="row breadcrumb-shop">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5 blog-breadcrumb">
                <ol class="breadcrumb breadcrumb-arrows">
<a href="index.php">Trang chủ</a> / <a href="./tai_khoan.php">Quên mật khẩu</a> / Quên mật khẩu</nav> 
                </ol>
      </div>
    </div>
    <br>
    <div class="content-page">
    
          <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<form method="post" class="woocommerce-ResetPassword lost_reset_password">

  <p>Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</p>
  <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
    <label for="user_login">Tên đăng nhập hoặc email</label>
    <input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" />
  </p>

  <div class="clear"></div>

  
  <p class="woocommerce-form-row form-row">
    <input type="hidden" name="wc_reset_password" value="true" />
    <button type="submit" class="woocommerce-Button button" value="Đặt lại mật khẩu">Đặt lại mật khẩu</button>
  </p>

  <input type="hidden" id="woocommerce-lost-password-nonce" name="woocommerce-lost-password-nonce" value="76aaab85c8" /><input type="hidden" name="_wp_http_referer" value="/tai-khoan/lost-password/" />
</form>
</div>

    </div>
  </div>
</div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <section id="ctdetails" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="tel:092 957 14 85"><i class="fas fa-phone"></i></a> <span><strong>Hỗ trợ / Mua hàng:</strong> (+84) 929 571 485</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="https://mail.google.com/mail/u/0/#search/huyhaiduong01%40gmail.com"><i class="fas fa-envelope"></i></a> <span><strong>Gmail:</strong>huyhaiduong01@gmail.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Thứ Hai - Chủ Nhật:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="https://www.google.com/maps/place/ECOGREEN/@20.983554,105.8064885,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ad08bccc8773:0x49fb014b1e39231f!8m2!3d20.9835468!4d105.8086736"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Địa điểm:</strong>  <a href="https://www.google.com/maps/place/ECOGREEN/@20.983554,105.8064885,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ad08bccc8773:0x49fb014b1e39231f!8m2!3d20.9835468!4d105.8086736">Ecogreen, 286 Nguyễn Xiển, Hoàng Mai, Hà Nội</a></span></div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/04.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
<h6 class="heading">Danh sách chi nhánh</h6>
      <ul class="nospace linklist">
        <li>
          <article>
              <p class="nospace btmspace-15">286 Nguyễn Xiển, Hoàng Mai, Hà Nội</p>
              <p class="nospace btmspace-15">377 Khâm Thiên, Đống Đa, Hà Nội</p>
              <p class="nospace btmspace-15">114 đường 9A, Bình Hưng, Bình Chánh, TP. Hồ Chí minh</p>
              <p class="nospace btmspace-15">Số 10 Lê Hồng Phong, Ngô Quyền, Hải Phòng</p>
              <p class="nospace btmspace-15">1 Duy Tân, Phước Vĩnh, Thừa Thiên Huế</p>
                      </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Chính sách và quy định chung</h6>
      <ul class="nospace linklist">
        <li><a href="chinh_sach_va_quy_dinh/mua_hang.php">Hướng dẫn mua hàng</a></li>
        <li><a href="chinh_sach_va_quy_dinh/doi_tra_hang.php">Quy định về đổi trả hàng</a></li>
        <li><a href="chinh_sach_va_quy_dinh/bao_hanh.php">Chính sách bảo hành</a></li>
        <li><a href="chinh_sach_va_quy_dinh/mua_hang.php">Điều khoản dịch vụ</a></li>
        <li><a href="index.php#works">Giới thiệu</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Địa chỉ</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="https://www.facebook.com/KuuAccessories">Kuu Accessories Shop</a></p>
              <p class="nospace btmspace-15">Tòa nhà Ecogreen, 286 Nguyễn Xiển, Hoàng Mai, Hà Nội</p>
              <p class="nospace btmspace-15">Số điện thoại: 0929 571 485</p>
              <p class="nospace btmspace-15">Email: kuuaccessories@gmail.com</p>
              <p class="nospace btmspace-15">Website: </p>
                      </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
            <h4 class="heading">
              Fanpage
            </h4>
            <ul class="nospace linklist">
            <li>    
<div class="fb-page" data-href="https://www.facebook.com/KuuAccessories" data-tabs="timeline" data-width="" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/KuuAccessories" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KuuAccessories">Kuu Accessories</a></blockquote></div>
</li>
          </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="https://www.facebook.com/KuuAccessories">Kuu Accessories</a></p>
    <p class="fl_right">Design by <a target="_blank" href="https://www.facebook.com/h.grande/" title="Design by Huy Nguyen">Huy Nguyen</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>