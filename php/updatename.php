<?php

    require('connect.php');
    $sql = "UPDATE `member` SET `firstname` = :firstname, `lastname` = :lastname WHERE `member`.`id` = :id;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
    
    // $stmt->bindParam(':username', $_POST['username']);
    // $stmt->bindParam(':password', $_POST['password']);
    // $stmt->bindParam(':picture', $_POST['picture']);
    // $stmt->bindParam(':email', $_POST['email']);

    if ($stmt->execute()) :
        echo '<script> alert("อัพเดตสำเร็จ") </script>';
        header('Refresh:0 url=profile.php');
    else :
        echo '<script> alert("อัพเดตข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง") </script>';
    endif;
    $conn = null;
?>