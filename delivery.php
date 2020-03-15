<?php session_start(); ?>

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
    <link rel="stylesheet" type="text/css" href="css/selectcart.css">
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

<body onload="doAutoRefresh2()">

    <!-- header -->
    <?php include("Component/headerComponent.php") ?>


    <div class="container">

        <div class="card mt-3">
            <div class="card-body">
                <h3 class="text-center">สถานะการจัดส่ง</h3>
                <!-- <hr size="2" color="#FFFFFF"> -->
            </div>
        </div>

        <div class="card mt-2">
            <div class="container">

            </div>
            <table class="table table-hover">
                <thead class="table-warning">
                    <tr align="center">
                        <th scope="col">ลำดับ</th>
                        <th scope="col">เลขที่ใบสั่งซื้อ</th>
                        <th scope="col">วันที่-เวลา จัดส่ง</th>
                        <th scope="col">วิธีการจัดส่ง</th>
                        <th scope="col">หมายเลขการจัดส่ง</th>
                        <th scope="col">การสั่งซื้อ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("php/connect.php");
                    $sql = "SELECT * FROM `order`";
                    $stmt = $conn->query($sql);

                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr align="center">
                            <td class="align-middle"><?php echo $result['o_id'] ?></th>
                            <td class="align-middle"><?php echo $result['o_number'] ?></td>
                            <td class="align-middle"><?php echo $result['o_date'] ?></td>
                            <td class="align-middle"><?php echo $result['o_detail'] ?></td>
                            <td class="align-middle"><?php echo $result['o_delivery'] ?></td>
                            <td class="align-middle"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#m1">ดูข้อมูล</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียดการสั่งซื้อ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table">
                        <thead>
                            <tr align="center">
                                <th scope="col">รูป</th>
                                <th scope="col">สินค้า</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col">ราคา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('php/connect.php');
                            $sql = "SELECT * FROM `products`";
                            $stmt = $conn->query($sql);

                            $total = 0;
                            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $total = $total + $result['product_price'];
                            ?>
                                <tr align="center">
                                    <td class="align-middle"><img src="products/<?php echo $result['product_img_name'] ?>" width="100" alt=""></td>
                                    <td class="align-middle"><?php echo $result['product_name'] ?></td>
                                    <td class="align-middle"><?php echo $result['product_num'] ?></td>
                                    <td class="align-middle"><?php echo $result['product_price'] ?>.-</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h4 class="text-right">รวมทั้งสิ้น : <?php echo number_format($total) ?></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

    <script src="script.js"></script>
    <script src="js/finalsum.js"></script>

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