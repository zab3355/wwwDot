    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home </a>
        </li>
        <li class="nav-item <?= $section == "HTML" ? "active dropdown" : "" ?>">
          <a class="nav-link dropbtn" href="../tutorials/htmlpage1.php">HTML</a>
        </li>
        <li class="nav-item <?= $section == "CSS" ? "active dropdown" : "" ?>">
          <a class="nav-link dropbtn" href="../tutorials/CSSPage1.php">CSS</a>
        </li>
        <li class="nav-item <?= $section == "JavaScript" ? "active dropdown" : "" ?>">
          <a class="nav-link" href="../tutorials/JavaScriptPage1.php">JavaScript</a>
        </li>
        <li class="nav-item <?= $section == "History" ? "active dropdown" : "" ?>">
          <a class="nav-link" href="../tutorials/HistoryPage1.php">History</a>
        </li>
        <li class="nav-item <?= $section == "About Us" ? "active dropdown" : "" ?>">
          <a class="nav-link" href="../tutorials/AboutUs.php">About Us</a>
        </li>
      </ul>
      <?php require_once "../includes/searchBar.php"; ?>
    </div>
  </nav>
</header>