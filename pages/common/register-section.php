<style>
  .register-wrapper {
    display: flex;
    justify-content: space-between;
    max-width: 800px;
    margin: auto;
    padding: 16px;
  }

  .register-wrapper .product {
    max-width: 380px;
  }

  .register-wrapper .register {
    max-width: 412px;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 22px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  .register-wrapper .register .register-free-ship {
    color: var(--primaryColor);
    font-weight: bold;
    font-size: 1.2em;
  }

  .register-wrapper .register .register-come-on {
    font-weight: bold;
    font-size: 1.2em;
    margin: 10px 0;
    color: red;
  }

  .register-wrapper .register #expired {
    display: none;
  }

  .register-wrapper .register .countdown-timer {
    width: 100%;
    display: flex;
    justify-content: space-between;
  }

  .register-wrapper .time-digit {
    max-width: 120px;
    display: flex;
    flex-direction: column;
    color: #333;
    font-weight: 700;
    text-transform: uppercase;
  }

  .register-wrapper .time-digit .value {
    padding: 7px;
    background-color: var(--primaryColor);
    color: white;
    border-radius: 10px;
    letter-spacing: 3px;
    font-size: 40px;
  }

  .register-wrapper .register-form {
    margin-top: 32px;
  }

  .register-wrapper .register-form .btn-get-offer {
    font-size: 1.3em;
  }

  @media screen and (max-width: 600px) {
    .register-wrapper {
      display: block;
    }

    .register-wrapper .product,
    .register-wrapper .register {
      margin-top: 24px;
    }

    .register-wrapper .time-digit .value {
      font-size: 35px;
    }
  }
</style>

<div class="register-wrapper">
  <div class="product">
    <?php require '../common/price.php' ?>
    <img style="width: 100%;" src="<?php echo $imgSectionRegister ?>" alt="" />
  </div>
  <div class="register">
    <div class="register-free-ship"><i class="fa fa-truck"></i> MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</div>
    <p id="hurry-up-label" class="register-come-on">NHANH TAY LÊN!<br />CHƯƠNG TRÌNH SẮP KẾT THÚC</p>
    <div class="countdown-timer">
      <div id="expired">Chương trình khuyến mãi đã kết thúc</div>
      <div class="time-digit">
        <p class="name">Ngày</p>
        <div class="value" id="dd">00</div>
      </div>
      <div class="time-digit">
        <p class="name">Giờ</p>
        <div class="value" id="hh">00</div>
      </div>
      <div class="time-digit">
        <p class="name">Phút</p>
        <div class="value" id="mm">00</div>
      </div>
      <div class="time-digit">
        <p class="name">Giây</p>
        <div class="value" id="ss">00</div>
      </div>
    </div>
    <div class="register-form">
      <input class="input-text" required id="txtName2" placeholder="Họ tên" name="name" />
      <input class="input-text" required id="txtPhone2" placeholder="Nhập số điện thoại" name="phone" />
      <?php if(isset($showAddressTxt)) {?><input class="input-text" required id="txtAddress2" placeholder="Địa chỉ" name="address" /><?php } ?>
      <button class="btn btn-success btn-get-offer" onclick="registerOrder2()">NHẬN ƯU ĐÃI</button>
    </div>
  </div>
</div>

<script>
  setInputFilter(getById("txtPhone2"), function(value) {
    return phoneRegex.test(value);
  });

  function registerOrder2() {
    var name = getById("txtName2").value.trim();
    var phone = getById("txtPhone2").value.trim();
    if(!validatePhone(phone)) {
      alert('Số điện thoại KHÔNG hợp lệ, xin vui lòng nhập lại!');
      return;
    }
    var address = getById("txtAddress2") ? getById("txtAddress2").value.trim() : null;
    var product = "<?php echo $product ?>";
    createOrder({
      name,
      phone,
      address,
      product
    });
  }

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