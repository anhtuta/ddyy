function createOrder(data) {
  var { name, phone } = data;
  if (!name || !phone) {
    alert("Vui lòng nhập đầy đủ tên và số điện thoại");
    return;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 201) {
      var json = JSON.parse(this.responseText);
      closeRegisterModal();
      // openSuccessModal();
      window.location = "./cam-on.php";
    }
  };
  xhttp.open("POST", REACT_APP_HOST_API + "/api/tlvc-order/create.php", true);
  xhttp.setRequestHeader("Content-Type", "application/json");
  xhttp.send(JSON.stringify(data));
}