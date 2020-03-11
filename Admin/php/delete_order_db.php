<?php
        include("../../php/connect.php");
        if (isset($_GET['p_id'])) {
        $sql = "DELETE FROM `product` WHERE `product`.`p_id` = :p_id;";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':p_id', $_GET['p_id']);
        $stmt->execute();

        header('Refresh:0 url=../add_order.php');
    }
    ?>