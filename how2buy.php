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
    <link rel="stylesheet" type="text/css" href="css/how2buy.css">
    <link rel="stylesheet" type="text/css" href="css/c_design.css">
    <!-- ============================extention=========================== -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link rel="icon" type="image/png" href="img/Cake_ChocolateCake.png">

</head>


<body>

    <!-- cart -->
    <?php include("Component/cartComponent.php") ?>
    <!-- header -->
    <?php include("Component/headerComponent.php") ?>

    <div class="container mt-5 mb-5">

        <div class="card card-cascade narrower">
            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue-gradient">
                <!-- Title -->
                <h5 class="card-header-title">สินค้าแนะนำ</h5>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/palalax.png" alt="First slide">
                        </div>
                        <div class="carousel-item mx-auto">
                            <img class="d-block w-100" src="images/palalax1.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/palalax2.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/palalax3.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/palalax4.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/palalax5.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="background-color:hotpink; size:10px" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" style="background-color:hotpink" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

    </div>


    <!-- <div class="sp-slideshow mt-5 mb-5">

        <input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
        <label for="button-1" class="button-label-1"></label>

        <input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
        <label for="button-2" class="button-label-2"></label>

        <input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
        <label for="button-3" class="button-label-3"></label>

        <input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
        <label for="button-4" class="button-label-4"></label>

        <input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
        <label for="button-5" class="button-label-5"></label>

        <input id="button-6" type="radio" name="radio-set" class="sp-selector-6" />
        <label for="button-6" class="button-label-6"></label>

        <label for="button-1" class="sp-arrow sp-a1"></label>
        <label for="button-2" class="sp-arrow sp-a2"></label>
        <label for="button-3" class="sp-arrow sp-a3"></label>
        <label for="button-4" class="sp-arrow sp-a4"></label>
        <label for="button-5" class="sp-arrow sp-a5"></label>
        <label for="button-6" class="sp-arrow sp-a6"></label>

        <div class="sp-content">
            <div class="sp-parallax-bg"></div>
            <ul class="sp-slider clearfix">
                <li><img src="" alt="image01" /></li>
                <li><img src="" alt="image02" /></li>
                <li><img src="" alt="image03" /></li>
                <li><img src="" alt="image04" /></li>
                <li><img src="" alt="image05" /></li>
            </ul>
        </div>

    </div> -->

    <?php include('Component/notiComponent.php'); ?>

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

</body>

</html>