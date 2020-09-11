<?php
    $title = "Images";
    $section = "HTML";

	require_once "../includes/htmlHeader.php";
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Images</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <p>Adding images in HTML document makes the webpage to have a better appearance and design.  
              </p>
                
             <p>Tags for Images: <em>&lt;img src=”URL link”&gt;</em>(NOTE: There’s no closing tag for this tag).</p>
                
             <p>The <em>src</em> attribute specifies the link or web address of an image.</p>
                
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
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Welcome to this world where you will learn exciting and wonderful things about the world itself!&lt;/p&gt;</p>                       
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Check out the picture of our fine world!&lt;/p&gt;</p>
                        
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src = "globe.jpg"&gt;</p>
                
                        <p>&lt;/body&gt;</p>
                        <div class="button"><a href="https://jsfiddle.net/p4euob8y/">Try it!</a></div>
                        
                    </blockquote>
                  </figcaption>
                </figure>
                <br />
                <br />
                
                <p style="font-size: 20px;">A web browser showing an image of a globe.</p>
                
                <figure><img src="HTMLscreenshots/Bracketstutorial17.PNG" alt="An image in the browser"><figcaption>A webpage showing an image.</figcaption></figure>
            
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
