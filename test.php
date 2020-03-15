 <?php session_start(); ?>


 <?php
  if (isset($_SESSION['id'])) {
  } else {
    echo '<script> alert("กรุณาล็อกอินเข้าสู่ระบบอีกครั้ง") </script>';
    header('Refresh:0 url=index.php');
  }
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta http-equiv=Content-Type content="text/html; charset=tis-620">
   <title>ตะกร้าสินค้า</title>
   <!-- bootstrap -->

   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Bootstrap core CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

   <!-- ===========================css============================ -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css/c_design.css">
   <!-- <link rel="stylesheet" type="text/css" href="css/selectcart.css"> -->
   <!-- ============================extention=========================== -->
   <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

   <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

 </head>


 <body>

   <select id="s_a" onchange="do_selectchange(this)">
     <option value="a1">a1</option>
     <option value="a2">a2</option>
     <option value="a2">a2</option>
   </select>
   <select id="s_b" onchange="do_selectchange(this)">
     <option value="b1">b1</option>
     <option value="b2">b2</option>
     <option value="b2">b2</option>
   </select>
   <script type="text/javascript">
     function Inint_AJAX() {

       try {
         return new ActiveXObject("Msxml2.XMLHTTP");
       } catch (e) {} //IE

       try {
         return new ActiveXObject("Microsoft.XMLHTTP");
       } catch (e) {} //IE

       try {
         return new XMLHttpRequest();
       } catch (e) {} //Native Javascript

       alert("XMLHttpRequest not supported");

       return null;

     };

     function do_selectchange(sel) {
       var query = 'id=' + sel.id + '&value=' + sel.value; //ค่าที่ส่งมาใช้เพื่อส่งไปอัปเดท
       var req = Inint_AJAX();
       req.onreadystatechange = function() {
         if (req.readyState == 4) {
           if (req.status == 200) {
             alert(req.responseText); //เมื่ออัปเดทเรียบร้อย (อาจแสดงข้อความว่าอัปเดทเรียบร้อยก็ได้)
           };
         };
       };
       req.open("POST", "t1.php"); //สร้าง connection
       req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // set Header
       req.send(query); //ส่งค่า
     }
   </script>



   <!-- Script -->
   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

   <!-- JQuery -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

   <script src="script.js"></script>



   <script>
     $(document).ready(function() {
       $('[data-toggle="popover"]').popover();
     });
   </script>

   <script>
     $(document).ready(function() {
       $('[data-toggle="tooltip"]').tooltip();
     });
   </script>

   <script>
     new WOW().init();
   </script>

   <script src="js/radio.js"></script>

 </body>

 </html>