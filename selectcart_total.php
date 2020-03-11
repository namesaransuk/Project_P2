<?php

include('php/connect.php');
$strMode = $_POST["tMode"];

if ($strMode == "ADD") {
    $sql = "UPDATE `products` SET `product_num`,`product_price` VALUES ('" . $_POST["tquantity"] . "','" . $_POST["tp_price"] . "')";
    $sql = "UPDATE `products` SET `product_num` = '" . $_POST["tquantity"] . "', `product_price` = '" . $_POST["tp_price"] . "';";
    $result = $conn->query($sql);
}

?>
