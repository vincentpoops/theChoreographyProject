<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
	  <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="js/logout.js"></script>
  </head>

  <body>
  	<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="home.php">Home</a>
        <a class="navbar-brand" href="about.php">About</a>
        <a class="navbar-brand" href="">Contact</a>
<?php

session_start();

if (isset($_SESSION['user'])){
  print "<a class='navbar-brand' href='new.php'>New Listing</a><a class='btn btn-primary' href='logout.php' onclick='return log();'>Logout</a>";
}
else{
  print "<a class='navbar-brand' href='login.php'>Sign In</a><a class='btn btn-primary' href='register.php'>Register</a>";
}

?>
      </div>
    </nav>

    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</h2>
            <br>
            <form>
              <div class="form-row" style="justify-content: center;">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                </div>
              </div>
              <br>
              <div class="form-row" style="justify-content: center;">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="E-mail">
                </div>
              </div>
              <br>
              <div class="form-row" style="justify-content: center;">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <textarea class="form-control form-control-lg" rows="4" placeholder="Message"></textarea>
                </div>
              </div>
              <br>
              <div class="form-row" style="justify-content: center;">
                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <div>
      </div>    
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center" style="height: 20px;">
      <div class="overlay"></div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="about.php">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="contact.php">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <br>
            <p class="text-muted small mb-4 mb-lg-0">&copy; TCP 2018. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
