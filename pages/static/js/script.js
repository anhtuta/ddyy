// giống value trong file .env ở project tlvc-order-fe
// var REACT_APP_HOST_API = "http://localhost:8888"; //local
var REACT_APP_HOST_API = "https://xuongducdongyyen.com/tlvc-api" // product

var PRODUCT_TLVC = "Đỉnh thất lân vờn cầu";
var PRODUCT_TLVC9999 = "Đỉnh thất lân vờn cầu khảm ngũ sắc giát vàng 9999";
var PRODUCT_LUCBINH = "Lục bình";
var phoneRegex = /^[0-9.+ ]*$/;

function getById(id) {
  return document.getElementById(id);
}

// Restricts input for the given textbox to the given inputFilter function.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (event) {
    textbox.addEventListener(event, function () {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}