<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../media/wwwdotlogo.png">

    <title>Javascript Tutorial</title>

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
              <a class="nav-link <?= $title == "hsPage1" ? "active" : "" ?>" href="HistoryPage1.php">As We May Think</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "hsPage2" ? "active" : "" ?>" href="HistoryPage2.php">First Steps</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "hsPage3" ? "active" : "" ?>" href="HistoryPage3.php">Further Implementation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "hsPage4" ? "active" : "" ?>" href="HistoryPage4.php">Globalization</a>
            </li>
   
            <li class="nav-item">
              <a class="nav-link <?= $title == "hsPage5" ? "active" : "" ?>" href="HistoryPage5.php">Current Day</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "hsPage6" ? "active" : "" ?>" href="HistoryPage6.php">Quiz</a>
            </li>
          </ul>
        </nav>