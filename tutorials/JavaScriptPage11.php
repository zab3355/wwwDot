<?php 
	$title = "jsPage11";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<div id="after">
<p id = "number_correct"></p>
<p id = "review_correct"></p>
<input class = "btn" type = "button" value = "HomePage" onclick = "window.location='../index.php';"/>
<input class = "btn" type = "button" value = "Try again?" onclick ="re_set();"/>
</div>

<h1>CSS Quiz</h1>


<form id = "quiz" name = "quiz">

<ol>
<li id="question1">How to insert the External Style sheet?<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="css/text" href="mystyle.css<br>
<input type = "radio" name = "choose1" value = "1"/>link rel="stylesheet" type="text/css" href="mystyle.css<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="text/css"<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="text/css" href="mystyle"<br><br>
</li>

<li id="question2">Which one is right format for color of RGB?<br>
<input type = "radio" name = "choose2" value = "0"> RGB(0, 100%, 50%)<br>
<input type = "radio" name = "choose2" value = "0"> #FF0000<br>
<input type = "radio" name = "choose2" value = "0"> RGB(green)<br>
<input type = "radio" name = "choose2" value = "1">RGB(255,0,0)<br><br>
</li>

<li id="question3">How to set background image if your CSS file on desktop 
and the image call air.jpg in a folder call background which also on desktop? <br>
<input type = "radio" name = "choose3" value = "0">background-image:(href=”background/air.jpg “) <br>
<input type = "radio" name = "choose3" value = "0">background-image:url(“air.jpg”)<br>
<input type = "radio" name = "choose3" value = "0">background-image:air.jpg<br>
<input type = "radio" name = "choose3" value = "1">None above <br><br>
</li>

<li id="question4">What is different between margin and padding for CSS?<br>
<input type = "radio" name = "choose4" value = "0">Just name different<br>
<input type = "radio" name = "choose4" value = "1">Margin is created space for element which is outside of border, padding is created space for element which is inside of border<br>
<input type = "radio" name = "choose4" value = "0">Margin is created space for element which is inside of border, padding is created space for element which is outside of border<br>
<input type = "radio" name = "choose4" value = "0">None above<br><br>
</li>

<li id="question5">There one is <b>wrong</b> for describe the width and height?<br>
<input type = "radio" name = "choose5" value = "0">Width and height can set percentage<br>
<input type = "radio" name = "choose5" value = "1">Width and height can’t set to auto.<br>
<input type = "radio" name = "choose5" value = "0">width:10px;<br>
<input type = "radio" name = "choose5" value = "0">None above.<br><br>
</li>

<li id="question6">How to make space to first line of a paragraph?<br>
<input type = "radio" name = "choose6" value = "0">letter-space :10px <br>
<input type = "radio" name = "choose6" value = "0"> margin-right:10px<br>
<input type = "radio" name = "choose6" value = "1">text-indent:10px <br>
<input type = "radio" name = "choose6" value = "0">text-align: center<br><br>
</li>

<li id="question7">How to delete the underline for a text?<br>
<input type = "radio" name = "choose7" value = "1">Text-decoration: none<br>
<input type = "radio" name = "choose7" value = "0">Text-decoration: no-underline<br>
<input type = "radio" name = "choose7" value = "0">Just delete the text which have underline<br>
<input type = "radio" name = "choose7" value = "0">No-underline<br><br>
</li>

<li id="question8">Which <b>not include</b> to the four link state?<br>
<input type = "radio" name = "choose8" value = "0">a: link<br>
<input type = "radio" name = "choose8" value = "1">a: move<br>
<input type = "radio" name = "choose8" value = "0">a:active<br>
<input type = "radio" name = "choose8" value = "0">a: hover <br><br>
</li>

<li id="question9">I don't want any thing around my Picture, what should I do?<br>
<input type = "radio" name = "choose9" value = "0">clear:left<br>
<input type = "radio" name = "choose9" value = "0">clear:all<br>
<input type = "radio" name = "choose9" value = "1">clear:both<br>
<input type = "radio" name = "choose9" value = "0">both:clear<br><br>
</li>

<li id="question10">Is navigation bar a link of list?<br>
<input type = "radio" name = "choose10" value = "1">True<br>
<input type = "radio" name = "choose10" value = "0">False<br>
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
