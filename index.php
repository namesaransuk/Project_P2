<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Bon'iS Cake</title>
  <!-- bootstrap -->

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

  <!-- ===========================css============================ -->
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo filemtime('style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/c_design.css">
  <!-- ============================extention=========================== -->
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

  <style>
    .carousel .carousel-control-next-icon,
    .carousel .carousel-control-prev-icon {
      width: 30px;
      height: 30px;
      border-radius: 100%;
    }
  </style>

</head>


<body>

  <!-- partial:index.partial.html -->
  <?php include("extention/ScreenLoading.php") ?>

  <!-- cart -->
  <?php include("Component/cartComponent.php") ?>

  <!-- header -->
  <?php include("Component/headerComponent.php") ?>

  <!-- body -->
  <div id="slidepro" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
    <ul class="carousel-indicators" id="circle">
      <!-- ปุ่มกำหนดตำแหน่งสไลด์ -->
      <li data-target="#slidepro" data-slide-to="0" class="active"></li>
      <li data-target="#slidepro" data-slide-to="1"></li>
      <li data-target="#slidepro" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner shadow-lg" id="slidepro">
      <div class="carousel-item active">
        <img src="img/s11.jpg" alt="promotion1">
      </div>
      <div class="carousel-item">
        <img src="img/s2.jpg" alt="promotion2">
      </div>
      <div class="carousel-item">
        <img src="img/s3.jpg" alt="promotion3">
      </div>
    </div>
    <!-- ลูกศรซ้ายขวา -->
    <a class="carousel-control-prev" href="#slidepro" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" style="background-color:indianred"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slidepro" role="button" data-slide="next">
      <span class="carousel-control-next-icon" style="background-color:indianred"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="card card-cascade narrower mt-5 shadow-sm rounded">
        <!-- <div class="card-header text-center">
          <h2>BON'iS Cake ยินดีต้อนรับ</h2>
        </div> -->

        <!-- Card image -->
        <div class="view view-cascade overlay example z-depth-1-half wow rubberBand">
          <img class="card-img-top rounded" src="img/logo-website-sm-p.png" alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>


        <div class="card-body card-body-cascade mx-auto">
          <div class="row">

            <!-- คอลัมแรก -->
            <div class="col-sm-12 text-center mt-1">
              <a href="order1.php">
                <img src="img/สั่งเค้ก.png" class="img-responsive rounded wow fadeInUp example hoverable" data-wow-delay="0.1s" style="width: 270px;border-style: groove; border-color: #FFFFFF;" data-toggle="tooltip" data-placement="top" title="คลิกเพื่อสั่งซื้อเค้กตามที่ลูกค้าชอบที่นี่" alt="สั่งเค้ก">
              </a>

              <a href="promotion.php">
                <img src="img/โปรโมชั่น.png" class="img-responsive rounded wow fadeInUp example hoverable" data-wow-delay="0.3s" style="width: 270px;border-style: groove; border-color: #FFFFFF;" data-toggle="tooltip" data-placement="top" title="โปรโมชั่นเค้กต่างๆที่ทางร้านจัดไว้ ดูได้ที่นี่เลย" alt="โปรโมชั่น">
              </a>

              <a href="how2buy.php">
                <img src="img/วิธีการสั่งซื้อ.png" class="img-responsive rounded wow fadeInUp example hoverable" data-wow-delay="0.5s" style="width: 270px;border-style: groove; border-color: #FFFFFF;" data-toggle="tooltip" data-placement="top" title="หากสั่งซื้อไม่เป็นคลิกดูวิธีการสั่งซื้อที่นี่" alt="วิธีการสั่งซื้อ">
              </a>

              <a href="contact.php">
                <img src="img/ติดต่อเรา.png" class="img-responsive rounded wow fadeInUp example hoverable" data-wow-delay="0.7s" style="width: 270px;border-style: groove; border-color: #FFFFFF;" data-toggle="tooltip" data-placement="top" title="หากมีปัญหาหรืออยากติดต่อเราคลิกที่นี่" alt="ติดต่อเรา">
              </a>
            </div>

            <!-- คอลัมสอง -->
            <div class="col-sm-7 mt-5 mx-auto">

              <!-- Card -->
              <div class="card card-cascade narrower">
                <!-- Card image -->
                <div class="view view-cascade gradient-card-header purple-gradient">
                  <!-- Title -->
                  <h5 class="card-header-title">สินค้าแนะนำ</h5>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                  <!-- Text -->
                  <div id="recommend" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" id="circle">
                      <li data-target="#recommend" data-slide-to="0" class="active"></li>
                      <li data-target="#recommend" data-slide-to="1"></li>
                      <li data-target="#recommend" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/สินค้าแนะนำ/มิ้ล1.png" alt="มิลกี้ทูโทน">
                        <div class="carousel-caption">
                          <h6>มิลกี้ทูโทน</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/สินค้าแนะนำ/ดาร์ค1.png" alt="พรีเมี่ยมดาร์คช็อกโกแลต">
                        <div class="carousel-caption">
                          <h6>พรีเมี่ยมดาร์คช็อกโกแลต</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/สินค้าแนะนำ/ฟรุต1.png" alt="เค้กสมูทตี้ แพชชั่นฟรุ๊ต">
                        <div class="carousel-caption">
                          <h6>เค้กสมูทตี้ แพชชั่นฟรุ๊ต</h6>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#recommend" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recommend" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                </div>

              </div>
              <!-- Card -->

            </div>
            <!-- end col -->

            <div class="col-sm-5 mt-5">

              <!-- Card -->
              <div class="card card-cascade narrower">
                <!-- Card image -->
                <div class="view view-cascade gradient-card-header peach-gradient">
                  <!-- Title -->
                  <h5 class="card-header-title">ข่าวสารและโปรโมชั่น</h5>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                  <!-- Text -->
                  <div class="row">
                    <div class="list-group" style="width: 100%;">
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">สินค้าใหม่ !! เค้กชูวี่สตรอเบอร์รี่ คลิกที่นี่เพื่อดูรายละเอียด</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">โปรโมชั่นพิเศษส่งท้ายวันแม่ 12 สิงหานี้</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">ประกาศหยุดวันทำการร้านวันที่ 23-24 สิงหาคม 2562</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">กำหนดการสินค้าเข้าใหม่ !!</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">ยินดีต้อนรับ !! สวีทตี้ ปาร์ตี้ วนิลา และ สวีทตี้ ปาร์ตี้ ช็อกโกแลต</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">โปรโมชั่นต้อนรับเดือนกันยายน ลด 50%</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">ลุ้นรับ Gift Vocher จากทางร้านเพียงซื้อเค้กที่ร่วมรายการ</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">รายละเอียดการเปิดสาขาที่ 2 ของ BON'iS Cake</a>
                    </div>
                  </div>

                </div>

              </div>
              <!-- Card -->
            </div>

          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->


  <div class="container mt-5 mb-5">
    <div class="row">
      <h5 class="p-2 text-dark">สินค้ายอดนิยม</h5>
      <div class="card-group d-flex flex-row flex-nowrap scroll-x">

        <div class="card shadow mb-2 mx-1">
          <img class="card-img-top" src="products/ครีมมี่บัตเตอร์.png">
          <div class="card-body">
            <h5 class="card-title text-center">ครีมมี่ บัตเตอร์</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/ครีมชีสช็อกโกแลต.png">
          <div class="card-body">
            <h5 class="card-title text-center">ครีมชีสช็อกโกแลต</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/ชูวี่สตรอเบอร์รี่.png">
          <div class="card-body">
            <h5 class="card-title text-center">ชูวี่สตรอเบอร์รี่</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/วีตพรุน.png">
          <div class="card-body">
            <h5 class="card-title text-center">วีตพรุน</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/พาราดิโซ่.png">
          <div class="card-body">
            <h5 class="card-title text-center">พาราดิโซ่</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/พีนัทบัตเตอร์ช็อกโกแลต.png">
          <div class="card-body">
            <h5 class="card-title text-center">พีนัทบัตเตอร์ช็อกโกแลต</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

        <div class="card shadow-md mb-2 mx-1">
          <img class="card-img-top" src="products/ดับเบิ้ลช็อกโกแลตฟัดจ์.png">
          <div class="card-body">
            <h5 class="card-title text-center">ดับเบิ้ลช็อกโกแลตฟัดจ์</h5>
            <p class="card-text text-center">
              ดูรายละเอียดเพิ่มเติม
              <button type="button" class="btn btn-rounded btn-primary" onclick="window.location.href='#!'">คลิก</button>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include('Component/notiComponent.php'); ?>

  <!-- Footer -->
  <?php include("Component/footerComponent.php") ?>
  <!-- Footer -->

  <!-- Script -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
    });
  </script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <script src="js/ScreenLoading.js"></script>

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

  <script src="script.js"></script>

</body>

</html>