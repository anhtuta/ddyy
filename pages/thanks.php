<head>
  <style>
    body {
      background: #f0f0f0;
    }

    .page-container {
      position: relative;
      min-height: calc(100vh - 50px); /* 50px = height of footer-wrapper */
    }

    .ty-wrapper {
      display: flex;
      justify-content: space-between;
      max-width: 800px;
      margin: auto;
      padding: 10px;
      padding-bottom: 50px; /* Footer height */
    }

    .ty-content {
      max-width: 350px;
      min-width: 30%;
    }

    .ty-header {
      font-size: 2.7em;
      color: var(--primaryColor);
    }

    .ty-photo {
      max-width: 430px;
    }

    @media screen and (max-width: 570px) {
      .ty-wrapper {
        display: block;
      }

      .ty-content {
        max-width: 100%;
      }

      .ty-photo {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="page-container">
    <div class="ty-wrapper">
      <div class="ty-content">
        <h2 class="ty-header">Cảm ơn</h2>
        <p>
          Cám ơn bạn đã gửi thông tin, chúng tôi sẽ liên lạc lại sớm nhất có thể!
        </p>
        <p>
          Nếu bạn cần gấp vui lòng liên hệ <a href="tel:<?php echo $phoneNum ?>"><?php echo $phoneNum ?></a>
        </p>
        <p>
          <a href="<?php echo $homePage ?>">Trang chủ</a>
        </p>
      </div>
      <div class="ty-photo">
        <img style="width: 100%;" src="<?php echo $imgThanks ?>" />
      </div>
    </div>
  </div>
</body>
