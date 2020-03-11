<?php
        include("connect.php");
        if (isset($_GET['product_code'])) {
        $sql = "DELETE FROM `products` WHERE `products`.`product_code` = :product_code;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':product_code', $_GET['product_code']);
        $stmt->execute();
        header('Refresh:0 url=../selectcart.php');
    }
    ?>