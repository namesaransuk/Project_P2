<?php

    session_start();

    include("php/connect.php");
    // $sql = "DELETE FROM products;";
    //     $stmt = $conn->prepare($sql);

    //     $stmt->bindParam(':product_code', $_GET['product_code']);
    //     $stmt->execute();
        
    session_destroy();
    

        
    echo '<script> alert("ออกจากระบบสำเร็จ !!") </script>';
    header('Refresh:0 url=index.php');
    // header('location:index.php');
