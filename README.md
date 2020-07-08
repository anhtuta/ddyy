# Đúc Đồng Ý Yên files

# Note
- Theme dùng: Hitmag

# Sửa source code WP
- /wp-content/themes/hitmag/functions.php: khỏi nói rồi, ai code WP đều biết là cần thêm action hook cho theme thì đều sửa file này thôi. Tất cả code thêm mới được viết trong cặp comment sau:
  + Tuzaku's code.
  + End of Tuzaku's code.
- /wp-content/themes/hitmag/header.php
  + Thêm fontawesome và meta của facebook comment plugin vào trong thẻ header
  + Thêm link tới 2 file sau ddyy_style.css, ddyy_script.js
  + Thêm Facebook JavaScript SDK (để dùng cho facebook comment plugin)
- /wp-content/themes/hitmag/footer.php
  + Comment footer của Hitmag theme
- /wp-content/plugins/woocommerce/templates/single-product-reviews.php
  + Sửa file này để thay review của Woocommerce = comment của Facebook, sửa bằng cách thêm đoạn code sau:
  ```
  <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="5" data-width="100%"></div>
  <?php return; ?>
  ```
  Lệnh return ở trên sẽ bỏ qua toàn bộ đoạn code ở dưới (chính là code review của Woocommerce), chú ý data-href chính là URL liên kết với cái comment đó, thế nên comment này sẽ thay đổi với mỗi sản phẩm
  + Ngoài ra còn thêm icon loading nữa, và đoạn script check nếu như render xong cái comment của fb thì hide thằng icon loading đó đi
- /wp-content/plugins/woocommerce/includes/wc-template-functions.php, dòng 1758: Sửa text để hiện thị chữ "Bình luận" ở trang review sản phẩm Woocommerce