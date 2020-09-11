<?php 
	$title = "Float and Clear";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Float and Clear </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Float and Clear?</h2>
			<p>Float is a CSS positioning property.</p>
			<p>The clear property specifies what side floating elements are/aren't allowed to float into.</p>
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use Float</h2>
			   <p>“float: left” chooses a specific element to go to the left side of the screen.</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;float:left;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/26/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			   <p>“float: right” chooses a specific element to go to the right side of the screen. </p>
  
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;float:right;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/28/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			 <p>“float: none” that doing nothing just a default value.</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;float:none;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/29/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>“float: inherit” inherits the float from its parent element</p>
			   <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:inherit;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/30/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			 <h2>How to use Clear</h2>
			   <p>The “clear: none” command goes to a default value, and usually displays nothing.</p>
			   <p>The “clear: left” command goes to the left side of the clear element.</p>
			   <p>The “clear: right” command goes to the right side of the clear element.</p>
			   <p>The “clear: both” command puts the clear element on both the left and right side.</p>
			   <p>This an example</p>
			   <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>img{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;float:left;</p>
					  <p>}</p>
					  <p>div{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;clear:left;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/31/">Try it!</a></div>
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