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
    color: #000;
    background: #f0f2f5e3;
    padding: 10px;
    border-radius: 10px;
    font-size: 0.9em;
    position: relative;
  }

  .sticky-message .text:hover {
    animation-play-state: paused;
  }

  .text-animation {
    animation: showup 1s;
  }

  @keyframes showup {
    0% {
      top: -50px;
      opacity: 0;
    }

    100% {
      top: 0px;
      opacity: 1;
    }
  }

  .icon-like {
    color: #2199f9;
  }
  .icon-love {
    color: red;
  }
</style>

<div class="sticky-message" id="sticky-message"></div>

<script>
  var stickyMessage = document.getElementById("sticky-message");
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
  var iconClasses = [
    "fa-thumbs-up icon-like",
    "fa-heart icon-love",
    "fa-kiss-wink-heart icon-love"
  ]

  setInterval(() => {
    let randomMsg = msgs[Math.floor(Math.random() * msgs.length)];
    let iconClass = iconClasses[Math.floor(Math.random() * iconClasses.length)];
    stickyMessage.innerHTML = `
      <div class="text text-animation">
        <i class="fas ${iconClass} faa-bounce animated"></i>&nbsp;<span>${randomMsg}</span>
      </div>
    `;
  }, 5000);
</script>