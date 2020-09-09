<?php 
	$title = "Function";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Function</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Function in Javascript?</h2>
              <p>A function is a block of code designed to perform a task.</p>
              <p>Functions are like recipes:</p>
              <ol>
                <li>Take data or variables as parameters</li>
                <li>Perform a set of tasks on them</li>
                <li>Return the result. </li>
              </ol>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Syntax</h2>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>var isOn = false;</p>
                      <p>function pressPowerButton() {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;if (isOn) {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo1").innerHTML = "ON";</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;isOn = false;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;} else {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo2").innerHTML = "OFF";</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;isOn = true;<p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
                      <p>}</p>
                      <p>pressPowerButton();<p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;// Output: Calculator turning on.</p>

                      <p>pressPowerButton();</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;// Output: Calculator turning off.</p>
                      <div class="button"><a href="https://jsfiddle.net/o04q530w/1/">Try it!</a></div>
                  </blockquote>
                </figcaption>
              </figure>
              <ol>
                <li>We can notice that the block of code inside function <code>pressPowerButton()</code> can be executed anywhere by calling the function name. </li>
                <li>The function begin with the word <code>function</code></li>
                <li>After “function” comes the name of the function <code>PressPowerButton</code>. There should be no space in the name and each new word is capitalized.</li>
                <li>After the function's name, comes parentheses <code>()</code>. Finally, the function has a block of code it executes between the curly braces <code>{}</code></li>
                <li>Notice the if/else statement inside the braces. The first if statement is just <code>isOn</code>, although you think it should be <code>isOn === true</code>. They are actually equal to each other! When you put a boolean variable in to an if statement, it will automatically be checked for true or false</li>
                <li>Can you guess what will be print out?</li>
              </ol>
              
            </div>
          </div>
          

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
  </body>
</html>
