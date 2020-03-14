<?php
  //กำหนดให้ IE อ่าน page นี้ทุกครั้ง ไม่ไปเอาจาก cache
  include('connect.php');
  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header ("Cache-Control: no-cache, must-revalidate");
  header ("Pragma: no-cache");
  //กำหนดภาษา
  header("content-type: application/x-javascript; charset=utf-8");

  //ค่าที่ถูกส่งมาด้วยจาก AJAX
  $id = $_POST['id'];
  $product_code = $_POST['product_code'];
  $product_num = $_POST['product_num'];

  //อัปเดทลงฐานข้อมูลที่นี่ //ตัวอย่างคืนค่าที่ส่งมากลับไปแสดงผล
  // echo 'id='.$id.'&product_code='.$product_code.'&product_num='.$product_num;
  echo "อัพเดตสินค้าเป็น <b>$product_num</b> ชิ้น เรียบร้อยแล้ว";
  $sql = "UPDATE `products` SET `product_num`='$product_num' WHERE product_code = '$product_code'";
  $stmt = $conn->query($sql);
// echo '<div class="alert alert-success" role="alert">
// A simple success alert—check it out!
// </div>';
