<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../media/wwwdotlogo.png">

    <title><?= $title ?> | Javascript</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jsStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/quizPageStyle.css" rel="stylesheet" type="text/css">
  </head>

  <body id="topofQuiz">

    <!--- Header --->
    <?php require '../includes/header.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link <?= $title == "Introduction" ? "active" : "" ?>" href="JavaScriptPage1.php">Introduction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Console and Comment" ? "active" : "" ?>" href="JavaScriptPage2.php">Console</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Data/Comments" ? "active" : "" ?>" href="JavaScriptPage3.php">Data Types and Comments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Operators" ? "active" : "" ?>" href="JavaScriptPage4.php">Operators</a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link <?= $title == "Variables" ? "active" : "" ?>" href="JavaScriptPage5.php">Variables</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "If/Else" ? "active" : "" ?>" href="JavaScriptPage6.php">If/Else</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Function" ? "active" : "" ?>" href="JavaScriptPage7.php">Functions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Loops" ? "active" : "" ?>" href="JavaScriptPage8.php">Loops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Quiz" ? "active" : "" ?>" href="JavaScriptPage9.php">Quiz</a>
            </li>
          </ul>
        </nav>