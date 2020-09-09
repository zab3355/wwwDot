<?php 
	$title = "If/Else";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>If / Else</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is conditional?</h2>
              <p>Let's start with human-speak. Many decisions we make everyday boil down to this sentence in some form:</p>
              <p>"If something is true, let's do option 1, or else, if it is false, let's do option 2."</p>
              <p>This sentence looks fairly similar when we write it with JavaScript. Let's check out the demo below!</p>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>If/Else Demo</h2>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>var needCoffee = true;</p>
                      <p>if (needCoffee) {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;console.log( "Finding Coffee" );</p>
                      <p>} else {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;console.log( "Keep on keeping on!" );</p>
                      <p>}</p>
                      <div class="button"><a href="https://jsfiddle.net/acrb4L0L/">Try it!</a></div>
                  </blockquote>
                </figcaption>
              </figure>
              <p>Now let's analyze the code:</p>
              <ol>
                <li>If the variable <code>needCoffee</code> is <code>true</code>, JavaScript will run one code block, and if a variable is <code>false</code>, it will run another.</li>
                <li><code>needCoffee</code> is the condition we are checking inside the <code>if</code>'s parentheses. Since it is equal to <code>true</code>, our program will run the code between the first opening curly brace and the first closing curly brace }. It will completely IGNORE the <code>else { ... }</code> part. In this case, we'd see 'Finding coffee' log to the console. In this case, we'd see <code>'Finding coffee'</code> log to the console.</li>
                <li>If we adjusted <code>needCoffee</code> to be <code>false</code>, only the <code>else</code>'s <code>console.log</code> will run.</li>
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
