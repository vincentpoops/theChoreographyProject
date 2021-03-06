<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <title>About Us</title>

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
        <a class="navbar-brand" href="contact.php">Contact</a>
<?php

session_start();

if (isset($_SESSION['user'])){
  print "<a class='navbar-brand' href='new.php'>New Listing</a><a class='btn btn-primary' href='php/logout.php' onclick='return log();'>Logout</a>";
}
else{
  print "<a class='navbar-brand' href='login.php'>Sign In</a><a class='btn btn-primary' href='register.php'>Register</a>";
}

?>
      </div>
    </nav>

  	<!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-18.gif');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>About Us</h2>
            <p class="lead mb-0">The goal of our project is to construct an online library for browsing shared choreography videos by music genre and dance style. The concept of dance is something that we deeply care about since it provided us a community at UT through which we met each other. We believe that the art of dance has the power to bring people from different backgrounds together, and creating an online sharing space for choreography videos would help dancers branch out and learn more about different dance styles, as well as to expand upon the style(s) they already like. </p>
          </div>
          
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-17.gif');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <p class="lead mb-0">Our online choreography library would allow for easy browsing by end users whose goals may range from finding videos that match their preferred dance styles to branching out to unknown styles. As dancers who are constantly growing, we understand the desire to seek inspiration for future dance performances and projects. Our choreography library would offer a resource that satisfies this need, as well as create an online community through which dancers can learn from each other.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">Who We Are</h2>
        <p class="font-weight-light mb-0">We're both dancers on UT FSA's Modern team. For full links to our recent performances check out <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=TOYRDNqWNvI" target="_blank">here</a> and <a style="text-decoration: none;" href="https://www.youtube.com/watch?v=WSsMd8fdjtI" target="_blank">here</a><br><br><br><br></p>
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="https://www.biography.com/.image/t_share/MTU0OTkwNDUxOTQ5MDUzNDQ3/kanye-west-attends-the-christian-dior-show-as-part-of-the-paris-fashion-week-womenswear-fall-winter-2015-2016-on-march-6-2015-in-paris-france-photo-by-dominique-charriau-wireimage-square.jpg" alt="">
              <h5>Theresa Sim</h5>
              <p class="font-weight-light mb-0">I'm a 5th year ChE. I started studying ballet at the age of 5 and branched out to modern hip hop styles in college. I had a few dance projects in high school, but I didn't start any choreography projects until 3 years ago. I'm always searching for ways to challenge and improve my skillset as a dancer, especially in the presence of fellow dancers.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="https://www.biography.com/.image/t_share/MTQ3NTI2OTA4NzY5MjE2MTI4/drake_photo_by_prince_williams_wireimage_getty_479503454.jpg" alt="">
              <h5>Vincent Liu</h5>
              <p class="font-weight-light mb-0">I'm a 3rd year BME. I had some fun 'dance' projects while I was in high school but nothing really serious. I didn't really start dancing for real until college, so it's never too late to start. Catch me @ dance classes around UT because I'm all about personal growth and improving myself as a dancer.</p>
            </div>
          </div>
        </div>
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
          <div class="col-lg-12 h-100 text-center text-lg-center my-auto">
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
                <a href="faq.php">FAQ</a>
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