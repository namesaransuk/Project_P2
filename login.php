<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign in And Sign up</title>
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
  <link rel="stylesheet" type="text/css" href="css/sign.css">
  <link rel="stylesheet" type="text/css" href="css/sign_tab.css">
  <!-- ============================extention=========================== -->
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

  <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

  <style>
    i:active {
      color: pink;
      background-color: pink;
    }

    input:active {
      color: pink;
    }
  </style>

</head>


<body>
  <!-- ================ php login ================ -->
  <?php

  include('php/connect.php'); // ดึงไฟล์ฐาน database มาใช้

  if (isset($_POST['submit'])) {
    @$username = $_POST['username'];
    @$password = $_POST['password'];

    $sql = "SELECT * FROM `member` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' ";
    $result = $conn->query($sql);


    if ($result->rowCount() > 0) {
      $row = $result->fetch(PDO::FETCH_ASSOC);
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['firstname'];
      $_SESSION['lname'] = $row['lastname'];
      $_SESSION['img'] = $row['picture'];
      $_SESSION['uname'] = $row['username'];
      $_SESSION['pword'] = $row['password'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['status'] = $row['status'];

      if ($_SESSION['status'] == "admin") {
        header('location:Admin/dashboard.php');
      } else {
        header('location:index.php'); // ถ้าถูกต้อง จะรีเฟรชและกลับไปที่หน้า Home
      }
    } else {
      echo '<script> alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>'; // หากผิด จะทำการกรอกใหม่อีกครั้ง
    }
  }
  session_write_close();

  //echo "<body onload=\"window.alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง');return history.go(-1)\">";

  ?>


  <!-- ================ php register ================ -->
  <?php

  include('php/connect.php');

  if (isset($_POST['r_submit'])) {

    $temp = explode('.', $_FILES['fileUpload']['name']); // อัพโหลดรูป
    $newName = round(microtime(true)) . '.' . end($temp); // เปลี่ยนชื่อรูปตามเวลาในเครื่อง
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' . $newName)) {

      $sql = "INSERT INTO `member` (`id`, `firstname`, `lastname`, `username`, `password`, `picture`, `email`) /*จัดเก็บข้อมูลเข้า database*/
                        VALUES (NULL, '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['username'] . "', '" . $_POST["password"] . "', '" . $newName . "', '" . $_POST['email'] . "');";

      $result = $conn->query($sql); //เชื่อมต่อ sql database

      if ($result) { // ตามสคริป
        echo '<script> alert("สมัครสมาชิกสำเร็จ กรุณาเข้าสู่ระบบเพื่อสั่งสินค้า !!") </script>';
        header('Refresh:0 url=login.php');
      } else {
        echo '<script> alert("เกิดข้อผิดพลาด โปรดลองสมัครใหม่อีกครั้ง !!") </script>';
      }
    }
  }

  ?>

  <!-- ================================================================================ -->

  <!-- header -->
  <?php include('Component/headerComponent.php'); ?>


  <div class="container mt-5 mb-5">
    <div class="col-sm-8 mx-auto">

      <!-- <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabMD" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="signin-tab-md" data-toggle="tab" href="#signin-md" role="tab" aria-controls="signin-md" aria-selected="true">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="signup-tab-md" data-toggle="tab" href="#signup-md" role="tab" aria-controls="signup-md" aria-selected="false">สมัครสมาชิก</a>
        </li>
      </ul>
      <div class="tab-content card card-image pt-5" id="myTabContentMD">
        <div class="tab-pane fade show active" id="signin-md" role="tabpanel" aria-labelledby="signin-tab-md">
          <form action="" method="POST" enctype="multipart/form-data">
            <h2 class="text-center mb-4">เข้าสู่ระบบ</h2>
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">ชื่อผู้ใช้</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">รหัสผ่าน</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="ml-auto">
                <a href="#" style="text-decoration: none;">
                  <p style="color:red; margin-right:15px; font-size:15px">ลืมรหัสผ่าน ?</p>
                </a>
              </div>
            </div>
            <div class="text-center">
              <input type="submit" name="submit" class="btn purple-gradient" style="border-radius: 2em" value="เข้าสู่ระบบ">
              <hr>
              <h4>หรือ</h4>
              <h5>เข้าสู่ระบบด้วย</h5>
              <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Facebook"><img src="img/si-facebook.png" alt="fb" style="width:250px"></a><br>
              <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Google"><img src="img/si-google.png" alt="gg" style="width:250px"></a><br>
              <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Twitter"><img src="img/si-twitter.png" alt="tw" style="width:250px"></a><br>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="signup-md" role="tabpanel" aria-labelledby="signup-tab-md">
          <form action="" name="frg" method="POST" enctype="multipart/form-data" onsubmit="return Repassword()">
            <h2 class="text-center mb-4">สมัครสมาชิก</h2>
            <div class="form-group row">
              <label for="fullname" class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
              <div class="input-group col-sm-10">
                <input type="text" name="firstname" class="form-control" placeholder="ชื่อ" required>
                <input type="text" name="lastname" class="form-control" placeholder="นามสกุล" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="sex" class="col-sm-2 col-form-label">เพศ</label>
              <div class="col-sm-10">
                <select class="form-control" required>
                  <option>เลือกเพศ</option>
                  <option>ชาย</option>
                  <option>หญิง</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">ชื่อผู้ใช้</label>
              <div class="col-sm-10">
                <input type="text" name="username" class="form-control" placeholder="ใช้เข้าสู่ระบบ" id="username" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">รหัสผ่าน</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" placeholder="รหัสผ่านต้องมีอย่างน้อย 8-16 ตัว" id="password" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input type="password" name="rpassword" class="form-control" placeholder="ยืนยันรหัสผ่านให้ตรงกัน" id="rpassword" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="fileUpload" class="col-sm-2 col-form-label">รูปโปรไฟล์</label>
              <div class="custom-file col-sm-9 ml-3">
                <input type="file" class="custom-file-input form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
                <label class="custom-file-label" for="fileUpload">เลือกรูปภาพ</label>
              </div>
            </div>

            <div class="form-group-row text-center">
              <figure class="figure">
                <img src="img/img_avatar3.png" id="imgUpload" style="width:200px;" class="rounded" alt="">
                <figcaption class="figure-caption">เลือกรูปเพื่อใช้เป็นโปรไฟล์ (หากไม่เลือกจะใช้รูปตั้งต้นเป็นโปรไฟล์)</figcaption>
              </figure>
            </div>

            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">E-mail</label>
              <div class="input-group col-sm-10">
                <input type="email" name="email" class="form-control" id="email" required>
              </div>
            </div>
            <div class="text-center">
              <input type="submit" name="r_submit" class="btn aqua-gradient" style="border-radius: 2em" value="สมัครสมาชิก">
            </div>
        </div>
        </form>
      </div> -->

    </div>
  </div>


  <div class="container mt-5 mb-5">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-group text-center">
              <img src="img/2.png" class="" width="450" alt="">
              <br>
              ยังไม่มีบัญชีใช่ไหมคลิกที่ <a href="#!">สมัครสมาชิก</a> สิ
            </div>
          </div>
          <div class="col">
            <form action="" method="post">
              <div class="container col-sm-10">
                <h2 class="mb-5 mt-2"><b>Sign in BON'iS Cake</b></h2>
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" name="username" id="username" class="form-control form-control-sm">
                  <label for="user">ชื่อผู้ใช้</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" name="password" id="password" class="form-control form-control-sm validate">
                  <label for="password" data-error="wrong" data-success="right">รหัสผ่าน</label>
                </div>
                <div class="text-center">
                  <input type="submit" name="submit" class="btn purple-gradient" style="border-radius: 2em" value="เข้าสู่ระบบ">
                  <hr>
                  <h4>หรือ</h4>
                  <h5>เข้าสู่ระบบด้วย</h5>
                  <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Facebook"><img src="img/si-facebook.png" alt="fb" style="width:200px"></a><br>
                  <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Google"><img src="img/si-google.png" alt="gg" style="width:200px"></a><br>
                  <a href="#" data-toggle="popover" data-trigger="hover" data-content="เข้าสู่ระบบด้วยบัญชี Twitter"><img src="img/si-twitter.png" alt="tw" style="width:200px"></a><br>
                </div>
              </div>
            </form>
          </div>
        </div>
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

  <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    function readURL(input) { // ตอนอัพโหลด แสดงให้ขึ้นรูป
      var reader = new FileReader();

      reader.onload = function(e) {
        console.log(e.target.result)
        $('#imgUpload').attr('src', e.target.result).width(200)
      }

      reader.readAsDataURL(input.files[0]);
    }
  </script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
    });
  </script>

  <script src="script.js"></script>
  <script src="js/repass.js"></script>

</body>

</html>