<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../media/wwwdotlogo.png">

<title><?= $title ?> | CSS</title>

<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/jsStyle.css" rel="stylesheet" type="text/css">
<link href="../css/quizPageStyle.css" rel="stylesheet" type="text/css">
</head>

<body id="topofQuiz">


    <?php require '../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link <?= $title == "Introduction" ? "active" : "" ?>" href="CSSPage1.php">Introduction <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == "Color" ? "active" : "" ?>" href="CSSPage2.php">Color</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == "Background" ? "active" : "" ?>" href="CSSPage3.php">Background</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == "Margin and Padding" ? "active" : "" ?>" href="CSSPage4.php">Margin/Padding For CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $title == "Height and Width" ? "active" : "" ?>" href="CSSPage5.php">Height and Width</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link <?= $title == "Text" ? "active" : "" ?>" href="CSSPage6.php">Text</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link <?= $title == "Link" ? "active" : "" ?>" href="CSSPage7.php">Link</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link <?= $title == "Display" ? "active" : "" ?>" href="CSSPage8.php">Display</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link <?= $title == "Float and Clear" ? "active" : "" ?>" href="CSSPage9.php">Float and Clear</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link <?= $title == "Navigation" ? "active" : "" ?>" href="CSSPage10.php">Navigation Bars</a>
        </li>

		
        <li class="nav-item">
          <a class="nav-link <?= $title == "Quiz" ? "active" : "" ?>" href="CSSQuiz.php">Quiz</a>
        </li>
      </ul>

    </nav>