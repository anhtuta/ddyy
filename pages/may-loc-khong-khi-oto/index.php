<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Máy lọc không khí ô tô 3 lớp, lọc sạch không khí 360°" />
  <title>Máy lọc không khí ô tô</title>

  <link rel="stylesheet" type="text/css" href="../common/static/css/style.css?v=2">
  <link rel="stylesheet" type="text/css" href="../common/static/css/that-lan-von-cau.css?v=3">
  <link rel="stylesheet" type="text/css" href="../common/static/css/phone.css">
  <link rel="icon" href="Logo.png">
  <script src="../common/static/js/script.js?v=1"></script>
  <script src="https://kit.fontawesome.com/60f0e96d4b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.3.0/font-awesome-animation.min.css">

  <style>
    :root {
      --primaryColor: #2199F9;
      --primaryColorHover: #007de0;
      --ddyyPrimary: #2199F9;
      --ddyyPrimaryHover: #007de0;
      --introHeaderColor: #484848;
    }

    @keyframes bn-blinker {
      50% {
        background: #2199F9;
        color: #fff;
      }

      100% {
        background: #fff;
        color: #000;
      }
    }

    /* Ref: https://www.w3schools.com/howto/howto_css_responsive_text.asp */
    .price-inner-image {
      position: absolute;
      top: 39%;
      right: 6%;
    }

    .price-inner-image .price {
      font-size: 1.5em;
    }

    .price-inner-image .btn,
    .offer-inner-image .btn {
      display: block;
      margin: 0;
      margin-left: auto;
      font-size: 2em;
    }

    .offer-inner-image {
      position: absolute;
      top: 86%;
      left: 6%;
    }

  </style>
</head>

<?php
$originalPrice = "3.600.000 VNĐ";
$salePrice = "1.990.000 VNĐ";
$product = "Máy lọc không khí";
$imgSectionRegister = "./may-loc-kk-6-vn.jpg?v=1";
$phoneNum = "0354 948 368";
$showAddressTxt = true;
$footerURL = "#";
$footerTitle = "Tiêu dùng thông minh";
?>

<body>
  <div id="fb-root"></div>
  <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=3121891904569704&autoLogAppEvents=1" nonce="Q8AahtUw"></script> -->

  <div class="tlvc-wrapper">
    <div class="section-intro" style="margin-top: 70px;">
      <div class="tlvc-div">
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-3-vn.jpg?v=2" />
          <div class="price-inner-image">
            <?php require '../common/price.php' ?>
            <button class="btn btn-success btn-buynow-blink-green-white" onclick="scrollPage(getByClass('register-form'), 1000)">Nhận ưu đãi</button>
          </div>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-7-vn.jpg?v=2" />
          <div class="offer-inner-image">
            <button class="btn btn-success btn-buynow-blink-green-white" onclick="scrollPage(getByClass('register-form'), 1000)">Nhận ưu đãi</button>
          </div>
        </div>
        <h2 class="intro-header">1. BỘ LỌC 3 LỚP</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-1-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-22-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-18-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>

        <h2 class="intro-header">2. HIỂN THỊ</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-11-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-16-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>

        <h2 class="intro-header">3. THIẾT KẾ</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-10-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>

        <h2 class="intro-header">4. CẢM ỨNG TỰ ĐỘNG</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-9-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-13-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>

        <h2 class="intro-header">5. THÔNG SỐ KỸ THUẬT</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-17-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-14-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
      </div>
    </div>
    <div class="section-photos">
      <h2 class="photos-label">HÌNH ẢNH SẢN PHẨM</h2>
      <div class="column-wrapper">
        <div class="column">
          <img src="./may-loc-kk-6-vn.jpg?v=1" alt="máy lọc không khí" />
          <img src="./may-loc-kk-5-vn.jpg?v=1" alt="máy lọc không khí" />
          <img src="./may-loc-kk-7-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
        <div class="column">
          <img src="./may-loc-kk-8-vn.jpg?v=1" alt="máy lọc không khí" />
          <img src="./may-loc-kk-23-vn.jpg?v=1" alt="máy lọc không khí" />
          <img src="./may-loc-kk-15-vn.jpg?v=1" alt="máy lọc không khí" />
        </div>
      </div>
    </div>
    <!-- div class="section-feedback">
      <div class="feedback-wrapper">
        <h2 class="feedback-label">FEEDBACK CỦA KHÁCH HÀNG</h2>
        <div class="fb-comments" data-href="http://ducdongyyen.com/pages/may-loc-khong-khi-oto/" data-numposts="5" data-width="100%" data-colorscheme="dark"></div>
      </div>
    </div-->
    <div class="section-register">
      <?php require '../common/register-section.php'; ?>
    </div>
  </div>

  <?php require '../common/register-modal.php' ?>
  <?php require '../common/btn-call-now.php' ?>
  <?php require '../common/btn-buy-now.php' ?>
  <?php require '../common/footer.php' ?>
  <?php require '../common/sticky-comment.php' ?>
</body>

<script src="../common/static/js/register.js"></script>

</html>