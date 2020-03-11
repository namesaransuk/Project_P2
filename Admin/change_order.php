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

            <?php
            include('../php/connect.php');

            if (isset($_GET['p_id'])) {
                $strPID = $_GET["p_id"];
            }
            $sql = "SELECT * FROM product WHERE p_id = '$strPID' ";
            $stmt = $conn->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            ?>

            <form method="post" action="php/change_order_db.php?p_id=<?php echo $_GET['p_id'] ?>" enctype="multipart/form-data">
                <input type="hidden" name="p_id" id="p_id" value="<?php echo $result['p_id'] ?>">

                <div class="form-group row">
                    <figure class="figure mx-auto">
                        <img src="../products/<?php echo $result['p_img'] ?>" id="imgUpload" style="width:350px;" class="rounded" alt="">
                        <input type="hidden" name="hdnOldFile" value="<?php echo $result['p_img']; ?>">
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
                        <input type="text" class="form-control" id="p_name" name="p_name" value="<?php echo $result['p_name'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">รายละเอียด</label>
                    <div class="col-sm-10">
                        <!-- <input type="textarea" class="form-control" id="p_detail" name="p_detail" required> -->
                        <textarea class="form-control" id="p_detail" name="p_detail" cols="30" rows="10" required><?php echo $result['p_detail'] ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">ราคา</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="p_price" name="p_price" value="<?php echo $result['p_price'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" name="update" id="update" class="btn btn-success">อัพเดต</button>
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