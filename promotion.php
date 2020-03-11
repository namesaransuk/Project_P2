<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
    <link rel="stylesheet" type="text/css" href="css/Contact.css">
    <!-- ============================extention=========================== -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

</head>


<body>
    <!-- cart -->
    <?php include("Component/cartComponent.php") ?>

    <!-- header -->
    <?php include("Component/headerComponent.php") ?>

    <!-- !..........end.........! -->
    <div id="slidepro" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

        <div class="carousel-inner shadow-lg" id="slidepro">
            <div class="carousel-item active">
                <img src="img/s3.jpg" width="50%" height="50p%" >
            </div>


        </div>

    </div>
    <!-- เปิดคอนเทนเน่อ -->


    <div class="container mt-3 mx-auto">

        <nav aria-label="Page navigation example">
            <ul class="pagination pg-purple justify-content-end mt-4 mb-3 ">

            </ul>
        </nav>
        <div class="row text-center">
            <!-- คอลั่ม1 -->
            <div class="col-4">

                <!-- 1โปรโมชั่น -->

                <div class="card">

                    <div class="card-header">
                        <div class="card view overlay shadow-sm" style="min-width:9rem;">
                            <img src="img/ccc.jpg" class="card-img-top" alt="...">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <div class="mask rgba-purple-slight"></div>
                            </a>

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"> พบกับเมนูใหม่</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/ccc.jpg" class="card-img-top" alt="...">
                                        ระยะเวลาโปรโมชั่น: สั่งสินค้า 1 - 31 มกราคม 2563 <br>
                                        และรับสินค้าภายในเดือนตุลาคม<br>
                                        <br>
                                        <div class=text-left>
                                            เงื่อนไข:
                                            <br>
                                            1:สั่งจองสินค้าล่วงหน้า 2 วัน ผ่านชองทาง Delivery
                                            <br>
                                            2:โปรโมชั่นนี้ ไม่สามารถใช้ร่วมกับรายการส่งเสริมการขายอื่นๆได้
                                            <br>
                                            3:เงื่อนไขเป็นไปตามที่บริษัทกำหนด
                                            <br>
                                            สอบถาม/สั่งซื้อผ่านช่องทางออนไลน์ได้ที่
                                            <br>
                                            <i class="fab fa-facebook"></i>
                                            <a href="https://web.facebook.com/saransuksuttida" target="_blank"><i class="fa fa-angle-double-right"></i>Saransuk Yimyong</a>
                                            <br>
                                            <i class="fas fa-address-card"></i>
                                            <a href="tel:096-6957754">096-6957754 </a>
                                            <br>
                                            <i class="fas fa-envelope-open-text"></i>
                                            <a href="614259047@webmail.npru.ac.th">614259047@webmail.npru.ac.at</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="text-danger">
                            <h4>โปรโมชั่นสำหรับปีไหม่</h4>
                        </div>
                        เมื่อคุณซื้อ มิลค์กี้ทูโทนและเค้กวนิลา ได้รับส่วนลดทันที 50%
                    </div>
                </div>
            </div>

            <!-- คอลั่ม2 -->
            <div class="col-4">

                <!-- 1โปรโมชั่น -->

                <div class="card">

                    <div class="card-header">
                        <div class="card view overlay shadow-sm" style="min-width:9rem;">
                            <img src="img/bbb.jpg" class="card-img-top" alt="...">
                            <a href="#" data-toggle="modal" data-target="#exampleModal1">
                                <div class="mask rgba-purple-slight"></div>
                            </a>

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"> พบกับเมนูใหม่</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/bbb.jpg" class="card-img-top" alt="...">
                                        เพียงแค่คุณซื้อเค้กรสใก็ได้ภายใน3รสนี้ <br>
                                        รับไปเลยสิทธิ์ส่งฟรี เฉพาะ1-31มกราคม 2563<br>
                                        <br>
                                        <div class=text-left>
                                            เงื่อนไข:
                                            <br>
                                            1:สั่งจองสินค้าล่วงหน้า 2 วัน ผ่านชองทาง Delivery
                                            <br>
                                            2:โปรโมชั่นนี้ ไม่สามารถใช้ร่วมกับรายการส่งเสริมการขายอื่นๆได้
                                            <br>
                                            3:เงื่อนไขเป็นไปตามที่บริษัทกำหนด
                                            <br>
                                            สอบถาม/สั่งซื้อผ่านช่องทางออนไลน์ได้ที่
                                            <br>
                                            <i class="fab fa-facebook"></i>
                                            <a href="https://web.facebook.com/omaewa.moga.shinderu" target="_blank"><i class="fa fa-angle-double-right"></i>Jetsadakorn Soda</a>
                                            <br>
                                            <i class="fas fa-address-card"></i>
                                            <a href="tel:087-0038483">087-0038483</a>
                                            <br>
                                            <i class="fas fa-envelope-open-text"></i>
                                            <a href="614259006@webmail.npru.ac.th">614259006@webmail.npru.ac.at</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="text-danger">
                            <h4> พบกับเมนูใหม่</h4>
                        </div>
                        เมื่อคุณซื้อ 3สหายช้อกโกแลต คุณจะได้รับสิทธิ์ส่งฟรี
                    </div>
                </div>
            </div>
            <!-- คอลั่ม3 -->
            <div class="col-4">

                <!-- 1โปรโมชั่น -->
                <div class="card">

                    <div class="card-header">
                        <div class="card view overlay shadow-sm" style="min-width:9rem;">
                            <img src="img/abc.jpg" class="card-img-top" alt="...">
                            <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                <div class="mask rgba-purple-slight"></div>
                            </a>

                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">โปรโมชั่นใหม่ต้อนรับปี2020</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="img/abc.jpg" class="card-img-top" alt="...">
                                        เพียงแค่คุณสมัครเป็นสมาชิกของ BON'is CAKE คุณจะได้รับโปรโมชั่นซื้อ2แถม1 และบริการจัดส่งฟรี ตามเงื่อนไขดังต่อไปนี้<br>
                                        และรับสินค้าภายในเดือนตุลาคม<br>
                                        <br>
                                        <div class=text-left>
                                            เงื่อนไข:
                                            <br>
                                            1:สมัครสมาชิก BON'is CAKE
                                            <br>
                                            2:ซื้อเค้กครบ2กล่อง

                                            <br>
                                            สอบถาม/สั่งซื้อผ่านช่องทางออนไลน์ได้ที่
                                            <br>
                                            <i class="fab fa-facebook"></i>
                                            <a href="https://web.facebook.com/profile.php?id=100002969027454" target="_blank"><i class="fa fa-angle-double-right"></i>Chirarot Changam</a>
                                            <br>
                                            <i class="fas fa-address-card"></i>
                                            <a href="tel:092-7242535">092-7242535</a>
                                            <br>
                                            <i class="fas fa-envelope-open-text"></i>
                                            <a href="614259003@webmail.npru.ac.th">614259003@webmail.npru.ac.at</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="text-danger">
                            <h4>โปรโมชั่นใหม่ต้อนรับปี2020</h4>
                        </div>
                        เพียงแค่คุณสมัครเป็นสมาชิกของ BON'is CAKE


                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <br>

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

    <script src="script.js"></script>

</body>

</html>