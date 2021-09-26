# Đúc Đồng Ý Yên files

# Note
- Theme dùng: Hitmag
- Do đó những ghi chú ở dưới, đường dẫn /hitmag tương ứng với đường dẫn /wp-content/themes/hitmag

# Sửa source code WP
- /hitmag/functions.php: khỏi nói rồi, ai code WP đều biết là cần thêm action hook cho theme thì đều sửa file này thôi. Tất cả code thêm mới được viết trong cặp comment sau:
  + Tuzaku's code.
  + End of Tuzaku's code.
- /hitmag/header.php
  + Thêm fontawesome và meta của facebook comment plugin vào trong thẻ header
  + Thêm link tới 2 file sau ddyy_style.css, ddyy_script.js
  + Thêm Facebook JavaScript SDK (để dùng cho facebook comment plugin) (chú ý: FB Page ko cần thêm JDK, vì nó chỉ là 1 iframe)
- Cần copy mọi thứ trong thư mục /wp-content/plugins/woocommerce/templates sang thư mục /hitmag/woocommerce (tạo mới thư mục này), sau đó từ giờ muốn custom woocommerce thì chỉ sẽ sửa những file trong thư mục này, bởi vì nếu ko làm như vậy, tức là sửa file trực tiếp trong thư mục /wp-content/plugins/woocommerce/templates, thì sau khi update plugin, mọi thứ sẽ mất
- /hitmag/footer.php
  + Comment footer của Hitmag theme
- /hitmag/woocommerce/single-product-reviews.php
  + Sửa file này để thay review của Woocommerce = comment của Facebook, sửa bằng cách thêm đoạn code sau:
  ```
  <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="5" data-width="100%"></div>
  <?php return; ?>
  ```
  Lệnh return ở trên sẽ bỏ qua toàn bộ đoạn code ở dưới (chính là code review của Woocommerce), chú ý data-href chính là URL liên kết với cái comment đó, thế nên comment này sẽ thay đổi với mỗi sản phẩm
  + Ngoài ra còn thêm icon loading nữa, và đoạn script check nếu như render xong cái comment của fb thì hide thằng icon loading đó đi
- /wp-content/plugins/woocommerce/includes/wc-template-functions.php, dòng 1758: Sửa text để hiện thị chữ "Bình luận" ở trang review sản phẩm Woocommerce. NOTE: cái này chắc phải sửa lại sau mỗi lần update plugin woocommerce
- wp-config.php:
  + Thêm dòng sau vào đầu file để cài WP Super Cache: define( 'WP_CACHE', true );
  + Thêm dòng sau vào đầu file để tắt tính năng tự động lưu các bản nháp bài viết sau mỗi thời gian nhất định (cho database đỡ bị phình to): define('WP_POST_REVISIONS', false );
- /hitmag/woocommerce/single-product/tabs: trong thư mục này có 3 file, tương ứng với 3 tab trong trang sản phẩm, comment header ở 2 file additional-information.php và description.php
- /hitmag/woocommerce/single-product/tabs/tabs.php: thêm dòng code sau ở 2 chỗ để ẩn cái tab additional-information đi:
  ```
  <?php if($key == "additional_information") continue; // Ko hiển thị tab info ?>
  ```
- /hitmag/woocommerce/loop/result-count.php:
  Translate text thành: "Hiển thị %d kết quả":
  + echo 'Hiển thị 1 kết quả';
  + printf('Hiển thị %1$d&ndash;%2$d của %3$d kết quả', $first, $last, $total );

# Dùng thêm Cloudflare nữa
- Hiểu đơn giản: ta sẽ cấu hình tên miền cho nó trỏ tới thằng cloudflare: vào trang https://access.pavietnam.vn/index.php, config như sau:
  + DNS 1: dilbert.ns.cloudflare.com
  + DNS 2: elaine.ns.cloudflare.com
- 2 địa chỉ trên là của cloudflare cung cấp. Vậy là xong việc trỏ tên miền tới cloudflare
- Tiếp theo ta sẽ trỏ cloudflare tới host: vào trang cloudflare: https://dash.cloudflare.com/efbbb03150e3dbdca9c46763e9e3c7e2/xuongducdongyyen.com/dns. Sau đó config sao cho nó trỏ tới IP của host, VD:
  Name=xuongducdongyyen.com, content=103.255.237.205 (IP của host)
- Khi user truy cập vào trang web, DNS sẽ phân giải ra địa chỉ IP của server cloudflare. Lúc này thằng cloudflare sẽ check xem nó có đang lưu cache của trang web ko, nếu có thì chỉ cần return cache đó cho user, vậy là user sẽ ko cần đi tới host nữa, việc này có 2 ưu điểm:
  + Giúp user load web nhanh hơn do chỉ cần load cache từ cloudflare
  + Giảm tải tới host
- Nếu như cloudflare check mà ko thấy cache của trang web trên server của nó, thì nó sẽ request tới host, nên lần đầu tiên truy cập vào website sẽ khá chậm do chưa có cache

# How to deploy landing page
Landing page là các page trong thư mục `pages`, mỗi 1 sản phẩm sẽ có 1 thư mục cho sp đó, và thư mục common (tức là thư mục common dùng chung cho mọi sp). Muốn deploy lên host chỉ cần copy thư mục sản phẩm đó + thư mục common là xong.

VD: muốn deploy sp máy lọc kk thì copy 2 thư mục sau: `may-loc-khong-khi-oto`, `common`

Nhớ sửa biến `REACT_APP_HOST_API` trong file `common/static/js/script.js` cho đúng với môi trường product