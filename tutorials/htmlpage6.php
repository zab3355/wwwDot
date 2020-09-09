<?php
    $title = "Line Breaks";
    $section = "HTML";

	require_once "../includes/htmlHeader.php";
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Line Breaks</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <p>Line breaks in HTML are used to insert a new line without starting a new paragraph. 
              </p>
                
             <p>Tag for line breaks: &lt;br&gt; (NOTE: It is an empty, which means it doesn’t have an end tag like most other tags). </p>
                
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Demo</h2>
                
                <figure class="snip1533">
                  <figcaption>
                    <blockquote>
                        <p>&lt;body&gt;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Hello World!&lt;/h1&gt;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Welcome to this &lt;br&gt;world&lt;br&gt; where you will learn exciting and wonderful things about the world itself!&lt;/p&gt;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;If you have any questions, please don't hesitate to contact us!&lt;/p&gt;</p>
                        <p>&lt;/body&gt;</p>
                        <div class="button"><a href="https://jsfiddle.net/dwp9y6tw/1/">Try it!</a></div>
                        
                    </blockquote>
                  </figcaption>
                </figure>
                <br />
                <br />
                
                <p style="font-size: 20px;">This is what it should look like in a web browser</p>
                <figure><img src="HTMLscreenshots/Bracketstutorial12.PNG" alt="Line break tags in browser"><figcaption>Line breaks shown in the web browser.</figcaption></figure>
            
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
