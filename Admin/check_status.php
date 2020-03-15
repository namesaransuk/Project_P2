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

    <div class="card mb-5 row wow fadeIn">
        <div class="card-body text-center">
            <h3>Modify Order In Tables1</h3>
            <hr>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">สินค้า</th>
                        <th scope="col">จำนวน</th>
                        <th scope="col">ราคา</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../php/connect.php');

                    $sql = "SELECT * FROM products";
                    $stmt = $conn->query($sql);

                    $total = 0;
                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $total = $total + $result['product_price'];
                    ?>
                        <tr>
                            <td><img src="../products/<?php echo $result['product_img_name'] ?>" width="75" alt=""></td>
                            <td><?php echo $result['product_name'] ?></td>
                            <td><?php echo $result['product_num'] ?></td>
                            <td><?php echo $result['product_price'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <form method="post" action="php/check_status_db.php" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="p_name" class="col-sm-2 col-form-label">เลขที่ใบสั่งซื้อ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="o_number" name="o_number">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_name" class="col-sm-2 col-form-label">วันที่ / เวลาจัดส่ง</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="o_date" name="o_date">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_name" class="col-sm-2 col-form-label">วิธีการจัดส่ง</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="o_detail" name="o_detail">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="p_name" class="col-sm-2 col-form-label">หมายเลขการจัดส่ง</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="o_delivery" name="o_delivery">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" name="update" id="update" class="btn btn-success">ส่งข้อมูล</button>
                </div>

        </div>
    </div>
    </form>

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