<?php
if (isset($_POST['but'])) {

    $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
    $result = $conn->query($sql);

    if ($result) {
        echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
        header('Refresh:0 url=order1.php');
    } else {
        echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
    }
}

// if (isset($_POST['but2'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but3'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but4'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but5'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but6'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but7'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but8'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }

// if (isset($_POST['but9'])) {

//     $sql = "INSERT INTO products (product_code, product_name, product_img_name, product_num, product_price, product_pond, product_id) VALUES (NULL, '" . @$_POST['p_name'] . "', '" . @$_POST['p_img'] . "', '" . @$_POST['p_num'] . "', '" . @$_POST["p_price"] . "', '" . @$_POST['p_pond'] . "', '" . @$_POST['p_id'] . "') ON DUPLICATE KEY UPDATE product_num=product_num+'" . $_POST['p_num'] . "' , product_price=product_price+'" . $_POST['p_price'] . "';";
//     $result = $conn->query($sql);

//     if ($result) { // ตามสคริป
//         echo '<script> alert("เพิ่มสินค้าไปที่ตะกร้าสินค้าเรียบร้อย") </script>';
//         header('Refresh:0 url=order1.php');
//     } else {
//         echo '<script> alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มสินค้าได้") </script>';
//     }
// }
