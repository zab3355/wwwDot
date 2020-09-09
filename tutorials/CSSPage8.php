<?php 
	$title = "Display";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Display </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Display?</h2>
			 <p>The display is one of the most important properties of CSS. Every element has a default. A block element is often called a block-level element. An inline element is always just called an inline element.</p>
             <p>The block-level element uses the following commands: &lt;div>, &lt;h1>, &lt;h6>, &lt;p>, &lt;form>, &lt;header>, &lt;footer>, &lt;section>. </p>			 
             <p>The inline element uses the following commands: &lt;span>, &lt;a>, &lt;img>. The none level element is used for having an element that wont appear on the page.</p>			
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>Display Examples</h2>
			   <h3>Block Example</h3>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:block;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/23/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
               <h3>Inline Example</h3>
			   <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:inline;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/24/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
               <h3>None Example</h3>
			   <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:none;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/25/">Try it!</a></div>
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