<?php
  //กำหนดให้ IE อ่าน page นี้ทุกครั้ง ไม่ไปเอาจาก cache
  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header ("Cache-Control: no-cache, must-revalidate");
  header ("Pragma: no-cache");
  //กำหนดภาษา
  header("content-type: application/x-javascript; charset=utf-8");

  //ค่าที่ถูกส่งมาด้วยจาก AJAX
  $id = $_POST['id'];
  $value = $_POST['value'];

  //อัปเดทลงฐานข้อมูลที่นี่ //ตัวอย่างคืนค่าที่ส่งมากลับไปแสดงผล
  echo 'id='.$id.'&value='.$value;
?>