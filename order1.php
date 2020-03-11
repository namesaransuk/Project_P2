<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SelectCake หน้า 1</title>
  <!-- bootstrap -->

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

  <!-- ===========================css============================ -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <link rel="stylesheet" type="text/css" href="css/order.css">
  <!-- ============================extention=========================== -->
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

  <style>
    @media screen {
      .hide-on-screen {
        display: none;
      }
    }
  </style>

</head>


<body>

  <?php
  include('php/connect.php');

  $sql = "SELECT * FROM product";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  include('php/select_order.php');
  ?>

  <!-- cart -->
  <?php include("Component/cartComponent.php") ?>

  <!-- header -->
  <?php include("Component/headerComponent.php") ?>

  <!-- เปิดคอนเทนเน่อ -->
  <div class="container mt-3 mx-auto">

    <nav aria-label="Page navigation example">
      <ul class="pagination pg-purple justify-content-end mt-4 mb-3 ">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="order1.php">1</a></li>
        <li class="page-item"><a class="page-link" href="order2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="order3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="order4.php">4</a></li>
        <li class="page-item">
          <a class="page-link" href="order2.php">Next</a>
        </li>
      </ul>
    </nav>

    <div class="row text-center">

      <!-- ORDER -->
      <?php while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <!-- style="min-width:8rem;min-height:20rem" -->
          <div class="col-md-4 mb-4">
            <div class="card view overlay shadow-sm" style="min-height:18rem">
              <img src="products/<?php echo $result['p_img'] ?>" class="card-img-top" alt="...">
              <a href="#" data-toggle="modal" data-target="#exampleModal<?php echo $result['p_id'] ?>">
                <div class="mask rgba-purple-slight"></div>
              </a>
              <div class="card-body">
                <h6 class="card-title"><?php echo $result['p_name'] ?></h6>
                <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal<?php echo $result['p_id'] ?>"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
              </div>
            </div>

            <?php if (isset($_SESSION['id'])) { ?>
              <!-- Modal -->
              <form action="order1.php" method="POST">
                <div class="modal fade right" id="exampleModal<?php echo $result['p_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $result['p_id'] ?>" aria-hidden="true">
                  <div class="modal-dialog modal-fluid modal-full-height modal-right modal-notify modal-info" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel<?php echo $result['p_id'] ?>"><?php echo $result['p_name'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <img src="products/<?php echo $result['p_img'] ?>" class="card-img-top" alt="...">
                        <h5 class="modal-title" id="exampleModalLabel<?php echo $result['p_id'] ?>"><?php echo $result['p_name'] ?></h5>
                        <!-- ถูกซ่อนไว้ -->
                        <input class="hide-on-screen" id="p_id<?php echo $result['p_id'] ?>" name="p_id" value=<?php echo $result['p_id'] ?>>
                        <input class="hide-on-screen" id="p_name<?php echo $result['p_id'] ?>" name="p_name" value=<?php echo $result['p_name'] ?>>
                        <input class="hide-on-screen" id="p_img<?php echo $result['p_id'] ?>" name="p_img" value=<?php echo $result['p_img'] ?>>
                        <!--  -->
                        <hr>
                        <p><?php echo $result['p_detail'] ?></p>
                        <!-- ขนาด -->
                        <form action="" name="frm">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ปอนด์</label>
                            <div class="col-sm-6">
                              <input type="text" id="p_pond<?php echo $result['p_id'] ?>" name="p_pond" OnChange="sum<?php echo $result['p_id'] ?>()" class="form-control" value=<?php echo $result['p_price'] ?> readonly>
                            </div>
                            <label class="col-sm-3 col-form-label">บาท</label>
                          </div>
                          <!-- จำนวน-->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="c11">จำนวน</label>
                            <div class="col-sm-6">
                              <select type="text" id="p_num<?php echo $result['p_id'] ?>" name="p_num" OnChange="sum<?php echo $result['p_id'] ?>();" class="browser-default custom-select">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <label class="col-sm-3 col-form-label">กล่อง</label>
                          </div>
                          <!-- ราคา -->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="c111">ราคา</label>
                            <div class="col-sm-6">
                              <!-- <span id="p_price">760</span> -->
                              <input type="text" class="form-control" id="p_price<?php echo $result['p_id'] ?>" name="p_price" OnChange="comma<?php echo $result['p_id'] ?>();" value=<?php echo number_format($result['p_price']) ?> readonly>
                              <!-- <input type="hidden" id="hdprice" value="760" /> -->
                            </div>
                            <label class="col-sm-3 col-form-label" for="c111">บาท</label>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ขอคิดดูก่อน !</button>
                        <button type="submit" id="but" name="but" class="btn btn-primary">เพิ่มเข้าตะกร้า</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- Modal -->

            <?php } else { ?>

              <!-- Frame Modal top -->
              <div class="modal fade top" id="exampleModal<?php echo $result['p_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                <!-- Add class .modal-frame and then add class .modal-top (or other classes from list above) to set a position to the modal -->
                <div class="modal-dialog modal-frame modal-top" role="document">


                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row d-flex justify-content-center align-items-center">

                        <p class="text-dark pt-3 pr-2">
                          เอ๊ะ !! ยังไม่ได้เป็นสมาชิก BON'iS Cake นี่หน่า. กรุณาสมัครสมาชิกหรือเข้าสู่ระบบเพื่อดำเนินการสั่งซื้อสินค้าด้วยค่ะ
                        </p>

                        <button type="button" class="btn purple-gradient" onclick="window.location.href='login.php'">เข้าสู่ระบบ</button>
                        <button type="button" class="btn peach-gradient" data-dismiss="modal">ไม่เป็นไร</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Frame Modal top -->
            <?php } ?>
          </div>
          <?php } ?>
          <!-- ORDER -->

          </div>
          <!-- end row -->

          <nav aria-label="Page navigation example">
            <ul class="pagination pg-purple justify-content-end mt-3 mb-3 ">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item active"><a class="page-link" href="order1.php">1</a></li>
              <li class="page-item"><a class="page-link" href="order2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="order3.php">3</a></li>
              <li class="page-item"><a class="page-link" href="order4.php">4</a></li>
              <li class="page-item">
                <a class="page-link" href="order2.php">Next</a>
              </li>
            </ul>
          </nav>

        </div>
        <!-- end container -->


        <!-- Notification -->
        <?php include('Component/notiComponent.php'); ?>
        <!-- Notification -->



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

        <script src="script.js"></script>
        <script src="js/sum.js"></script>
        <!-- <script src="js/modal.js"></script> -->


</body>

</html>