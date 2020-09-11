<?php
    $title = "Documents";
    $section = "HTML";

	require_once "../includes/htmlHeader.php";
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Documents</h1>
          <div class="jumbotron">
            <div class="col-sm-8">
                
                <h2>Basic structure of an HTML file</h2>
            <p>HTML Documents are consisted of 'DOCTYPE', body, and html tags. That's the area of HTML where you put the content and necessary information in it.</p>
                
           
                
            <p>All HTML documents always start with: <em>&lt;!DOCTYPE html&gt;</em> </p>
                
           
                
            <p>HTML documents begin with a <em>&lt;html&gt;</em> tag and ends with a <em>&lt;/html&gt;</em> tag. </p>
                
            </div>
          </div>
          
          <div class="paragraph">
              <div class="col-sm-8">
                  <h2>Structure</h2>
                    
                  <p style="font-size: 20px;">This is what the basic HTML document looks like</p>
                
                  <figure><img src="HTMLscreenshots/HTMLDocuments.PNG" alt="Basic HTML document structure"><figcaption>Basic HTML Document structure</figcaption></figure>
                  
    
                  
              </div>
              <br />
            <div class="col-sm-8">
              <h2>Demo</h2>
              
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;!DOCTYPE html&gt;</p>
                      <p>&lt;html&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;</p>
                      <p>&lt;/html&gt;</p>
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
