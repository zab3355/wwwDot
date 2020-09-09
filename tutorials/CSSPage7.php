<?php 
	$title = "Link";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Link </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Introduction to Links</h2>
             <p>A link is a way to connect your webpage to other webpages, and links have four different states that you can alter with CSS. These four are link, visited, hover, and active</p>
			 <p>link is the default form that the link takes when the webpage is first loaded up. The visited state is what it looks like when not being interacted with after you have followed the link in the past. Hover is when the user is hovered over the link but has not tried to click on it yet. Finally, the active state appears when you have clicked on it but not released the mouse button</p>		 
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use link?</h2>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>a:link{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
					  <p>}</p>
					  <p>a:visited{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:green;</p>
					  <p>}</p>
					  <p>a:hover{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:blue;</p>
					  <p>}</p>
					  <p>a:active{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:yellow;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div>class="button"><a href="https://jsfiddle.net/nkc122ay/22/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>When you first load the webpage, he link will be red because the link state is set to red. Once you move your mouse over it, the hover state will activate and change the color to blue. Once you have clicked it, it will change the color to yellow. After you return to the page after you have clicked it, the link will appear green.</p>
			
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