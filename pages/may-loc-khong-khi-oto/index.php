<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Máy lọc không khí ô tô 3 lớp, lọc sạch không khí 360°" />
  <title>Máy lọc không khí ô tô</title>

  <link rel="stylesheet" type="text/css" href="../static/css/style.css?date=20210306">
  <link rel="stylesheet" type="text/css" href="../static/css/that-lan-von-cau.css?date=20201103">
  <!-- <link rel="icon" href="../static/img/icon.png"> -->
  <script src="../static/js/script.js"></script>
  <script src="https://kit.fontawesome.com/60f0e96d4b.js" crossorigin="anonymous"></script>
  <style>
    :root {
      --primaryColor: #2199F9;
      --primaryColorHover: #007de0;
      --ddyyPrimary: #2199F9;
      --ddyyPrimaryHover: #007de0;
    }
  </style>
</head>

<?php
$originalPrice = "3.600.000 VNĐ";
$salePrice = "1.990.000 VNĐ";
$product = "Máy lọc không khí";
$imgSectionRegister = "./may-loc-kk-6.jpg";
$phoneNum = "0354 948 368";
?>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=3121891904569704&autoLogAppEvents=1" nonce="Q8AahtUw"></script>

  <div class="tlvc-wrapper">
    <div class="section-intro">
      <div class="tlvc-div">
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-3-vn.jpg" />
          <button class="first-btn-buynow btn-buynow-blink" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <h2 class="intro-header">1. BỘ LỌC 3 LỚP</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-1-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-22-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-7-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-18-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>

        <h2 class="intro-header">2. HIỂN THỊ</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-11-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-16-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>

        <h2 class="intro-header">3. CẤU TẠO</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-10-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>

        <h2 class="intro-header">4. CẢM ỨNG TỰ ĐỘNG</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-9-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-13-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>

        <h2 class="intro-header">5. THÔNG SỐ KỸ THUẬT</h2>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-17-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./may-loc-kk-14-vn.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
      </div>
    </div>
    <div class="section-photos">
      <h2 class="photos-label">HÌNH ẢNH SẢN PHẨM</h2>
      <div class="column-wrapper">
        <div class="column">
          <img src="./may-loc-kk-6.jpg">
          <img src="./may-loc-kk-5.jpg">
          <img src="./may-loc-kk-7-vn.jpg">
        </div>
        <div class="column">
          <img src="./may-loc-kk-8.jpg">
          <img src="./may-loc-kk-23.jpg">
          <img src="./may-loc-kk-15-vn.jpg">
        </div>
      </div>
    </div>
    <div class="section-feedback">
      <div class="feedback-wrapper">
        <h2 class="feedback-label">FEEDBACK CỦA KHÁCH HÀNG</h2>
        <div class="fb-comments" data-href="http://xuongducdongyyen.com/pages/may-loc-khong-khi-oto/" data-numposts="5" data-width="100%" data-colorscheme="dark"></div>
      </div>
    </div>
    <div class="section-register">
      <?php require '../register-section.php'; ?>
    </div>

    <?php //require '../footer.php' ?>
  </div>

  <?php require '../register-modal.php' ?>
  <?php require '../call-now.php' ?>
</body>

<script src="../static/js/register.js"></script>

</html>