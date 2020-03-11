<?php session_start(); ?>

<?php if (isset($_SESSION['id'])) { ?>

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
        <?php
        include("php/connect.php");
        $sql = "SELECT * FROM products,product WHERE product.p_id = products.product_id ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        ?>

        <!-- header -->
        <?php include("Component/headerComponent.php") ?>



        <div class="container mt-5 mb-5">
            <!-- Table with panel -->
            <div class="card card-cascade narrower">

                <!--Card image-->
                <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-th-large mt-0"></i>
                        </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-columns mt-0"></i>
                        </button>
                    </div>

                    <h3 class="white-text mx-auto mt-3 mb-3">ตะกร้าสินค้าของฉัน</h3>

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-pencil-alt mt-0"></i>
                        </button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="far fa-trash-alt mt-0"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                            <i class="fas fa-info-circle mt-0"></i>
                        </button> -->
                    </div>

                </div>
                <!--/Card image-->


                <?php
                $sql = "SELECT * FROM products";
                $stmt = $conn->query($sql);
                $result = $stmt->rowCount();
                if ($result == 0) {
                ?>

                    <div class="my-auto mx-auto">
                        <h3 class="text-center my-auto">ไม่มีสินค้า</h3>
                        <a href="order1.php" class="btn btn-primary mt-4" role="button">สั่งซื้อเพิ่มเติม</a>
                    </div>

                <?php } else { ?>
                    <div class="container">
                        <div style="display:none" class='alert alert-primary alert-dismissable pb-0'>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p id="alert"></p>
                        </div>
                    </div>

                    <form name="frmMain">
                        <div class="px-4">
                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-striped mb-0">

                                    <!--Table head-->
                                    <thead>
                                        <tr align="center">
                                            <th>รูปสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>จำนวน</th>
                                            <th width="20%">ราคา</th>
                                            <th>&nbsp;</th>
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
                                                <td class="align-middle"><img style="width:130px;" src="products/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                                                <td class="align-middle">
                                                    <div>
                                                        <?php echo $meResult['product_name']; ?>
                                                     </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="form-row">
                                                        <div class="col-sm-8 text-center">
                                                            <select type="text" class="ml-auto col-sm-8 browser-default custom-select" id="quantity<?php echo $meResult['product_code'] ?>" name="<?php echo $meResult['product_code'] ?>" OnChange="finalsum<?php echo $meResult['product_code']; ?>(); do_selectchange(this); sendPrice();">
                                                                <option selected disabled value="<?php echo $meResult['product_num']; ?>"><?php echo $meResult['product_num']; ?></option>
                                                                <option value="1">1</option>
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
                                                        <label class="col-sm-4 text-left col-form-label" for="">ชิ้น</label>
                                                    </div>

                                                    <input class="hide-on-screen" id="p_pond<?php echo $meResult['product_code']; ?>" name="p_pond" OnChange="finalsum<?php echo $meResult['product_code']; ?>();" value=<?php echo $meResult['product_pond'] ?>>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="form-row">
                                                        <div class="col-sm-8 text-center">
                                                            <input type="text" class="form-control col-sm-8 ml-auto text-center" name="<?php echo $meResult['product_code'] ?>" id="p_price<?php echo $meResult['product_code']; ?>" onclick="do_selectchange2(this)" value="<?php echo $meResult['product_price'] ?>" readonly>
                                                        </div>
                                                        <label class="col-sm-4 text-left col-form-label" for="">บาท</label>
                                                    </div>
                                                <td class="align-middle">
                                                    <a class="btn btn-info" href="php/deletecart.php?product_code=<?php echo $meResult['product_code']; ?>" onClick="return confirm('คุณต้องการลบข้อมูลที่เลือก ?')" role="submit">
                                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                                        ลบออกจากตะกร้า</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                                <hr>
                                <span id="mySpan">
                                    <div class="row">
                                        <div class="col">
                                            <div id="time"></div>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-right" id="price"></h4>
                                        </div>
                                    </div>

                                </span>
                                <hr>
                            </div>

                            <div class="col">
                                <div class="row">
                                    <div class="mx-auto">

                                        <a href="order1.php" class="btn btn-primary" role="button">สั่งซื้อเพิ่มเติม</a>
                                        <a href="php/deleteall_cart.php" class="btn btn-danger" onClick="return confirm('คุณต้องการลบข้อมูลที่เลือก ทั้งหมดใช่หรือไม่ ?')" role="submit">ล้างตะกร้าสินค้า</a>
                                        <a href="payment.php" class="btn btn-success" role="button">ชำระเงิน</a>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                <?php } ?>

            </div>
            <!-- Table with panel -->
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

        <!-- <script>
            $('.form-group').on('input', '.prc', function() {
                var totalSum = ;
                $('.form-group .prc').each(function() {
                    var inputVal = $(this).val();
                    if ($.isNumeric(inputVal)) {
                        totalSum = totalSum + parseInt(inputVal);
                    }
                })
                $('#total').text('ยอดรวม : ' + totalSum + ' บาท');
            });
        </script> -->

        <script type="text/javascript">
            function Inint_AJAX() {

                try {
                    return new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {} //IE

                try {
                    return new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {} //IE

                try {
                    return new XMLHttpRequest();
                } catch (e) {} //Native Javascript

                alert("XMLHttpRequest not supported");

                return null;

            };

            function do_selectchange(sel) {
                var query = 'id=' + sel.id + '&product_code=' + sel.name + '&product_num=' + sel.value; //ค่าที่ส่งมาใช้เพื่อส่งไปอัปเดท
                var req = Inint_AJAX();
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            $(document).ready(function() {
                                $('.alert').show()
                            });

                            document.getElementById("alert").innerHTML = req.responseText;

                            // window.setTimeout(function() {
                            //     $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            //         $(this).remove();
                            //     });
                            // }, 3000);
                        };
                    };
                };
                req.open("POST", "php/update_order.php?product_code=<?php echo $meResult['product_code'] ?>&product_name=<?php echo $meResult['product_name'] ?>"); //สร้าง connection
                req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // set Header
                req.send(query); //ส่งค่า
            }

            function do_selectchange2(sel) {
                var query = 'id=' + sel.id + '&product_code=' + sel.name + '&product_price=' + sel.value; //ค่าที่ส่งมาใช้เพื่อส่งไปอัปเดท
                var req = Inint_AJAX();
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            // alert(req.responseText); //เมื่ออัปเดทเรียบร้อย (อาจแสดงข้อความว่าอัปเดทเรียบร้อยก็ได้)
                        };
                    };
                };
                req.open("POST", "php/update_order2.php?product_code=<?php echo $meResult['product_code'] ?>"); //สร้าง connection
                req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // set Header
                req.send(query); //ส่งค่า
            }

            // function doAutoRefresh() {
            //     var req = Inint_AJAX();
            //     req.open("POST", 'php/time.php?' + new Date().getTime(), true);
            //     req.onreadystatechange = function() {
            //         if (req.readyState == 4) {
            //             if (req.status == 200) {
            //                 document.getElementById("total").innerHTML = "วันนี้ : " + req.responseText;
            //                 setTimeout("doAutoRefresh()", 1000);
            //             }
            //         }
            //     };
            //     req.send(null);
            // };

            function doAutoRefresh2() {
                var req = Inint_AJAX();
                req.open("POST", 'php/show_total.php?');
                req.onreadystatechange = function() {
                    if (req.readyState == 4) {
                        if (req.status == 200) {
                            document.getElementById("price").innerHTML = "ราคารวม : " + req.responseText + " บาท";
                            setTimeout("doAutoRefresh2()", 1000);
                        }
                    }
                };
                req.send(null);
            };
        </script>

        <script src="js/sendPrice.js"></script>
    </body>

    </html>

<?php } else {
    echo '<script> alert("กรุณาเข้าสู่ระบบอีกครั้ง") </script>';
    header('Refresh:0 url=index.php');
}
?>