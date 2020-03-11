<?php session_start() ?>

<?php
if (isset($_POST['firstname']) && ($_POST['lastname'])) :
    require('connect.php');
    $sql = "UPDATE `member` SET `firstname` = :firstname, `lastname` = :lastname WHERE `member`.`id` = :id;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);


    // $stmt->bindParam(':username', $_POST['username']);
    // $stmt->bindParam(':password', $_POST['password']);
    // $stmt->bindParam(':picture', $_POST['picture']);
    // $stmt->bindParam(':email', $_POST['email']);

    if ($stmt->execute()) :
        echo '<script> alert("อัพเดตสำเร็จ") </script>';
        header('Refresh:0 url=profile.php');
    else :
        echo '<script> alert("อัพเดตข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง") </script>';
    endif;
    $conn = null;
endif;
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in And Sign up</title>
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
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <!-- ============================extention=========================== -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

</head>


<body>

    <!-- header -->
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
                            <a class="item mx-auto" href="index.php"><i class="fas fa-home"></i> หน้าแรก</a>
                        </li>
                        <li class="nav-item" id="navnav">
                            <a class="item mx-auto" href="order1.php"><i class="fas fa-birthday-cake"></i> สั่งเค้ก</a>
                        </li>
                        <li class="nav-item" id="navnav">
                            <a class="item mx-auto" href="promotion.php"><i class="fas fa-gift"></i> โปรโมชั่น</a>
                        </li>
                        <li class="nav-item" id="navnav">
                            <a class="item mx-auto" href="how2buy.php"><i class="fas fa-store"></i> วิธีการสั่งซื้อ</a>
                        </li>
                        <li class="nav-item" id="navnav">
                            <a class="item mx-auto" href="contact.php"><i class="fas fa-address-book"></i> ติดต่อเรา</a>
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
                                    <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
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

    <div class="container mt-5 mb-5">

        <div class="card card-cascade narrower">
            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue-gradient">
                <h5 class="card-header-title">ข้อมูลส่วนตัว</h5>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">

                <div class="form-group row">
                    <label for="profile" class="col-sm-3 col-form-label">รูปโปลไฟล์</label>
                    <div class="col-sm-9">
                        <img src="uploads/<?php echo $_SESSION['img'] ?>" style="width:150px; height:150px ;border-radius:100%;" alt="">
                    </div>
                </div>

                <hr>



                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
                    <div class="input-group col-sm-5">
                        <input type="text" name="firstname" class="form-control" value=<?php echo $_SESSION['name'] ?> readonly>
                        <input type="text" name="lastname" class="form-control" value=<?php echo $_SESSION['lname'] ?> readonly>
                        <div class="col-sm-1">
                            <a href="updatename.php" role="button" data-toggle="modal" data-target="#updatename" class="btn btn-success btn-sm">แก้ไข</a>
                        </div>
                    </div>
                </div>


                <!-- Central Modal Medium Info ชื่อ-นามสกุล -->
                <div class="modal fade" id="updatename" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-info modal-dialog-centered" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading lead">Modal Info</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <form action="profile.php" method="POST">
                                <div class="modal-body">
                                    <div class="text-center">
                                        <h4>เปลี่ยนชื่อ-นามสกุล</h4>
                                        <div class="md-form">
                                            <input type="text" id="firstname" name="firstname" class="form-control">
                                            <label for="firstname">ชื่อ</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="lastname" name="lastname" class="form-control">
                                            <label for="lastname">นามสกุล</label>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <input type="submit" id="submit1" name="submit1" class="btn btn-primary" value="ตกลง">
                                    <a role="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">ยกเลิก</a>
                                </div>
                        </div>
                        </form>
                        <!--/.Content-->
                    </div>
                </div>
                <!-- Central Modal Medium Info-->

                <hr>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">ชื่อผู้ใช้</label>
                    <div class="input-group col-sm-5">
                        <input type="text" class="form-control" name="username" value=<?php echo $_SESSION['uname'] ?> readonly>
                        <div class="col-sm-1">
                            <a href="#" role="submit" class="btn btn-success btn-sm">แก้ไข</a>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                    <div class="input-group col-sm-5">
                        <input type="password" class="form-control" name="password" value=<?php echo $_SESSION['pword'] ?> readonly>
                        <div class="col-sm-1">
                            <a href="#" role="submit" class="btn btn-success btn-sm">แก้ไข</a>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="input-group col-sm-5">
                        <input type="email" class="form-control" name="email" value=<?php echo $_SESSION['email'] ?> readonly>
                        <div class="col-sm-1">
                            <a href="#" role="submit" class="btn btn-success btn-sm">แก้ไข</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4 mt-3">
                    <h5><i class="fas fa-map-marker-alt"></i> Location</h5>
                    <p class="text-white mb-4">85 ถนนมาลัยแมน ต.เมืองนครปฐม อ.เมือง จ.นครปฐม 73000</p>
                    <h5><i class="fas fa-birthday-cake"></i> Credit</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://www.madamemarco.co.th" target="_blank"><i class="fa fa-angle-double-right"></i>Madammarco</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 mt-3">
                    <h5><i class="fas fa-server"></i> Website</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.php"><i class="fa fa-angle-double-right"></i>หน้าแรก</a></li>
                        <li><a href="order1.php"><i class="fa fa-angle-double-right"></i>สั่งเค้ก</a></li>
                        <li><a href="promotion.php"><i class="fa fa-angle-double-right"></i>โปรโมชั่น</a></li>
                        <li><a href="how2buy.php"><i class="fa fa-angle-double-right"></i>วิธีการสั่งซื้อ</a></li>
                        <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>ติดต่อเรา</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 mt-3">
                    <h5><i class="fab fa-facebook"></i> Facebook Dev.</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="https://web.facebook.com/profile.php?id=100002969027454" target="_blank"><i class="fa fa-angle-double-right"></i>Chirarot Changam</a></li>
                        <li><a href="https://web.facebook.com/omaewa.moga.shinderu" target="_blank"><i class="fa fa-angle-double-right"></i>Jetsadakorn Soda</a></li>
                        <li><a href="https://web.facebook.com/saransuksuttida" target="_blank"><i class="fa fa-angle-double-right"></i>Saransuk Yimyong</a></li>
                    </ul>
                </div>
            </div>
            <hr size="1" color="#FFFFFF">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center text-white">
                    <p class="h6">Copyright &copy 2019 Software Engineering Group.<a class="text-green ml-2" href="https://www.npru.ac.th/" target="_blank">All rights reserved | NPRU</a></p>
                </div>
            </div>
        </div>
    </section>
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

</body>

</html>