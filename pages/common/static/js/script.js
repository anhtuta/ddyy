// giống value trong file .env ở project tlvc-order-fe
// var REACT_APP_HOST_API = "http://localhost:8888"; //local
var REACT_APP_HOST_API = "https://ducdongyyen.com/laravel/public" // product
var phoneRegex = /^[0-9.+ ]*$/;

function getById(id) {
  return document.getElementById(id);
}

function getByClass(className) {
  return document.getElementsByClassName(className)[0];
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

// From: https://gist.github.com/gre/1650294
function easeInOutCubic(t) {
  return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
}
function easeInOutQuad(t) {
  return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
}

/**
 * Ref: liliana player ReactJs
 * Scroll the page to an element's position (element nên là thẻ div, ko phải span)
 * @param {HTMLElement} element the tag we wants browser to scroll to
 * @param {Number} duration scrolling time in milisecond
 */
 function scrollPage(element, duration) {
  let startingY = window.pageYOffset;
  let elementY = window.pageYOffset + element.getBoundingClientRect().top;

  // If element is close to page's bottom then window will scroll only to some position above the element.
  let targetY =
    document.body.scrollHeight - elementY < window.innerHeight ? document.body.scrollHeight - window.innerHeight : elementY;
  let diff = targetY - startingY;
  let start;

  if (!diff) return;

  // Bootstrap our animation - it will get called right before next frame shall be rendered.
  window.requestAnimationFrame(function step(timestamp) {
    if (!start) start = timestamp;
    // Elapsed miliseconds since start of scrolling.
    let time = timestamp - start;

    // Get percent of completion in range [0, 1].
    let percent = Math.min(time / duration, 1);

    // Apply the easing.
    // It can cause bad-looking slow frames in browser performance tool, so be careful.
    percent = easeInOutCubic(percent);

    window.scrollTo(0, startingY + diff * percent);

    // Proceed with animation as long as we wanted it to.
    if (time < duration) {
      window.requestAnimationFrame(step);
    }
  });
}