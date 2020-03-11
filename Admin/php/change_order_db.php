<?php
include('../../php/connect.php');

    $sql = "UPDATE `product` SET `p_name` = '" . $_POST['p_name'] . "', `p_detail` = '" . $_POST['p_detail'] . "', `p_price` = '" . $_POST['p_price'] . "', `p_price` = '" . $_POST['p_price'] . "' WHERE `product`.`p_id` = '" . $_GET['p_id'] . "';";
    $result = $conn->query($sql);

    if ($_FILES['fileUpload']['name'] != "") {
        $newName = $_FILES['fileUpload']['name'];
        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../../products/' . $newName)) {

            @unlink("../../products/".$_POST["hdnOldFile"]);
            $sql = "UPDATE `product` SET p_img = '". $newName ."' WHERE `product`.`p_id` = '" . $_GET['p_id'] . "';";
            $result = $conn->query($sql);

            if ($result) {
                echo '<script> alert("Update สำเร็จ !!!") </script>';
                header('Refresh:0 url=../add_order.php');
            } else {
                echo '<script> alert("อัพเดตไม่ได้ โปรดลองอีกครั้ง") </script>';
            }
        }
    }
    else {
        echo '<script> alert("Update สำเร็จ !!!") </script>';
                header('Refresh:0 url=../add_order.php');
    }
