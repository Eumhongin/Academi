<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  <!-- font_section -->
  <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Poor+Story&amp;subset=korean" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/Login.css">





</head>

<body>

  <div class="form" style="margin-top:10%;">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Log In</a></li>
        <li class="tab"><a href="#login">Sign Up</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">


                    <h1>Welcome Back!</h1>

                    <form action="/" method="post">

                      <div class="field-wrap">
                      <label>
                        Email Address<span class="req">*</span>
                      </label>
                      <input type="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                      <label>
                        Password<span class="req">*</span>
                      </label>
                      <input type="password"required autocomplete="off"/>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button class="button button-block"/>Log In</button>

                    </form>

        </div>

        <div id="login">

          <h1>Sign Up for Free</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Get Started</button>

          </form>
        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script type="text/javascript" src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="js/Login.js"></script>

    <!-- 하단 메뉴바 -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
      <div class="container">
        <a class="navbar-brand" href="../index.php">학 원 이 름</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../about/index.html">About
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.html">Login</a>
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


</body>

</html>
