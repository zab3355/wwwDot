<?php 
	$title = "Text";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Text </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Text Introduction</h2>
			  <p>Text can be the most important part of your webpage, as it is the main way for you to convey your information. There are various alterations you can make to text to make it appear differently. The attribute "color" sets the color for your text; </p>
			  <p>The "text-align" attribute sets where the text appears, such as against the right side instead of the left; </p>
			  <p>the text decoration attribute sets or removes the decoration of your font; </p>
			  <p>The text transformation sets the text to lowercase or uppercase;</p>
			  <p>the text indent sets the indenting space for the first line of text; </p>
			  <p>The letter space sets the space between each character of text;</p>
			  <p>The line height sets the space between each line; </p>
			  <p>The text direction changes the direction of your text;</p>
			  <p>The word space sets the space between each word in your text;</p>
			  <p>The text shadow adds a shadow to the text.</p>
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use text</h2>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>h1{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-align:center;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-decoration:overline;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-transform:uppercase;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;letter-spacing:10px;</p>
					  <p>}</p>
					  <p>h2{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-align:left;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-decoration:line-through;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-transform:lowercase;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;letter-spacing:-3px;</p>
					  <p>}</p>
					  <p>h3{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-align:right;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;text-decoration:underline;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-transform:capitalize;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-shadow:5px 3px green</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;direction-spacing:-3px</p>
					  <p>}</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;line-height:0.8;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/21/">Try it!</a></div>
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