<style>
  .site-info {
    line-height: 50px;
    background: #222222;
    color: #ddd;
    overflow: hidden;
  }

  .site-info-owner {
    text-align: center;
  }
</style>

<div class="footer-wrapper">
  <div class="site-info">
    <div class="site-info-owner">
      Copyright © <?php echo date("Y") ?>
      <a href="<?php echo $footerURL ? $footerURL : "https://xuongducdongyyen.com/" ?>"
        title="<?php echo $footerTitle ? $footerTitle : "Đúc Đồng Ý Yên" ?>">
        <?php echo $footerTitle ? $footerTitle : "Đúc Đồng Ý Yên" ?>
      </a>
    </div>
  </div>
</div>