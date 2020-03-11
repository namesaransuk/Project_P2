<?php
  //กำหนดให้ IE อ่าน page นี้ทุกครั้ง ไม่ไปเอาจาก cache
  include('php/connect.php');
  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header ("Cache-Control: no-cache, must-revalidate");
  header ("Pragma: no-cache");
  //กำหนดภาษา
  header("content-type: application/x-javascript; charset=utf-8");

  //ค่าที่ถูกส่งมาด้วยจาก AJAX
  $id = $_POST['id'];
  $value = $_POST['value'];
  $class = $_POST['class'];

  //อัปเดทลงฐานข้อมูลที่นี่ //ตัวอย่างคืนค่าที่ส่งมากลับไปแสดงผล
  // $sql = "UPDATE `products` SET `product_code`=NULL,`product_num`='".$_POST['product_num']."',`product_price`='".$_POST['product_price']."' WHERE product_code = '".$_POST['product_code']."'";
  // $stmt = $conn->query($sql);
  echo 'id='.$id.'&value='.$value.'&class='.$class;
?>