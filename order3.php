<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SelectCake หน้า 3</title>
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


    <!-- เปิดคอนเทนเน่อ -->
    <div class="container mt-3 mx-auto">

        <nav aria-label="Page navigation example">
            <ul class="pagination pg-purple justify-content-end mt-4 mb-3">
                <li class="page-item">
                    <a class="page-link" href="order2.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="order1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="order2.php">2</a></li>
                <li class="page-item active"><a class="page-link" href="order3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="order4.php">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="order4.php">Next</a>
                </li>
            </ul>
        </nav>

        <div class="row text-center">

            <!-- คอลั่ม1 -->
            <div class="col-4">

                <div class="card shadow-sm" style="min-width:9rem;">
                    <img src="products/มิลค์กี้ช็อคกี้.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">มิลค์กี้ช็อคกี้</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        1
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/โรเซ่ คาโรล่า กาแฟ.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">โรเซ่ คาโรล่า กาแฟ</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        4
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/วีตพรุน.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">วีตพรุน</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal6"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        7
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ปิดคอลั่ม1 -->

            <!-- เปิดคอลั่ม2 -->
            <div class="col-4">

                <div class="card shadow-sm" style="min-width:9rem;">
                    <img src="products/มิลค์กี้ทูโทน.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">มิลค์กี้ทูโทน</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        2
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/โรเซ่ คาโรล่า ช็อกโกแลต.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">โรเซ่ คาโรล่า ช็อกโกแลต</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal4"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        5
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/ไวท์เพิร์ลบัตเตอร์.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">ไวท์เพิร์ลบัตเตอร์</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal7"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        8
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ปิดคอลั่ม2 -->

            <!-- เปิดคอลั่ม3 -->
            <div class="col-4">

                <div class="card shadow-sm" style="min-width:9rem;">
                    <img src="products/มิลค์กี้ไวท์ช็อก.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">มิลค์กี้ไวท์ช็อก</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        3
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/โรเซ่ คาโรล่า วนิลา.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">โรเซ่ คาโรล่า วนิลา</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal5"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        6
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mt-3" style="min-width:9rem;">
                    <img src="products/อัลมอนด์มอคค่า.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">อัลมอนด์มอคค่า</h6>
                        <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModal8"><i class="fas fa-cart-plus"></i> เพิ่ม</a>
                        <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        9
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ปิดคอลั่ม3 -->

        </div>
        <!-- end row -->

        <nav aria-label="Page navigation example">
            <ul class="pagination pg-purple justify-content-end mt-4 mb-3">
                <li class="page-item">
                    <a class="page-link" href="order2.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="order1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="order2.php">2</a></li>
                <li class="page-item active"><a class="page-link" href="order3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="order4.php">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="order4.php">Next</a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- end container -->


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