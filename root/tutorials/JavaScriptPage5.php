<?php 
	$title = "Variables";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Variables</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Why do we need them?</h2>
              <ol>
                <li>They allow us to use the same value over and over, without having to write a string or other data type over and over.</li>
                <li>We can assign variable different values that can be read and changed by the program without altering our code.</li>
              </ol>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to declare a variable?</h2>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>var myJob = "Developer";</p>
                  </blockquote>
                </figcaption>
              </figure>
              <p>Read it out loud: “Variable myJob is equal to Developer</p>
              <p>There are different parts of the syntax that you need to pay attentions to:</p>
              <ol>
                <li><b>var:</b> short for variable, is the JS <b>keyword</b> to create a new variable.</li>
                <li><b>myJob:</b>  is the name of the new variable and is chosen by you! There should be no spaces, and it is recommended to capitalized each new word from the second word. For example: <code>myDogNameIsOggy</code>. This is called <b>camelCase</b>.</li>
                <li><b>=:</b> means to assign a value to a variable.</li>
                <li><b>"Developer"</b>  is the String value that is chosen by you and is assigned to the variable <code>myJob</code>.</li>
              </ol>
            </div>
          </div>

          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Can we change it value?</h2>
              <p>Definitely! If we can change our job, we can absolutely change our variable <code>myJob</code> value too!</p>
              <figure class="snip1533">
              <figcaption>
                <blockquote>
                  <p>var myJob = "developer";</p>
	                <p>console.log('My job today is ', myJob);</p>
	                <p>&nbsp;&nbsp;&nbsp;&nbsp;//output: My job tomorrow is developer</p>

                  <p>myJob = "singer";</p>
	                <p>console.log('My job tomorrow is ', myJob);</p>
	                <p>&nbsp;&nbsp;&nbsp;&nbsp;//output: My job tomorrow is singer</p>

                  <div class="button"><a href="https://jsfiddle.net/w72rao46/1/">Try it!</a></div>
                </blockquote>
              </figcaption>
            </figure>
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
