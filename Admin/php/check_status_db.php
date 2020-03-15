<?php
include('../../php/connect.php');
$sql = "INSERT INTO `order`(`o_id`, `o_number`, `o_date`, `o_detail`, `o_delivery`) VALUES (NULL,'".$_POST['o_number']."','".$_POST['o_date']."','".$_POST['o_detail']."','".$_POST['o_delivery']."')";
$stmt = $conn->query($sql);

if ($stmt) {
    echo '<script> alert("เพิ่มข้อมูลแล้ว !!") </script>';
    header('Refresh:0 url=../check_status.php');
} else {
    echo '<script> alert("ระบบผิดพลาด !!") </script>';
    header('Refresh:0 url=../check_status.php');
}
?>