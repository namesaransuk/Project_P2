<?php
session_start();
include('connect.php');
// $sql = "UPDATE `member` SET `firstname`=:firstname,`lastname`=:lastname,`username`=:username,`password`=:password,`picture`=:picture,`email`=:email WHERE id = '" . $_SESSION['id'] . "';";
// $stmt = $conn->prepare($sql);
// $stmt->bindParam(':firstname', $_POST['firstname']);
// $stmt->bindParam(':lastname', $_POST['lastname']);
// $stmt->bindParam(':username', $_POST['username']);
// $stmt->bindParam(':password', $_POST['password']);
// $stmt->bindParam(':picture', $_POST['fileUpload']);
// $stmt->bindParam(':email', $_POST['email']);

// if ($stmt->execute()) :
//     echo '<script> alert("อัพเดตสำเร็จ") </script>';
//     header('Refresh:0 url=../profile.php');
// else :
//     echo '<script> alert("อัพเดตข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง") </script>';
// endif;
// $conn = null;

$sql = "UPDATE `member` SET `firstname`='" . $_POST['firstname'] . "',`lastname`='" . $_POST['lastname'] . "',`username`='" . $_POST['username'] . "',`password`='" . $_POST['password'] . "',`email`='" . $_POST['email'] . "' WHERE id = '" . $_SESSION['id'] . "';";
$stmt = $conn->query($sql);

if ($_FILES['fileUpload']['name'] != "") {
    $newName = $_FILES['fileUpload']['name'];
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../uploads/' . $newName)) {

        @unlink("../uploads/" . $_POST["hdnOldFile"]);
        $sql = "UPDATE `member` SET picture = '" . $newName . "' WHERE id = '" . $_SESSION['id'] . "';";
        $stmt = $conn->query($sql);

        if ($stmt) {
            echo '<script> alert("Update สำเร็จ !!!") </script>';
            header('Refresh:0 url=../profile.php');
        } else {
            echo '<script> alert("อัพเดตไม่ได้ โปรดลองอีกครั้ง") </script>';
        }
    }
} else {
    echo '<script> alert("Update สำเร็จ !!!") </script>';
    header('Refresh:0 url=../profile.php');
}
