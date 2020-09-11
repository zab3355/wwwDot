<?php 
	$title = "Quiz";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
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
<li id="question1">What is the proper format for linking an External Style sheet?<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="css/text" href="mystyle.css<br>
<input type = "radio" name = "choose1" value = "1"/>link rel="stylesheet" type="text/css" href="mystyle.css<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="text/css"<br>
<input type = "radio" name = "choose1" value = "0"/>link rel="stylesheet" type="text/css" href="mystyle"<br>
</li>
<li id="question2" >What is the right format for referencing a color using RGB?<br>
<input type = "radio" name = "choose2" value = "0"> RGB(0, 100%, 50%)<br>
<input type = "radio" name = "choose2" value = "0"> #FF0000<br>
<input type = "radio" name = "choose2" value = "0"> RGB(green)<br>
<input type = "radio" name = "choose2" value = "1">RGB(255,0,0)<br>
</li>

<li id="question3">How would you link a picture called "air.jpg" which is located inside of a folder called media in the same directory as your HTML page? <br>
<input type = "radio" name = "choose3" value = "1">background-image:(href=media/air.jpg “) <br>
<input type = "radio" name = "choose3" value = "0">background-image:url(“air.jpg”)<br>
<input type = "radio" name = "choose3" value = "0">background-image:air.jpg<br>
<input type = "radio" name = "choose3" value = "0">None of the above <br>
</li>

<li id="question4">What is difference between margin and padding for CSS?<br>
<input type = "radio" name = "choose4" value = "0">Same stuff, different name<br>
<input type = "radio" name = "choose4" value = "1">Margin sets the space between the element and other elements, while padding sets the space between the element and the items inside<br>
<input type = "radio" name = "choose4" value = "0">Margin sets the space between the element and the items inside, padding sets the space between the element and other elements<br>
<input type = "radio" name = "choose4" value = "0">None of the above<br>
</li>

<li id="question5">What statement is <b>wrong</b> for describing the width and height?<br>
<input type = "radio" name = "choose5" value = "0">Width and height can be set using a percentage<br>
<input type = "radio" name = "choose5" value = "1">Width and height can’t be set to auto.<br>
<input type = "radio" name = "choose5" value = "0">width can be set using px;<br>
<input type = "radio" name = "choose5" value = "0">None of the above.<br>
</li>

<li id="question6">How do you add space before the first line of a paragraph?<br>
<input type = "radio" name = "choose6" value = "0">letter-space :10px <br>
<input type = "radio" name = "choose6" value = "0"> margin-right:10px<br>
<input type = "radio" name = "choose6" value = "1">text-indent:10px <br>
<input type = "radio" name = "choose6" value = "0">text-align: center<br>
</li>

<li id="question7">How do you remove the underline from text?<br>
<input type = "radio" name = "choose7" value = "1">Text-decoration: none<br>
<input type = "radio" name = "choose7" value = "0">Text-decoration: no-underline<br>
<input type = "radio" name = "choose7" value = "0">Just delete the text which have underline<br>
<input type = "radio" name = "choose7" value = "0">no-underline<br>
</li>

<li id="question8">Which is b>not</b> onr of the four states for a link?<br>
<input type = "radio" name = "choose8" value = "0">a: link<br>
<input type = "radio" name = "choose8" value = "1">a: move<br>
<input type = "radio" name = "choose8" value = "0">a:active<br>
<input type = "radio" name = "choose8" value = "0">a: hover <br>
</li>

<li id="question9">How would you remove everything from around your picture? <br>
<input type = "radio" name = "choose9" value = "0">clear:left<br>
<input type = "radio" name = "choose9" value = "0">clear:all<br>
<input type = "radio" name = "choose9" value = "1">clear:both<br>
<input type = "radio" name = "choose9" value = "0">both:clear<br>
 </li>

<li id="question10">A navigation bar is simply a list of links<br>
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
