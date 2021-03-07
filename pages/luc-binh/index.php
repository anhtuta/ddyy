<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Lục bình bằng đồng cao cấp, chế tác thủ công, tinh xảo. Miễn phí giao hàng toàn quốc, thanh toán khi nhận hàng" />
  <title>Lục bình | Đúc Đồng Ý Yên</title>
  <!-- Append a random query parameter to remove cached file each time we change css file -->
  <link rel="stylesheet" type="text/css" href="../static/css/style.css?date=20210306">
  <link rel="stylesheet" type="text/css" href="../static/css/that-lan-von-cau.css?date=20201103">
  <link rel="icon" href="../static/img/icon.png">
  <script src="../static/js/script.js"></script>
</head>

<?php
  $originalPrice = "72 000 000 VNĐ";
  $salePrice = "58 000 000 VNĐ";
  $product = "Lục bình";
  $imgSectionRegister = "./luc-binh-1.jpg";
?>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=3121891904569704&autoLogAppEvents=1"
    nonce="Q8AahtUw"></script>

  <div class="tlvc-wrapper">
    <div class="section-intro">
      <div class="tlvc-div">
        <div class="tlvc-item" style="background: #fff2bd;">
          <img class="tlvc-image" src="./luc-binh-header.png" />
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./luc-binh_intro.jpg" />
          <button class="first-btn-buynow btn-buynow-blink" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./luc-binh-2.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./luc-binh-1.jpg" />
          <button class="tlvc-btn" onClick="openRegisterModal()">Mua ngay</button>
        </div>
      </div>
    </div>
    <div class="section-photos">
      <h2 class="photos-label">HÌNH ẢNH SẢN PHẨM</h2>
      <div class="column-wrapper">
        <div class="column">
          <img src="./luc-binh-1.jpg">
          <img src="./luc-binh-2.jpg">
          <img src="./luc-binh-3.jpg">
          <img src="./luc-binh-1.jpg">
        </div>
        <div class="column">
          <img src="./luc-binh-1.jpg">
          <img src="./luc-binh-2.jpg">
          <img src="./luc-binh-3.jpg">
          <img src="./luc-binh-1.jpg">
        </div>
      </div>
    </div>
    <div class="section-feedback">
      <div class="feedback-wrapper">
        <h2 class="feedback-label">FEEDBACK CỦA KHÁCH HÀNG</h2>
        <div class="fb-comments" data-href="http://xuongducdongyyen.com/pages/luc-binh.html" data-numposts="5"
          data-width="100%" data-colorscheme="dark"></div>
      </div>
    </div>
    <div class="section-register">
      <?php require '../register-section.php'; ?>
    </div>

    <?php require '../footer.php' ?>
  </div>

  <?php require '../register-modal.php' ?>
</body>

</html>