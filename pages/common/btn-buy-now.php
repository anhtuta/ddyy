<style>
  .bn-btn {
    background-color: transparent;
    cursor: pointer;
    position: fixed;
    transition: visibility 0.5s ease 0s;
    z-index: 2000;
    right: 25px;
    bottom: 25px;
    padding: 7px 15px;
    font-size: 2.5em;
    font-weight: bold;
    border: 0;
    border-radius: 42px;
    margin: 5px 0;
    color: #fc0;
    text-transform: uppercase;
    box-sizing: border-box;
    opacity: 0.85;
  }

  .bn-btn:focus {
    outline: 0;
  }

  @media only screen and (max-width: 500px) {
    .bn-btn {
      font-size: 1.5em;
      right: 20px;
      bottom: 20px;
    }
  }

  .bn-blink {
    animation: bn-blinker 600ms infinite;
  }
</style>

<button class="bn-btn bn-blink" onClick="openRegisterModal()">Mua ngay</button>