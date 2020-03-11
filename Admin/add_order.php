<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Order</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../img/Cake_ChocolateCake.png">

    <style>
        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <?php include('Component/header.php') ?>
    <!--Main Navigation-->

    <form method="post" enctype="multipart/form-data">
        <div class="card mb-5 row wow fadeIn">
            <div class="card-body text-center">
                <h3>Add Order In Tables1</h3>
                <hr>

                <?php
                include('../php/connect.php');

                if (isset($_POST['send'])) {
                    // $temp = explode('.', $_FILES['fileUpload']['name']); // อัพโหลดรูป
                    $newName = @$_FILES['fileUpload']['name']; // เปลี่ยนชื่อรูปตามเวลาในเครื่อง
                    if (move_uploaded_file(@$_FILES['fileUpload']['tmp_name'], '../products/' . $newName)) {

                        $sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_img`, `p_detail`, `p_price`) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . $newName . "', '" . @$_POST['p_detail'] . "', '" . @$_POST['p_price'] . "');";
                        $result = $conn->query($sql);

                        if ($result) { // ตามสคริป
                            echo '<script> alert("เพิ่มสินค้าเรียบร้อยสินค้า !!") </script>';
                            header('Refresh:0 url=./add_order.php');
                        } else {
                            echo '<script> alert("เพิ่มสินค้าไม่ได้ ลองใหม่อีกครั้ง !!") </script>';
                        }
                    }
                }
                ?>


                <div class="form-group row">
                    <figure class="figure mx-auto">
                        <img src="img/exam.jpg" id="imgUpload" style="width:350px;" class="rounded" alt="">
                        <figcaption class="figure-caption">เลือกรูปสินค้า</figcaption>
                    </figure>
                </div>

                <div class="form-group row">
                    <label for="fileUpload" class="col-sm-2 col-form-label">รูปสินค้า</label>
                    <div class="custom-file col-sm-9 ml-3">
                        <input type="file" class="custom-file-input form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
                        <label class="custom-file-label text-left" for="fileUpload">เลือกรูปภาพ</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_name" class="col-sm-2 col-form-label">ชื่อสินค้า</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="p_name" name="p_name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">รายละเอียด</label>
                    <div class="col-sm-10">
                        <!-- <input type="textarea" class="form-control" id="p_detail" name="p_detail" required> -->
                        <textarea class="form-control" id="p_detail" name="p_detail" cols="30" rows="10" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">ราคา</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="p_price" name="p_price" required>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" name="send" id="send" class="btn btn-success">เพิ่ม</button>
                </div>

            </div>
        </div>
    </form>

    <div class="card mb-5 row wow fadeIn">
        <div class="card-body text-center">
            <h3>List Order In Tables1</h3>
            <hr>

            <?php
            include('../php/connect.php');
            $sql = "SELECT * FROM product";
            $stmt = $conn->query($sql);
            ?>

                <div class="px-4">

                    <div class="table-wrapper">
                        <!--Table-->
                        <table class="table table-striped mb-0">

                            <!--Table head-->
                            <thead>
                                <tr align="center">
                                    <th>รายการ</th>
                                    <th>รูปสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>รายละเอียด</th>
                                    <th>ราคา</th>
                                    <th><i class="fas fa-exchange-alt"></i></th>
                                    <th><i class="fas fa-trash-alt"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($meResult = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <tr align="center">
                                        <td>
                                            <div>
                                                <?php echo $meResult['p_id']; ?>
                                                <input type="hidden" name="p_id" id="p_id" value="<?php echo $meResult['p_id']; ?>">
                                            </div>
                                        </td>
                                        <td><img style="width:130px;" src="../products/<?php echo $meResult['p_img']; ?>" border="0"></td>
                                        <td>
                                            <div><?php echo $meResult['p_name']; ?></div>
                                        </td>
                                        <td>
                                            <div><?php echo $meResult['p_detail']; ?></div>
                                        </td>
                                        <td>
                                            <div>
                                                <div><?php echo $meResult['p_price']; ?></div>
                                            </div>
                                        <td>
                                            <a class="btn btn-info" href="change_order.php?p_id=<?php echo $meResult['p_id']; ?>" role="submit">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                แก้ไข</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="php/delete_order_db.php?p_id=<?php echo $meResult['p_id']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลที่เลือก ?')" role="submit">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                ลบ</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="mx-auto">

                                <!-- <a href="order1.php" class="btn btn-primary" role="button">สั่งซื้อเพิ่มเติม</a>
                                        <a href="php/deleteall_cart.php?product_code=<?php echo $meResult['product_code']; ?>" class="btn btn-danger" onClick="return confirm('คุณต้องการลบข้อมูลที่เลือก ทั้งหมดใช่หรือไม่ ?')" role="submit">ล้างตะกร้าสินค้า</a>
                                        <a href="payment.php" class="btn btn-success" role="button">ชำระเงิน</a> -->


                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

    <!--Footer-->
    <?php include('Component/footer.php'); ?>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        function readURL(input) { // ตอนอัพโหลด แสดงให้ขึ้นรูป
            var reader = new FileReader();

            reader.onload = function(e) {
                console.log(e.target.result)
                $('#imgUpload').attr('src', e.target.result).width(350)
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>

</body>

</html>