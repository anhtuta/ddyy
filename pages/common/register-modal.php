<!-- Register Modal -->
<div id="registerModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" onClick="closeRegisterModal()">&times;</span>
      <h2>Đăng ký nhận tư vấn</h2>
    </div>
    <div class="modal-body">
      <p class="sub-title">Nhận ưu đãi khi mua hàng ngay hôm nay</p>
      <input class="input-text" required id="txtName1" placeholder="Họ tên" name="name" />
      <input class="input-text" required id="txtPhone1" placeholder="Nhập số điện thoại" name="phone" />
      <?php if($showAddressTxt) {?><input class="input-text" required id="txtAddress1" placeholder="Địa chỉ" name="address" /><?php } ?>
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" onclick="registerOrder1()">Hoàn tất đăng ký</button>
    </div>
  </div>
</div>

<!-- Success Modal -->
<div id="successModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" onClick="closeSuccessModal()">&times;</span>
      <h2>Đăng ký thành công</h2>
    </div>
    <div class="modal-body">
      <p class="sub-title">Chúng tôi sẽ gọi lại cho quý khách sớm nhất có thể, xin cảm ơn!</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" onclick="closeSuccessModal()">OK</button>
    </div>
  </div>
</div>

<script>
  var registerModal = document.getElementById("registerModal");
  var successModal = document.getElementById("successModal");

  setInputFilter(getById("txtPhone1"), function(value) {
    return phoneRegex.test(value);
  });

  function openRegisterModal() {
    registerModal.style.display = "flex";
  }

  function closeRegisterModal() {
    registerModal.style.display = "none";
  }

  function openSuccessModal() {
    successModal.style.display = "flex";
  }

  function closeSuccessModal() {
    successModal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target === registerModal) {
      registerModal.style.display = "none";
    } else if (event.target === successModal) {
      successModal.style.display = "none";
    }
  }

  function registerOrder1() {
    var name = getById("txtName1").value.trim();
    var phone = getById("txtPhone1").value.trim();
    var address = getById("txtAddress1").value.trim();
    var product = "<?php echo $product ?>";
    createOrder({
      name,
      phone,
      address,
      product
    });
  }
</script>