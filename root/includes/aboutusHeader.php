<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../media/wwwdotlogo.png">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jsStyle.css" rel="stylesheet" type="text/css">
      
    <link href="../css/style.css" rel="stylesheet" type="text/css">
  </head>
    
  <body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">About Us</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item <?= $section == "wwwDot" ? "active dropdown" : "" ?>">
          <a class="nav-link dropbtn" href="../tutorials/AboutUs.php">wwwDot</a>
        </li>
        <li class="nav-item <?= $section == "Reference" ? "active dropdown" : "" ?>">
          <a class="nav-link dropbtn" href="../tutorials/Reference.php">Reference</a>
        </li>
      </ul>
      <?php require_once "../includes/searchBar.php"; ?>
    </div>
  </nav>
</header>
          
          <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link <?= $title == "Zach Brown" ? "active" : "" ?>" href="ZachBio.php">Zach Brown</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Matthew Marchinetti" ? "active" : "" ?>" href="MattBio.php">Matthew Marchinetti </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Abby Tran" ? "active" : "" ?>" href="AbbyBio.php">Abby Tran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Feng Lin" ? "active" : "" ?>" href="FengBio.php">Feng Lin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Mo Choudhury" ? "active" : "" ?>" href="MoBio.php">Mo Choudhury</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Elizabeth Codick" ? "active" : "" ?>" href="LizzieBio.php">Elizabeth Codick</a>
            </li>
          </ul>

        </nav>