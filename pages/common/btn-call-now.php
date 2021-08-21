<!-- Note: other pages want to include this page will must add phone.css file -->

<style>
  .ddyy-btn-call-now {
    position: fixed;
    left: 0;
    bottom: 0;
  }

  .ddyy-btn-call-now .ddyy-alo-ph-img-circle i {
    padding-left: 10px;
    top: -1px;
  }
</style>

<a href="tel:<?php echo $phoneNum ?>" class="ddyy-alo-phone ddyy-alo-green ddyy-btn-call-now">
  <div class="ddyy-alo-ph-circle"></div>
  <div class="ddyy-alo-ph-circle-fill"></div>
  <div class="ddyy-alo-ph-img-circle"><i class="fas fa-phone-alt"></i></div>
</a>