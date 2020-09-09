<?php 
	$title = "Quiz";
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

<h1>JavaScript Quiz</h1>


<form id = "quiz" name = "quiz">

<ol>
<li id="question1">How to insert the External JavaScript file?<br>
<input type = "radio" name = "choose1" value = "0"/>&lt;link rel="script" type="css/text" href="myScript.js /&gt;<br>
<input type = "radio" name = "choose1" value = "0"/>&lt;link rel="script" href="mystyle.css /&gt;<br>
<input type = "radio" name = "choose1" value = "1"/>&lt;script src="myScript.js"&gt;&lt;/script&gt;<br>
<input type = "radio" name = "choose1" value = "0"/>&lt;script="myScript.js"&gt;&lt;/script&gt;<br>
</li>

<li id="question2">Which line below <code>console.log</code> can print?<br>
<input type = "radio" name = "choose2" value = "0">"Hello World"<br>
<input type = "radio" name = "choose2" value = "0">10000<br>
<input type = "radio" name = "choose2" value = "0">true<br>
<input type = "radio" name = "choose2" value = "1">All of the above<br><br>
</li>

<li id="question3">How would you comment out this line of code: <code>var unused = "Hello";</code><br>
<input type = "radio" name = "choose3" value = "0">{ <code>var unused = "Hello";</code> }<br>
<input type = "radio" name = "choose3" value = "1">//<code>var unused = "Hello";</code><br>
<input type = "radio" name = "choose3" value = "0">*<code>var unused = "Hello";</code>*<br>
<input type = "radio" name = "choose3" value = "0">None of the above<br><br>
</li>

<li id="question4">What is the result of this comparison? <code>"Jelly Bean" === "Jelly Boom"</code><br>
<input type = "radio" name = "choose4" value = "1">false<br>
<input type = "radio" name = "choose4" value = "0">true<br>
<input type = "radio" name = "choose4" value = "0">undefined<br>
<input type = "radio" name = "choose4" value = "0">Wrong syntax<br><br>
</li>

<li id="question5">Can we change the value of a pre-defined variable?<br>
<input type = "radio" name = "choose5" value = "1">Yes!<br>
<input type = "radio" name = "choose5" value = "0">No!<br>
</li>

<li id="question6">What will this block of code print out?<br>
<p><code>var canIPass = true;</code></p>
<p><code>if (canIPass) {</code></p>
<p><code>console.log("You did it!");</code></p>
<p><code>} else {</code></p>
<p><code>console.log("You should try harder!");</code></p>
<p><code>}</code></p>
<input type = "radio" name = "choose6" value = "0">"You should try harder!"<br>
<input type = "radio" name = "choose6" value = "1">"You did it!"<br>
<input type = "radio" name = "choose6" value = "0">undefined<br>
<input type = "radio" name = "choose6" value = "0">None of the above<br><br>
</li>

<li id="question7">How can I define a function?<br>
<input type = "radio" name = "choose7" value = "1">function myFunction() {...}<br>
<input type = "radio" name = "choose7" value = "0">func myFunction() {...}<br>
<input type = "radio" name = "choose7" value = "0">myFunction() {...}<br>
<input type = "radio" name = "choose7" value = "0">function myFunction {...}<br><br>
</li>

<li id="question8">How many times can I call <code>myFuntion()</code> in an HTML document?<br>
<input type = "radio" name = "choose8" value = "0">1<br>
<input type = "radio" name = "choose8" value = "0">5<br>
<input type = "radio" name = "choose8" value = "0">10<br>
<input type = "radio" name = "choose8" value = "1">infinite number of times<br><br>
</li>

<li id="question9">Check out the code below<br>
<p><code>for (var i = 0; i < 10; i++) {</code></p>
<p><code>console.log("The current number is: ", i);</code></p>
<p><code>}</code></p>
<p>What is <code>var i = 0</code> part of the loop called?</p>
<input type = "radio" name = "choose9" value = "0">variable<br>
<input type = "radio" name = "choose9" value = "0">condition<br>
<input type = "radio" name = "choose9" value = "1">start condition<br>
<input type = "radio" name = "choose9" value = "0">end condition<br><br>
</li>

<li id="question10">What is missing in this <code>while</code> loop?<br>
<p><code>var i = 0;</code></p>
<p><code>while (i < 100) {</code></p>
<p><code>console.log("The current number is: ", i);</code></p>
<p><code>}</code></p>
<input type = "radio" name = "choose10" value = "1">i++<br>
<input type = "radio" name = "choose10" value = "0">i--<br>
<input type = "radio" name = "choose10" value = "0">i < i++<br>
<input type = "radio" name = "choose10" value = "0">None of the above<br>
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
