<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <title>Advanced Search</title>

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
    <!-- Dynamic HTML JS -->
    <script src="js/search.js"></script>

  </head>

  <body>
  	<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="home.html">Home</a>
        <a class="navbar-brand" href="#">About</a>
        <a class="navbar-brand" href="contact.html">Contact</a>
<?php

if (isset($_SESSION['user'])){
  print "<a class='navbar-brand' href='new.php'>New Listing</a><button class='btn btn-secondary'>Logout</button>";
}
else{
  print "<a class='navbar-brand' href='login.html'>Sign In</a><a class='btn btn-primary' href='register.php'>Register</a>";
}

?>
      </div>
    </nav>

    <section class="testimonials text-center bg-light">
    	<div class="container">
    		<div class="row no-gutters">
	          <div class="col-lg-12 my-auto showcase-text">
	            <h2>Advanced Search</h2>
	            <br>
	            <form>
		            <div class="form-row" style="justify-content: center;">
		              <div class="col-12 col-md-9 mb-2 mb-md-0">
		                <input type="text" class="form-control form-control-lg" placeholder="Title" onmouseover="messages(0)" onmouseout="messages(4)">
		              </div>
		            </div>
		            <br>
		            <div class="form-row" style="justify-content: center;">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <select class="form-control form-control-lg" onmouseover="messages(1)" onmouseout="messages(4)">
                      <option value="" disabled selected hidden>Genre</option>
                      <option>Classical</option>
                      <option>Country</option>
                      <option>Electronic</option>
                      <option>Hip-hop</option>
                      <option>Pop</option>
                      <option>Rock</option>
                      <option>R&amp;B</option>
                      <option>Other</option>
                  </select>
                </div>
              </div>
              <br>
		            <div class="form-row" style="justify-content: center;">
	                  <div class="col-12 col-md-9 mb-2 mb-md-0">
	                    <select class="form-control form-control-lg" onmouseover="messages(2)" onmouseout="messages(4)">
	                      <option value="" disabled selected hidden>Style</option>
	                      <option>Ballet</option>
	                      <option>Ballroom</option>
	                      <option>Contemporary</option>
	                      <option>Ethnic</option>
	                      <option>Mixed</option>
	                      <option>Urban</option>
	                      <option>Other</option>
	                    </select>
	                  </div>
	                </div>
	                <br>
		            <div class="form-row" style="justify-content: center;">
		              <div class="col-12 col-md-9 mb-2 mb-md-0">
		                <input type="text" class="form-control form-control-lg" placeholder="Shared by" onmouseover="messages(3)" onmouseout="messages(4)">
		              </div>
		            </div>
		            <br>
		            <div class="form-row" style="justify-content: center;">
		              <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;
		              <button type="reset" class="btn btn-secondary">Reset</button>
		            </div>
		        </form>
		        <br><br>
		        <div class="form-row" style="justify-content: center;">
		          <div class="col-12 col-md-9 mb-2 mb-md-0">
		            <input type="text" class="form-control form-control-lg" id="adviceBox" value="Hover over a text box for help" style="text-align:center;border:none;background:none;" readonly>
		          </div>
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
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="about.html">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="contact.html">Contact</a>
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
