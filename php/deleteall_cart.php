<?php
        include("connect.php");
        $sql = "DELETE FROM products;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':product_code', $_GET['product_code']);
        $stmt->execute();

        $sql = "TRUNCATE TABLE products;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':product_code', $_GET['product_code']);
        $stmt->execute();
        
        header('Refresh:0 url=../selectcart.php');
    ?>