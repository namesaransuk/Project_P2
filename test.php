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

   <?php
    include("php/connect.php");
    $sql = "SELECT * FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>

   <!-- header -->
   <?php include("Component/headerComponent.php") ?>


   <div class="container mt-5 mb-5">
     <div class="card">
       <div class="card-body">

         
       </div>
     </div>
   </div>


   <!-- Footer -->
   <?php include("Component/footerComponent.php") ?>
   <!-- Footer -->



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