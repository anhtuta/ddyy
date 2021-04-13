<style>
  .sticky-message {
    position: fixed;
    z-index: 2000;
    top: 0;
    left: 0;
    /* background: #1f1f1f6b; */
    padding: 10px;
    /* width: 100%; */
  }
  .sticky-message .text {
    display: inline-block;
    /* white-space: nowrap; */
    /* animation: floatText 10s infinite linear; */
    /* padding-left: 100%; */
    color: #fff;
    background: #1f1f1f6b;
    padding: 10px;
    border-radius: 10px;
    font-size: 0.9em;
  }

  .sticky-message .text:hover {
    animation-play-state: paused;
  }

  .sticky-message .text .fa-thumbs-up {
    color: #2199f9;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #fff;
  }

  @keyframes floatText {
    to {
      transform: translateX(-100%);
    }
  }
</style>

<div class="sticky-message">
  <div class="text">
    <i class="fa fa-thumbs-up faa-bounce animated"></i>&nbsp;<span id="comment-text"></span>
  </div>
</div>

<script>
  var commentText = document.getElementById("comment-text");
  var msgs = [
    "Ông Nguyễn Đình Điệp (đã mua hàng): Sản phẩm cực tốt, mỗi tội kêu hơi điếc tai!",
    "Cụ Ngu Văn Ngốc (vừa mua tuần trước): Không khí lọc xong thơm tho hơn hẳn, tôi rất thích",
    "Bà Trần Thị Lan (chưa mua hàng): Tuy chưa mua nhưng nghe bạn bè giới thiệu sản phẩm cực tốt nên nhất định tôi sẽ sắm 1 cái",
    "Cô Phạm Thị Mỹ Lệ: Đẹp, nhân viên phục vụ tốt, thích cực! Sẽ ủng hộ thêm ạ. Mn tham khảo mua nhé, rất đáng tiền ạ",
    "Tuzaku: Cảm giác không khí trong lành ở trong xe. Vợ mình viêm mũi dị ứng sử dụng máy lọc thấy hiệu quả rõ rệt - đỡ hắt xì mỗi khi ngồi trong xe",
    "Loan: Sản phẩm tốt đáng đồng tiền bát gạo khi mua, bé nhà mình ngủ trong xe ngon hẳn, máy chạy êm, nhẹ nhàng",
    "Chung: Được người chị giới thiệu nên cũng yên tâm. Đúng là ngon bổ rẻ. Không khí xe trong lành hơn hẳn. Một ít tiền cho sức khỏe",
    "Tú: Sản phẩm tuyệt nhé các bạn!"
  ];
  commentText.innerHTML = msgs[Math.floor(Math.random() * msgs.length)];
  setInterval(() => {
    commentText.innerHTML = msgs[Math.floor(Math.random() * msgs.length)];
  }, 5000);
  // commentText.innerHTML = msgs[msgs.length - 1];
</script>