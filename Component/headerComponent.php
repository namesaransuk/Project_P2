<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #4B0082;">
</nav>

<nav class="navbar navbar-expand-lg navbar-dark shadow-lg" style="background-image: linear-gradient(#6E48AA, #9D50BB);">
  <!-- style="background-image: linear-gradient(#8E2DE2, #4a00e0);" -->
  <div class="container">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo-website.png" alt="logo" style="width:300px;">
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- #8A2BE2 สีม่วง -->
<!-- ddd6ff ม่วงอ่อน -->

<div id="navbar" style="z-index: 9000;">
  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#F5F5F5" id="navhome">
    <div class="container">
      <a class="navbar-brand" href="#"></a>

      <button class="navbar-toggler" type="button" style="background-color:#4B0082;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-center">

          <li class="nav-item" id="navnav">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/index.php') { ?>
              <a class="item active mx-auto" id="activepage" href="index.php"><i class="fas fa-home"></i> หน้าแรก</a>
            <?php } else { ?>
              <a class="item mx-auto" href="index.php"><i class="fas fa-home"></i> หน้าแรก</a>
            <?php } ?>
          </li>

          <li class="nav-item" id="navnav">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/order1.php' || $_SERVER['SCRIPT_NAME'] == '/Project_P2/order2.php' || $_SERVER['SCRIPT_NAME'] == '/Project_P2/order3.php' || $_SERVER['SCRIPT_NAME'] == '/Project_P2/order4.php') { ?>
              <a class="item active mx-auto" id="activepage" href="order1.php"><i class="fas fa-birthday-cake"></i> สั่งเค้ก</a>
            <?php } else { ?>
              <a class="item mx-auto" href="order1.php"><i class="fas fa-birthday-cake"></i> สั่งเค้ก</a>
            <?php } ?>
          </li>

          <li class="nav-item" id="navnav">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/promotion.php') { ?>
              <a class="item active mx-auto" id="activepage" href="promotion.php"><i class="fas fa-gift"></i> โปรโมชั่น</a>
            <?php } else { ?>
              <a class="item mx-auto" href="promotion.php"><i class="fas fa-gift"></i> โปรโมชั่น</a>
            <?php } ?>
          </li>

          <li class="nav-item" id="navnav">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/how2buy.php') { ?>
              <a class="item active mx-auto" id="activepage" href="how2buy.php"><i class="fas fa-store"></i> วิธีการสั่งซื้อ</a>
            <?php } else { ?>
              <a class="item mx-auto" href="how2buy.php"><i class="fas fa-store"></i> วิธีการสั่งซื้อ</a>
            <?php } ?>
          </li>

          <li class="nav-item" id="navnav">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/Project_P2/contact.php') { ?>
              <a class="item active mx-auto" id="activepage" href="contact.php"><i class="fas fa-address-book"></i> ติดต่อเรา</a>
            <?php } else { ?>
              <a class="item mx-auto" href="contact.php"><i class="fas fa-address-book"></i> ติดต่อเรา</a>
            <?php } ?>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto text-center">
          <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="uploads/<?php echo $_SESSION['img'] ?>" style="width:30px; height:30px ;border-radius:100%;" alt="">
                ยินดีต้อนรับ คุณ <?php echo $_SESSION['name'] ?>
              </a>
              <div class="dropdown-menu text-center">
                <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
                <a class="dropdown-item" href="#">ตะกร้าสินค้าของฉัน</a>
                <a class="dropdown-item" href="#">สถานะการจัดส่ง</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
              </div>
            </li>
          <?php } else { ?>
            <li class="nav-item" id="navnav">
              <button type="button" class="btn btn-rounded btn-md purple-gradient" style="border-radius: 2em" onclick="window.location.href='login.php'"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
            </li>
          <?php } ?>
        </ul>

      </div>
    </div>
  </nav>
</div>