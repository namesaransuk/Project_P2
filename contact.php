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
    <div class="card-body mx-auto">
        <div class="row">

            <div class="col-sm-6 mt-2">
                <div class="card">

                    <div class="card-header">
                        <center>
                            <h2><i class="far fa-id-card"></i> ติดต่อเรา</h2>
                        </center>

                        <div class="card-body">
                        <div class="row">
                            <div class="list-group" style="width: 100%;">
                                <!-- <p>ผู้จัดทำ </p> -->
                                <p list-group-item list-group-item-action></p>
                                <p class="list-group-item list-group-item-action">&nbsp; &nbsp; &nbsp; Mr.Saransuk Yimyong
                                    <br>
                                    <i class="fab fa-facebook"></i>
                                    <a href="https://web.facebook.com/saransuksuttida" target="_blank"><i class="fa fa-angle-double-right"></i>Saransuk Yimyong</a>
                                    <br>
                                    <i class="fas fa-address-card"></i>
                                    <a href="tel:096-6957754">096-6957754 </a>
                                    <br>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <a href="614259047@webmail.npru.ac.th">614259047@webmail.npru.ac.at</a>
                                </p>

                                <br>

                                <p class="list-group-item list-group-item-action">&nbsp; &nbsp; &nbsp; Mr.Chirarot Changam
                                    <br>
                                    <i class="fab fa-facebook"></i>
                                    <a href="https://web.facebook.com/profile.php?id=100002969027454" target="_blank"><i class="fa fa-angle-double-right"></i>Chirarot Changam</a>
                                    <br>
                                    <i class="fas fa-address-card"></i>
                                    <a href="tel:092-7242535">092-7242535</a>
                                    <br>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <a href="614259003@webmail.npru.ac.th">614259003@webmail.npru.ac.at</a>
                                </p>


                                <br>

                                <p class="list-group-item list-group-item-action">&nbsp; &nbsp; &nbsp; Mr.Jetsadakorn Soda
                                    <br>
                                    <i class="fab fa-facebook"></i>
                                    <a href="https://web.facebook.com/omaewa.moga.shinderu" target="_blank"><i class="fa fa-angle-double-right"></i>Jetsadakorn Soda</a>
                                    <br>
                                    <i class="fas fa-address-card"></i>
                                    <a href="tel:087-0038483">087-0038483</a>
                                    <br>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <a href="614259006@webmail.npru.ac.th">614259006@webmail.npru.ac.at</a>
                                </p>
                            </div>
                            </p>
                        </div>
                    </div>
                    
                    </div>

                    

                </div>
            </div>

            <div class="col-sm-6 mt-2">
                <div class="card">

                    <div class="card-header">
                        <center>
                            <h2> <i class="fas fa-envelope"></i>ข้อความถึงเรา</h2>
                        </center>
                        <br>

                        <p class="list-group-item list-group-item-action">

                            ชื่อ: <input class="form-control" type=“text” name=“Name” id=“Id” cols=“Cols” rows=“Rows”></textarea>
                            <br>


                            อีเมล์: <input class="form-control" type=“text” name=“Email” id=“Id” cols=“Cols” rows=“Rows”></textarea>
                            <br>

                            โทรศัพท์:<input class="form-control" type=“text” name=“Tel” id=“Id” cols=“Cols” rows=“Rows”></textarea>
                            <br>

                            เรื่อง:<input class="form-control" type=“text” subject=“Text” id=“Id” cols=“Cols” rows=“Rows”></textarea>
                            <br>


                            ข้อความ : <textarea class="form-control" row="6" type="text" text="txtmessage" name="message"></textarea>
                            <br>
                            <button type="button" class="btn btn-primary btn-sm">ส่ง</button>
                            <button type="button" class="btn btn-secondary btn-sm">ยกเลิก</button>
                        </p>
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-map-marker-alt"></i>Location</button></a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                            <div class="modal-dialog modal-dialog-centered" role="document">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">แผนที่</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.0354466146596!2d100.02519391490803!3d13.836910090292475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e451d74429ad%3A0xf01923824353060!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiO4LiZ4LiE4Lij4Lib4LiQ4Lih!5e0!3m2!1sth!2sth!4v1570349000882!5m2!1sth!2sth" width="470" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->

    <!-- <div class="wow bounceInUp">
    Content to Reveal Here
  </div> -->

    <!-- เปิดคอนเทนเน่อ -->

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