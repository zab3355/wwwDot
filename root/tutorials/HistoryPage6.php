<?php 
	$title = "hsPage6";
    $section ="History";
	require_once "../includes/historyHeader.php"; 
?>

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<div id="after">
<p id = "number_correct"></p>
<p id = "review_correct"></p>
<input class = "btn" type = "button" value = "HomePage" onclick = "window.location='../index.php';"/>
<input class = "btn" type = "button" value = "Try again?" onclick ="re_set();"/>
</div>

<h1>History Quiz</h1>


<form id = "quiz" name = "quiz">

<ol>
<li id="question1">What's Vannevar Bush's paper called?<br>
<input type = "radio" name = "choose1" value = "1"/>As We May Think<br>
<input type = "radio" name = "choose1" value = "0"/>Thinking for the Web<br>
<input type = "radio" name = "choose1" value = "0"/>As We May Read<br>
<input type = "radio" name = "choose1" value = "0"/>Step by Step Guide for How we Create the Internet<br><br>
</li>

<li id="question2">What is closest to a Memex nowadays?<br>
<input type = "radio" name = "choose2" value = "0">Router<br>
<input type = "radio" name = "choose2" value = "0">A Server<br>
<input type = "radio" name = "choose2" value = "0">Switch<br>
<input type = "radio" name = "choose2" value = "1">Database<br><br>
</li>

<li id="question3">What term did Vannevar Bush Create? <br>
<input type = "radio" name = "choose3" value = "0">HTML <br>
<input type = "radio" name = "choose3" value = "1">Hypertext<br>
<input type = "radio" name = "choose3" value = "0">CSS<br>
<input type = "radio" name = "choose3" value = "0">None of the Above<br><br>
</li>

<li id="question4">What was the name ARPANet based off of?<br>
<input type = "radio" name = "choose4" value = "0">A meme<br>
<input type = "radio" name = "choose4" value = "1">Advanced Research Projects Agency of United States<br>
<input type = "radio" name = "choose4" value = "0">Association Representing Presentation Alumni<br>
<input type = "radio" name = "choose4" value = "0">The term Internet of Things<br><br>
</li>

<li id="question5">What <b>two</b> colleges tried to make the first wireless connection?<br>
<input type = "radio" name = "choose5" value = "0">MIT and RIT<br>
<input type = "radio" name = "choose5" value = "1">UCLA and UC Berkley<br>
<input type = "radio" name = "choose5" value = "0">Curry College and Mercy College<br>
<input type = "radio" name = "choose5" value = "0">Meme Machine University and the Cool College<br><br>
</li>

<li id="question6">How many versions of HTML are there?<br>
<input type = "radio" name = "choose6" value = "0">1<br>
<input type = "radio" name = "choose6" value = "0">21<br>
<input type = "radio" name = "choose6" value = "1">5<br>
<input type = "radio" name = "choose6" value = "0">4<br><br>
</li>

<li id="question7">How did Tim Berners Lee write for the World Wide Web in 1989?<br>
<input type = "radio" name = "choose7" value = "1">The first web client server<br>
<input type = "radio" name = "choose7" value = "0">The first webpage<br>
<input type = "radio" name = "choose7" value = "0">The first web browser<br>
<input type = "radio" name = "choose7" value = "0">He didn't write anything<br><br>
</li>

<li id="question8">What country made the <b>first</b> wireless transatlantic connection to America?<br>
<input type = "radio" name = "choose8" value = "0">America<br>
<input type = "radio" name = "choose8" value = "1">England<br>
<input type = "radio" name = "choose8" value = "0">France<br>
<input type = "radio" name = "choose8" value = "0">Germany<br><br>
</li>

<li id="question9">What system caused many common people to start using the Internet?<br>
<input type = "radio" name = "choose9" value = "0">Video Games<br>
<input type = "radio" name = "choose9" value = "0">Memes<br>
<input type = "radio" name = "choose9" value = "1">Email<br>
<input type = "radio" name = "choose9" value = "0">Online College Programs<br><br>
</li>

<li id="question10">Is the Internet the same as the World Wide Web?<br>
<input type = "radio" name = "choose10" value = "0">True<br>
<input type = "radio" name = "choose10" value = "1">False<br>
</li>
</ol>

<input id = "button" type = "button" value = "Submit" onclick = "check(); location.href='#topofQuiz';">

</form>

     
        </main>
      </div>
    </div>

    <!-- Footer -->
    <?php require '../includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="../vendor/js/popper.min.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
	 <script src="../javascript/quiz.js"></script>
  </body>
</html>