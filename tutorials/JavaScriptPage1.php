<?php 
	$title = "Introduction";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>JavaScript</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Javascript?</h2>
              <p>JavaScript is the programming language of the Web. It is language for us to talk to the computer, specifically the web browser (how cool!)</p>
              <p>The idea of programming can be intimidating if you are first exposed to it. But JavaScript is a very high-level, human-friendly and intuitive language that designed to be simple to learn and use.</p>
              <p>Our tutorials will cover some of the most practical concepts of JavaScript. By providing not only definitions and syntaxes but also code examples in online simulators, we hope to show you how powerful JavaScript is and how you can apply what you have learned to solve real-life problems!</p>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Where to include JavaScript?</h2>
              <p>In HTML, JavaScript code must be inserted between <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags. Each of the pair is called one "script". You can put as many script as you want in an HTML document, which are called internal scripts.</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;script&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo").innerHTML = "My First JavaScript";</p>
                      <p>&lt;/script&gt;</p>
                      <div class="button"><a href="https://jsfiddle.net/uszwpaen/1/">Try it!</a></div>
                  </blockquote>
                </figcaption>
              </figure>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Internal scripts</h2>
              <p>Scripts are usually put in between <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code> tags, OR, between <code>&lt;body&gt;</code> and <code>&lt;/body&gt;</code> tags</p>
              <p>Looking at the code example below, do you notice that there are scripts both in the head and the body? Yes, they are valid because as I have mentioned before, you can have scripts everywhere!</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                  	  <p>&lt;head&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo").innerHTML = "My First Script";</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script&gt;</p>
                      <p>&lt;/head&gt;</p>
                      <p>&lt;body&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo").innerHTML = "My Second Script";</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script&gt;</p>
                      <p>&lt;/body&gt;</p>
                  </blockquote>
                </figcaption>
              </figure>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>External scripts</h2>
              <p>Scripts can also be referenced from external files. This is the recommended practice because it helps to separate area of concerns and avoids overloading the HTML document</p>
              <p>The external JavaScript file will have ".js" extension. All the Javascript codes you want to use in your HTML document should be put here!</p>
              <p><b>IMPORTANT!</b> The pair if <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags will NOT be included inside the ".js" file</p> 
              <figure class="snip1533">
                <h3 style="text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;myScript.js file:</h3>
                <figcaption>
                  <blockquote>
                      <p>function myFunction() { </p>
   					  <p>&nbsp;&nbsp;&nbsp;&nbsp;document.getElementById("demo").innerHTML = "This script is external!";</p>
					  <p>}</p>
                  </blockquote>
                </figcaption>
              </figure>
              <p>The "myScript.js" file above can then be included in our HTML document by the syntax below. Everything (we will learn about these things later) in "myJavaScript.js" file is now belong to your HTML!</p>
              
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                  	  <p>&lt;body&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;script src="myScript.js"&gt;&lt;/script&gt;</p>
                      <p>&lt;/body&gt;</p>
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

