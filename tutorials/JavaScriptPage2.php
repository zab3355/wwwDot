<?php 
	$title = "Console and Comment";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Console</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Can Javascript talk to us?</h2>
              <p>The answer is definitelt, it should! There is the way for you to make Javascript to talk to us!</p>
              <p>To do this we need two things:</p>
              <ol>
              	  <li>A way to ask JS to talk: <code>console.log();</code></li>
              	  <li>Something for JS to say. Something can be any of the data type: String, Number and Boolean: <code>console.log("Hello World");</code></li>
              </ol>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Syntax</h2>
              <p><code>console.log(something);</code></p>
              <p><b>Equals to:</b>  “Hey console, please print this thing inside the parentheses".</p>
              <p>We can log multiple things at once by separating them with commas:</p>
              <p><code>console.log(2,"bacon", "and", 1, "cheese");</code></p>
              <div class="button"><a href="https://jsfiddle.net/gp0zme4g/">Try it!</a></div>
            </div>
          </div>

          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Where To?</h2>
              <p>You must have been very confused when you clicked try it but nothing appeared.</p>
              <p>Console print-out will not be displayed directly on our websites. We will see it on the browser, but through a tool called <b>Developer Tool</b>. Yes we are developers now!</p>
              <p>To open the tool, stay on the same "Try It" page, and follow the steps below:</p>
   
                <p><b>1. </b>Open your favorite browser. Right click on any area of the page, except for the links. You will see the <b>Inspect</b> option in the dropdown menu.</p>
                <img src="../media/JavaScript/JS1.png" alt="Browser Right Click">
                <br/>
                <br/>
                <p><b>2. </b>This toolbox will appear, and it is the "Developer Tool"! Pay attention to the tab bar on the top, do you see <b>Console</b> tab. Yep, that's exactly what we are looking for! Click on it!</p>
                <img src="../media/JavaScript/JS2.png" alt="Inspect Tool Box">
                <br/>
                <br/>
                <p><b>3. </b>When the tab is opened, you will see where our printout is hiding! It's right there in the console.</p>
                <img src="../media/JavaScript/JS3.png" alt="Console">
                <br/>
                <br/>
                <p><b>4. </b>You can keep the tool open, then try different <code>console.log()</code> and see them magically get printed out.</p>
              
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
