<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Big Picture - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- font_section -->
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Poor+Story&amp;subset=korean" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <style media="screen">
      body{

      }
    </style>



  </head>

  <body>

    <?php


      $db = mysqli_connect("192.168.61.141","root","misozium23","aca_db","3306");
      if($db)
      {
<<<<<<< HEAD
        echo " 성공------";
      }esle{
        echo "실패!!!!!!!kjkjkjkj";
=======
         echo "<script>alert(\"DB 연동 성공\");</script>";
      }else{
         echo "<script>alert(\"DB 연동 실패\");</script>";
>>>>>>> 802bc37d481207e8a4da54f568dc0ace9627dc35
      }

     ?>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
      <div class="container">
        <a class="navbar-brand" href="index.html">학 원 이 름</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="about/index.html">About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="LOGIN/Login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="mt-5">학원이름</h1>
            <p>학원설명 및 소개할수있는말</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
