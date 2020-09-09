<?php
    $title = "Quiz";
    $section = "HTML";

	require_once "../includes/htmlHeader.php";
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
         <div id="after">
<p id = "number_correct"></p>
<p id = "review_correct"></p>
<input class = "btn" type = "button" value = "HomePage" onclick = "window.location='../index.php';">
<input class = "btn" type = "button" value = "Try again?" onclick ="re_set();">
</div>

<h1>HTML Quiz</h1>


<form id = "quiz" name = "quiz">

	<ol>
		<li id="question1">What does HTML stand for?<br>
		<input type = "radio" name = "choose1" value = "1" />Hyper Text Markup Language<br>
		<input type = "radio" name = "choose1" value = "0" />HyperLink Text Markup Language<br>
		<input type = "radio" name = "choose1" value = "0" />How To Make Links<br>
		<input type = "radio" name = "choose1" value = "0" />Home Text Mobile Links<br><br>
</li>
		<li id="question2">Which is the largest heading tag?<br>
		<input type = "radio" name = "choose2" value = "1" /> h1 <br>
		<input type = "radio" name = "choose2" value = "0" /> h2 <br>
		<input type = "radio" name = "choose2" value = "0" /> h3 <br>
		<input type = "radio" name = "choose2" value = "0" /> h4 <br>
		<input type = "radio" name = "choose2" value = "0" /> h5 <br>
		<input type = "radio" name = "choose2" value = "0" /> h6 <br><br>
</li>
		<li id="question3">What is the correct syntax to add a comment? <br>
		<input type = "radio" name = "choose3" value = "0" /> &lt;comm>&lt;/comm> <br>
		<input type = "radio" name = "choose3" value = "1" /> &lt;!--      -->  <br>
		<input type = "radio" name = "choose3" value = "0" /> &lt;?php    ?>  <br>
		<input type = "radio" name = "choose3" value = "0" /> &lt;c>&lt;/c> <br><br>
</li>
		<li id="question4">How to add a space on the page?<br>
		<input type = "radio" name = "choose4" value = "0"/> <code>&amp;amp;</code> <br>
		<input type = "radio" name = "choose4" value = "0"/> <code>&amp;copy;</code> <br>
		<input type = "radio" name = "choose4" value = "0"/> <code>&amp;quot;</code> <br>
		<input type = "radio" name = "choose4" value = "1"/> <code>&amp;nbsp;</code> <br><br>
</li>
		<li id="question5">What is the proper format for linking a css document to an HTML page?<br>
		<input type = "radio" name = "choose5" value = "0" /> &lt;link rel=”url here” type= “css”&gt; <br>
		<input type = "radio" name = "choose5" value = "1" /> &lt;link rel="stylesheet"&gt; type="text/css" href="url here"><br>
		<input type = "radio" name = "choose5" value = "0" /> &lt;link rel=”stylesheet” type= “css”&gt; <br>
		<input type = "radio" name = "choose5" value = "0" /> &lt;link rel=stylesheet type=text/css href=”url here”&gt;<br><br>
</li>
		<li id="question6" >You can link more than one CSS document to an HTML document<br>
		<input type = "radio" name = "choose6" value = "1" /> True<br>
		<input type = "radio" name = "choose6" value = "0" /> False<br>
</li>
		<li id="question7">What is the correct sytax for inputting a hyperlink?<br>
		<input type = "radio" name = "choose7" value = "1" /> &lt;a href="url here">Visit our HTML Tutorial &lt;/a&gt; <br>
		<input type = "radio" name = "choose7" value = "0" /> &lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt; <br>
		<input type = "radio" name = "choose7" value = "0" /> &lt;href=”url here”>Visit our HTML Tutorial&lt;/href&gt;<br>
		<input type = "radio" name = "choose7" value = "0"> &lt;link=”url here”>”Visit our HTML Tutorial”<br><br>
</li>
		<li id="question8">Which display value causes items to appear next to each other horizontally?<br>
		<input type = "radio" name = "choose8" value = "0" /> inherit <br>
		<input type = "radio" name = "choose8" value = "0"> flex <br>
		<input type = "radio" name = "choose8" value = "0"> block <br>
		<input type = "radio" name = "choose8" value = "1"> inline <br><br>
</li>
		<li id="question9">How would you make a numbered list?  <br>
		<input type = "radio" name = "choose9" value = "0"> &lt;ul&gt; <br>
		<input type = "radio" name = "choose9" value = "1"> &lt;ol&gt; <br>
		<input type = "radio" name = "choose9" value = "0"> &lt;list&gt; <br>
		<input type = "radio" name = "choose9" value = "0"> &lt;dl&gt; <br><br>
</li>
		<li id="question10"> How do you properly declare the document type of an html page at the top of the document? <br>
		<input type = "radio" name = "choose10" value = "0"> &lt;document type="html"&gt;<br>
		<input type = "radio" name = "choose10" value = "0"> &lt;html&gt; <br>
		<input type = "radio" name = "choose10" value = "1"> &lt;!doctype html&gt; <br>
		<input type = "radio" name = "choose10" value = "0"> &lt;!type html&gt; <br>
</li>
	</ol>

<input id = "button" type = "button" value = "Submit" onclick = "check(); location.href='#topofquiz';">

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
