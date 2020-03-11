<?php
        require("connect.php");
        if (isset($_GET['product_code'])) {
        $sql = "DELETE FROM products;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':product_code', $_GET['product_code']);
        $stmt->execute();

        $sql = "TRUNCATE TABLE products;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':product_code', $_GET['product_code']);
        $stmt->execute();
        
        header('location:loading.php');
    }
    ?>