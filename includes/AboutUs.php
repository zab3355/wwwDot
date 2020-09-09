<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../media/wwwdotlogo.png">

    <title>About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jsStyle.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="AboutUs.php">About Us</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AboutUs.php">wwwDot</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
			<h1 style="text-align:center;margin-bottom:2%;">WWWDot</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Who we are</h2>
              <p>You might be wondering, what is wwwDot? </p>
              <p>The idea of programming and web design can be intimidating when you are first exposed to it, but that is why we have created this website. We are a group of developers looking to provide a smooth transition into web design for anyone trying attempting their first foray into the business. </p>
			  <h2>What information do we provide?</h2>
              <p>We provide tutorials in HTML, CSS and JavaScript, which are the main three languages for including information on a webpage. The tutorials will walk you through the general use for each language and starts at the extreme basics, building through to the more advanced portions that are regularly used when programming.</p>
            </div>
          </div>
		  
		  <h1 id="employees" style="text-align:center; margin-bottom: 5%;">WWWDot Employees</h1>
          
          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Zach.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Zach Brown Picture">
              <h4><a href="ZachBio.php">Zach Brown</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Matt.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Matt Picture">
              <h4><a href="MattBio.php">Matthew Marchinetti</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Abby.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Abby Picture">
              <h4><a href="AbbyBio.php">Abby Tran</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Feng.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Feng Picture">
              <h4><a href="FengBio.php">Feng Lin</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Mo.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Lizzie Picture">
              <h4><a href="MoBio.php">Mo Choudhury</a></h4>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="../media/Lizzie.jpg" width="200" height="400" class="img-fluid rounded-circle" alt="Mo Picture">
              <h4><a href="LizzieBio.php">Elizabeth Codick</a></h4>
            </div>
          </section>

        <!-- Footer -->
        <?php require '../includes/footer.php'; ?>
            
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="../vendor/js/popper.min.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
  </body>
</html>
