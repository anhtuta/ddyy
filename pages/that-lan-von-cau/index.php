<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Đỉnh thất lân vờn cầu bằng đồng cao cấp, chế tác thủ công, tinh xảo. Miễn phí giao hàng toàn quốc, thanh toán khi nhận hàng" />
  <title>Đỉnh Thất Lân Vờn Cầu | Đúc Đồng Ý Yên</title>
  <!-- Append a random query parameter to remove cached file each time we change css file -->
  <link rel="stylesheet" type="text/css" href="../static/css/style.css?date=20210306">
  <link rel="stylesheet" type="text/css" href="../static/css/that-lan-von-cau.css?date=20201103">
  <link rel="icon" href="../static/img/icon.png">
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=3121891904569704&autoLogAppEvents=1" nonce="Q8AahtUw"></script>
  <script src="../static/js/script.js"></script>

  <div class="tlvc-wrapper">
    <div class="section-intro">
      <div class="tlvc-div">
        <div class="tlvc-item">
          <img class="tlvc-image" src="./that-lan-von-cau_intro.jpg" />
          <button class="first-btn-buynow btn-buynow-blink" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./that-lan-von-cau_thiet-ke.jpg" />
          <button class="btn btn-danger" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./that-lan-von-cau_che-tac.jpg" />
          <button class="btn btn-danger" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./that-lan-von-cau_y-nghia.jpg" />
          <button class="btn btn-danger" onClick="openRegisterModal()">Mua ngay</button>
        </div>
        <div class="tlvc-item">
          <img class="tlvc-image" src="./that-lan-von-cau_trung-bay.jpg" />
          <button class="btn btn-danger" onClick="openRegisterModal()">Mua ngay</button>
        </div>
      </div>
    </div>
    <div class="section-photos">
      <h2 class="photos-label">HÌNH ẢNH SẢN PHẨM</h2>
      <div class="column-wrapper">
        <div class="column">
          <img src="./7 That Lan Von Cau.jpg">
          <img src="./19 That Lan Von Cau.jpg">
          <img src="./9 That Lan Von Cau.jpg">
          <img src="./15 That Lan Von Cau.jpg">
        </div>
        <div class="column">
          <img src="./26 That Lan Von Cau.jpg">
          <img src="./10 That Lan Von Cau.jpg">
          <img src="./25 That Lan Von Cau.jpg">
          <img src="./12 That Lan Von Cau.jpg">
        </div>
      </div>
    </div>
    <div class="section-feedback">
      <div class="feedback-wrapper">
        <h2 class="feedback-label">FEEDBACK CỦA KHÁCH HÀNG</h2>
        <div class="fb-comments" data-href="http://xuongducdongyyen.com/pages/that-lan-von-cau.html" data-numposts="5" data-width="100%" data-colorscheme="dark"></div>
      </div>
    </div>
    <div class="section-register">
      <?php
      $originalPrice = "72 000 000 VNĐ";
      $salePrice = "58 000 000 VNĐ";
      ?>
      <?php require '../register-section.php' ?>
    </div>

    <?php require '../footer.php' ?>
  </div>

  <?php require '../register-modal.php' ?>
</body>

<script src="../static/js/register.js"></script>
<script>
  function convertTimeValue(number) {
    if (number < 10) return '0' + number;
    return number;
  }

  var countdownInterval = setInterval(function() {
    // 2:00 a.m
    var tomorow = new Date();
    tomorow.setHours(2);
    tomorow.setMinutes(0);
    tomorow.setSeconds(0);

    var currentTime = new Date();
    if (currentTime > tomorow) {
      tomorow.setDate(tomorow.getDate() + 1);
    }
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = tomorow - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("dd").innerHTML = convertTimeValue(days);
    document.getElementById("hh").innerHTML = convertTimeValue(hours);
    document.getElementById("mm").innerHTML = convertTimeValue(minutes);
    document.getElementById("ss").innerHTML = convertTimeValue(seconds);
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(countdownInterval);
      document.getElementById("expired").style.display = "block";
      document.getElementById("dd").innerHTML = '00';
      document.getElementById("hh").innerHTML = '00';
      document.getElementById("mm").innerHTML = '00';
      document.getElementById("ss").innerHTML = '00';
    }
  }, 1000);
</script>

</html>