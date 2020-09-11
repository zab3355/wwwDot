<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel='shortcut icon' href="media/wwwdotlogo.png" type='image/x-icon'/> 

    <title>WWWDot Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
      
   <!-- Custom styles for this template -->
   <link href="css/style.css?ver=1.0.3" type="text/css" rel="stylesheet" />
   
  </head>

  <body>
     
    <!-- Custom Javascript -->
    <script src="javascript/control.js"></script>

    <!-- Navigation -->
    <?php require 'includes/nav.php'; ?>
      
    <!-- Navigation Javascript -->
    <script src="javascript/nav.js"></script>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4" style="background: url(media/homepagepic1.jpg)">
        <h1 class="display-3">How to build a website!</h1>
        <p class="openingParagraph"> Welcome to WWWDot! This website will provide you access to tutorials in HTML, CSS and Javascript geared toward teaching the basics of 
									 website development and help you toward the end goal of creating your own webpage. There are a series of tutorial pages for each
									 language and a quiz at the end for you to review what you have learned</p>
        <a href="tutorials/AboutUs.php" class="btn btn-primary btn-lg">Find out more!</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="media/HTMLcircle.png" alt="">
            <div class="card-body">
              <h4 class="card-title">HTML</h4>
              <p class="card-text">HTML is the content of your page. Here you will learn how to structure an html document to convey the information you want.</p>
            </div>
            <div class="card-footer">
              <a href="tutorials/htmlpage1.php" class="btn btn-primary">Start Tutorial!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="media/CSScircle.png" alt="">
            <div class="card-body">
              <h4 class="card-title">CSS</h4>
              <p class="card-text">CSS lets you add some style to your webpage. Here you will learn how to edit the color, position and dimensions of your content.</p>
            </div>
            <div class="card-footer">
              <a href="tutorials/CSSPage1.php" class="btn btn-primary">Start Tutorial!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="media/JScircle.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Javascript</h4>
              <p class="card-text">Javascript is used to make your webpage interactive and dynamic. Here you will learn how to create functions that can do calculations or alter your webpage.</p>
            </div>
            <div class="card-footer">
              <a href="tutorials/JavaScriptPage1.php" class="btn btn-primary">Start Tutorial!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="media/Historycircle.png" alt="">
            <div class="card-body">
              <h4 class="card-title">History</h4>
              <p class="card-text">From the first wireless connection to the instantiation of the internet as we know it. Here you will learn the people and systems that went in to creating the World Wide Web.</p>
            </div>
            <div class="card-footer">
              <a href="tutorials/HistoryPage1.php" class="btn btn-primary">Read More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
