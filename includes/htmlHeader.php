<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../media/wwwdotlogo.png">

    <title><?= $title ?> | HTML</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jsStyle.css" rel="stylesheet" type="text/css">
	<link href="../css/quizPageStyle.css" rel="stylesheet" type="text/css">
  </head>

  <body id="topofquiz">
      
  
    <?php require '../includes/header.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link <?= $title == "Introduction" ? "active" : "" ?>" href="htmlpage1.php">Introduction <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Text Editors" ? "active" : "" ?>" href="htmlpage2.php">Text Editors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Documents" ? "active" : "" ?>" href="htmlpage3.php">Documents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Headings" ? "active" : "" ?>" href="htmlpage4.php">Headings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Paragraphs" ? "active" : "" ?>" href="htmlpage5.php">Paragraphs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Line Breaks" ? "active" : "" ?>" href="htmlpage6.php">Line Breaks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Links" ? "active" : "" ?>" href="htmlpage7.php">Links</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Images" ? "active" : "" ?>" href="htmlpage8.php">Images</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Quiz" ? "active" : "" ?>" href="HTMLQuiz.php">Quiz</a>
            </li>
          </ul>

        </nav>
