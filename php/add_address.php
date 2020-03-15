<?php
session_start();
include('connect.php');

$sql = "UPDATE `member` SET `a_home`='".$_POST['a_home']."',`a_a_home`='".$_POST['a_a_home']."',`a_street`='".$_POST['a_street']."',`a_tumbon`='".$_POST['a_tumbon']."',`a_aumpher`='".$_POST['a_aumpher']."',`a_province`='".$_POST['a_province']."',`a_code`='".$_POST['a_code']."' WHERE id = '".$_SESSION['id']."'";
$stmt = $conn->query($sql);

?>