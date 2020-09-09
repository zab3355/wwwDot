<?php
    $title = "Links";
    $section = "HTML";

	require_once "../includes/htmlHeader.php";
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Links</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <p>Links in HTML are called hyperlinks. That allow you to click a link that will direct you to a specific webpage.  
              </p>
                
             <p>When you use the mouse to point to a link, the mouse will turn into a little hand.</p>
                
             <p>Tags for links: <em>&lt;a&gt;</em> and <em>&lt;/a&gt;</em>. These tags are known as anchor tags.</p>
                
             <p>Links in such tags are defined as: &lt;a&gt; href='[html filename]'&gt;"name of the webpage"&lt;/p&gt;</p>
                
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
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;The link to our fine world:&lt;/p&gt;</p>
                        
                        <p>&lt;a href = "world.html"&gt;The fine world&lt;/a&gt;</p>
                
                        <p><br>&lt;/body&gt;</p>
                        <div class="button"><a href="https://jsfiddle.net/3mzpj0d8/">Try it!</a></div>
                        
                    </blockquote>
                  </figcaption>
                </figure>
                <br />
                <br />
                
                <p style="font-size: 20px;">A web browser showing a hyperlink, "The fine World".</p>
                
                <figure><img src="HTMLscreenshots/Bracketstutorial14.PNG" alt="A hyperlink in the browser"><figcaption>A hyperlink shown in the web browser.</figcaption></figure>
            
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
