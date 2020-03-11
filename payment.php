<?php session_start(); ?>


<?php
if (isset($_SESSION['id'])) { } else {
    echo '<script> alert("กรุณาล็อกอินเข้าสู่ระบบอีกครั้ง") </script>';
    header('Refresh:0 url=index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <title>ตะกร้าสินค้า</title>
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
    <link rel="stylesheet" type="text/css" href="css/c_design.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/selectcart.css"> -->
    <!-- ============================extention=========================== -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

    <style>
        .cc-img {
            margin: 0 auto;
        }

        .rounded-lg {
            border-radius: 1rem;
        }

        .nav-pills .nav-link {
            color: #555;
        }

        .nav-pills .nav-link.active {
            color: #fff;
        }
    </style>

</head>


<body>



    <?php
    include("php/connect.php");
    $sql = "SELECT * FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>


    <!-- header -->
    <?php include("Component/headerComponent.php") ?>



    <div class="container mt-5 mb-5">

        <!-- Card -->
        <div class="card card-cascade narrower">
            <div class="view view-cascade gradient-card-header blue-gradient">
                <h5 class="card-header-title">ชำระเงิน</h5>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <img src="uploads/<?php echo $_SESSION['img'] ?>" style="width:75px; height:75px ;border-radius:100%;" alt="">
                            &nbsp; ชื่อผู้สั่ง : คุณ <?php echo $_SESSION['name'] ?> <?php echo $_SESSION['lname'] ?>
                        </div>
                        <br>
                        <br>
                        กรอกที่อยู่และรายละเอียดสำหรับการจัดส่ง
                        <br>
                        <br>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control z-depth-1" placeholder="ต้องเป็นตัวเลข 10 หลัก" id="phone" name="phone">
                                </div>
                            </div>
                            <label>วันที่ต้องการให้จัดส่ง</label>
                            <!-- Extended material form grid -->
                            <div class="form-row">
                                <div class="col-md-4">
                                    <select class="browser-default custom-select z-depth-1">
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
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="browser-default custom-select z-depth-1">
                                        <option selected value="มกราคม">มกราคม</option>
                                        <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                        <option value="มีนาคม">มีนาคม</option>
                                        <option value="เมษายน">เมษายน</option>
                                        <option value="พฤษภาคม">พฤษภาคม</option>
                                        <option value="มิถุนายน">มิถุนายน</option>
                                        <option value="กรกฏาคม">กรกฏาคม</option>
                                        <option value="สิงหาคม">สิงหาคม</option>
                                        <option value="กันยายน">กันยายน</option>
                                        <option value="ตุลาคม">ตุลาคม</option>
                                        <option value="พฤศจิกายน">พฤศจิกายน</option>
                                        <option value="ธันวาคม">ธันวาคม</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="browser-default custom-select z-depth-1">
                                        <option selected value="2562">2562</option>
                                        <option value="2563">2563</option>
                                        <option value="2564">2564</option>
                                        <option value="2565">2565</option>
                                        <option value="2566">2566</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-5">สิ่งที่อยากได้เพิ่มเติม</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control z-depth-1" row="4" placeholder="เช่น เขียนอวยพรหน้าเค้ก, เทียนยังไงแบบไหน" id="phone" name="phone"></textarea>
                                </div>
                            </div>

                            <hr>
                            <div class="form-row">
                                <label class="col-sm-5">ที่อยู่สำหรับจัดส่ง</label>
                            </div>

                            <!-- Grid row -->
                            <div class="form-row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="number" class="form-control">
                                        <label for="number">ที่อยู่บ้านเลขที่</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="street" class="form-control">
                                        <label for="street">ถนน</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-4">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="tumbon" class="form-control">
                                        <label for="tumbon">ตำบล</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="aumpuoe" class="form-control">
                                        <label for="aumpuoe">อำเภอ</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="province" class="form-control">
                                        <label for="province">จังหวัด</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="form-row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form">
                                        <input type="text" id="zip" class="form-control">
                                        <label for="zip">รหัสไปรษณีย์</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                            <!-- Extended material form grid -->
                    </div>

                    <div class="col-sm-6">
                        <div class="px-4">

                            <div class="table-wrapper">
                                <h4>รายการสินค้าที่สั่ง</h4>
                                <!--Table-->
                                <table class="table table-hover mb-0">

                                    <!--Table head-->
                                    <thead>
                                        <tr align="center">
                                            <th>รูปสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total_price = 0;
                                        while ($meResult = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            // $key = array_search($meResult['id'], $meResult);
                                            $total_price = $total_price + $meResult['product_price'];
                                            ?>
                                            <tr align="center">
                                                <td><img style="width:150px;" src="products/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                                                <td><?php echo $meResult['product_name']; ?></td>
                                                <td><?php echo $meResult['product_num']; ?></td>
                                                <td><?php echo number_format($meResult['product_price']); ?></td>
                                            <?php
                                            }
                                            ?>
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                                <hr>
                                <h4 class="text-right">รวมเป็นเงิน : <?php echo number_format($total_price); ?> บาท</h4>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col text-center">
                        <h5>ข้อมูลการชำระเงิน</h5>

                        <!-- <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="q_type" id="radio_check1" onClick="show_table(this.value);" value="1">
                            <label class="custom-control-label" for="radio_check1">Internet Banking</label> <br>
                        </div>

                        <table width="100%" border="0" cellpadding="0" id="table_1" style="display:none">
                            <tr>
                                <td>1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />
                                    2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />

                                </td>
                            </tr>
                        </table>
                        <br>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="q_type" id="radio_check2" onClick="show_table(this.value);" value="2">
                            <label class="custom-control-label" for="radio_check2">โอนเงินผ่าน CreditCard</label> <br>
                        </div>


                        <table width="100%" border="0" cellpadding="0" id="table_2" style="display:none">
                            <tr>
                                <td>1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit. <br />
                                    2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.
                                </td>
                            </tr>
                        </table>
                        <br>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="q_type" id="radio_check3" onClick="show_table(this.value);" value="3">
                            <label class="custom-control-label" for="radio_check3">โอนเงินผ่านบัญชีธนาคาร</label> <br>
                        </div>

                        <table width="100%" border="0" cellpadding="0" id="table_3" style="display:none">
                            <tr>
                                <td>1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />
                                    2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />
                                </td>
                            </tr>
                        </table>
                        <br>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="q_type" id="radio_check4" onClick="show_table(this.value);" value="4">
                            <label class="custom-control-label" for="radio_check4">เก็บเงินปลายทาง(+ 30บาท)</label><br>
                        </div>

                        <table width="100%" border="0" cellpadding="0" id="table_4" style="display:none">
                            <tr>
                                <td>1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />
                                    2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit rerum obcaecati quis rem incidunt ullam fuga. Tempora nihil ipsa sed, ad quos corrupti, rerum cupiditate perferendis unde eveniet veritatis odit.<br />

                                </td>
                            </tr>
                        </table>
                        <br> -->


                            


                            <div class="row">
                                <div class="col-lg-7 mx-auto">
                                    <div class="bg-white rounded-lg shadow-sm p-5">
                                        <!-- Credit card form tabs -->
                                        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                                    <i class="fa fa-credit-card"></i>
                                                    Credit Card
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                                <i class="fab fa-paypal"></i>
                                                    Paypal
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                                    <i class="fa fa-university"></i>
                                                    โอนผ่านบัญชีธนาคาร
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End -->


                                        <!-- Credit card form content -->
                                        <div class="tab-content">

                                            <!-- credit card info-->
                                            <div id="nav-tab-card" class="tab-pane fade show active">
                                                <!-- <p class="alert alert-success">Some text success or error</p> -->
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="username">Full name (on the card)</label>
                                                        <input type="text" name="username" placeholder="เช่น Jason Doe" required class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cardNumber">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" name="cardNumber" placeholder="หมายเลขบนบัตรเครดิต" class="form-control" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text text-muted">
                                                                    <i class="fab fa-cc-visa mx-1"></i>
                                                                    <i class="fab fa-cc-amex mx-1"></i>
                                                                    <i class="fab fa-cc-mastercard mx-1"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label><span class="hidden-xs">Expiration</span></label>
                                                                <div class="input-group">
                                                                    <input type="number" placeholder="MM" name="" class="form-control" required>
                                                                    <input type="number" placeholder="YY" name="" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4">
                                                                <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                                    <i class="fa fa-question-circle"></i>
                                                                </label>
                                                                <input type="text" required class="form-control">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> ตกลง </button>
                                                </form>
                                            </div>
                                            <!-- End -->

                                            <!-- Paypal info -->
                                            <div id="nav-tab-paypal" class="tab-pane fade">
                                                <p>หรือใช้ Paypal ซึ่งเป็นวิธีที่ง่ายที่สุดในการชำระเงินออนไลน์</p>
                                                <p>
                                                    <button type="button" class="btn btn-primary rounded-pill"><i class="fab fa-paypal mr-2"></i> Log in my Paypal</button>
                                                </p>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                            <!-- End -->

                                            <!-- bank transfer info -->
                                            <div id="nav-tab-bank" class="tab-pane fade">
                                                <h6>รายละเอียดบัญชีธนาคาร</h6>
                                                <dl>
                                                    <dt>ธนาคาร</dt>
                                                    <!-- <dd>THE WORLD BANK</dd> -->
                                                    <input type="text" class="form-control" placeholder="เช่น ธนาคารกรุงไทย">
                                                </dl>
                                                <dl>
                                                    <dt>หมายเลขบัญชี</dt>
                                                    <!-- <dd>7775877975</dd> -->
                                                    <input type="text" class="form-control" placeholder="เช่น 7775877975">
                                                </dl>
                                                <dl>
                                                    <dt>หมายเลขบัญชีธนาคารระหว่างประเทศ</dt>
                                                    <!-- <dd>CZ7775877975656</dd> -->
                                                    <input type="text" class="form-control" placeholder="เช่น CZ7775877975656">
                                                </dl>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                            <!-- End -->
                                        </div>
                                        <!-- End -->

                                    </div>
                                </div>
                            </div>




                    </div>
                </div>
                <!-- end row -->
                <div class="text-center">
                <button type="button" class="btn btn-success text-center" data-toggle="modal" data-target="#centralModalSuccess">เสร็จสิ้น</button>
                </div>
                <!-- Central Modal Medium Success -->
                <div class="modal fade right" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-success" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading lead">Successful purchase</p>

                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">&times;</span>
                                </button> -->
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                                <div class="text-center">
                                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                                    <p>เสร็จสิ้นการทำรายการ. กรุณารอการทำรายการ 30 นาที ระบบจะแจ้งสถานะไปที่อีเมล์ของท่าน</p>
                                    <h5><i class="fas fa-birthday-cake"></i> ขอขอบคุณที่ไว้วางใจในสินค้าของเรา <i class="fas fa-birthday-cake"></i></h5>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-success" onclick="window.location.href='loading.php'" onclick="window.location.href='loading.php?product_code=<?php echo $meResult['product_code']; ?>'" >กลับสู่หน้าแรก <i class="fas fa-external-link-alt"></i></button>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!-- Central Modal Medium Success-->

            </div>

        </div>
    </div>

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

    <script>
        new WOW().init();
    </script>

    <script src="js/radio.js"></script>
</body>

</html>