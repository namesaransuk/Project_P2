<?php

session_start();
include('connect.php');
$sql = "SELECT * FROM `member` WHERE id = '".$_SESSION['id']."'";
$stmt = $conn->query($sql);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo 'บ้านเลขที่ ' . $result['a_home'] . ' หมู่ที่ ' . $result['a_a_home'] . ' ถ.' . $result['a_street'] . ' ต.' . $result['a_tumbon'] . ' อ.' . $result['a_aumpher'] . ' จ.' . $result['a_province'] . ' รหัสไปรษณีย์ ' . $result['a_code'];

?>