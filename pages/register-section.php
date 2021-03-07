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

  .register-wrapper .register .register-come-on {
    color: #e74c3c;
    font-weight: bold;
    font-size: 1.2em;
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
    background-color: #e74c3c;
    color: white;
    border-radius: 10px;
    letter-spacing: 3px;
    font-size: 40px;
  }

  .register-wrapper .register-form {
    margin-top: 32px;
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
    <div class="price">
      <div class="original-price"><?php echo $originalPrice ?></div>
      <div class="sale-text">giảm chỉ còn</div>
      <div class="sale-price"><?php echo $salePrice ?></div>
    </div>
    <img style="width: 100%;" src="./1 That Lan Von Cau.jpg" />
  </div>
  <div class="register">
    <p class="register-come-on">NHANH TAY LÊN!<br />CHƯƠNG TRÌNH SẮP KẾT THÚC</p>
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
      <button class="btn btn-success" onclick="registerOrder2()">NHẬN ƯU ĐÃI</button>
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
    var product = PRODUCT_TLVC;
    createOrder({
      name,
      phone,
      product
    });
  }
</script>