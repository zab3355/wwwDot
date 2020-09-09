<?php 
	$title = "Introduction";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Introduction</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is CSS?</h2>
              <p>This tutorial will walk you through the basics of CSS and discuss the main topics included in CSS in order to instruct you on how to properly style your website. CSS stands for Cascading Syle Sheet and it is the programming language responsible for formatting and displaying your html code. Without CSS no color, positioning, or extra flare can be added to your webpage and it will look very bland.</p>
              <p>There are three different ways to add CSS stying to you webpage; inline, internal or external CSS. Inline CSS simply adds css to a specific html tag by putting it inside of the angle brackets. Internal CSS looks similar to external but is put inside of the HTML file. External CSS is provided in a separate file and is linked to the HTML page using an includes tag.</p>
              <p>Our recommendation is to use an external CSS sheet for writing the CSS. This allows you to store your CSS in a separate file so it is much easier to read and organize. Also the same style sheet can be applied to multiple pages, allowing you a more cohesive and consistent design across your website.</p>
            </div>
			</div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
          </div>
             <p>Our first topic will be the Inline style. Inline CSS is a unique style that allows you to modify the representation of a single element on your page. This is accomplished by editing the "style" attribute of the tag inside of the angle brackets.</p>
			 <figure class="snip1533">
				<figcaption>
                  <blockquote>
				  <p>&lt;h1 style="color:blue;"&gt; Test &lt;/h1&gt;</p>
                     <div class="button"><a href="https://jsfiddle.net/nkc122ay/1/">Try it! </a></div>
				 </blockquote>
                </figcaption>
			</figure>
              <h2>Where to include CSS?</h2>
              <p>The next form in which CSS can be incorporated is through an internal style sheet. Internal CSS is when you provide the CSS code inside of the HTML document and you denote the CSS using <code>&lt;style&gt;</code> tags. These style tags have to be placed at the top of an HTML page inside the head section. </p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
				<p>The final, and most efficient way of providing style is with an external style sheet, which involves creating an external file. This method allows you to use the same name for altering an element in multiple different webpages. This is perfect for providing a more consistent style to your website and makes it easier for a user to read and navigate the information you want to present. In order to have the external style sheet to apply to the HTML page, we provide a tag called includes in between <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code> tags in an HTML page.
				<figure class="snip1533">
				<figcaption>
                  <blockquote>
				  <p>&lt;link rel="stylesheet" type="text/css" href"style.css&gt;</p>
				 </blockquote>
                </figcaption>
			</figure>
			<p> The last topic for this introduction is what happens when you try to mix these types and apply more than one alteration to the same attribute of an element. You can apply these but only the last alteration read will apply to the element, this is how CSS got the term Cascading incorporated into it. The order in which CSS is read has the external style sheets read first, then the internal style sheet, and finally the inline CSS. This means that anything provided in the inline styling is guaranteed to be the alterations that are used.</p>
			<figure class="snip1533">
				<figcaption>
                  <blockquote>
				  <p>&lt;style&gt;</p>
					  <p>h1{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;color:lightblue</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
				  <p>&lt;h1 style="color:blue;"&gt; Test &lt;/h1&gt;</p>
				<div class="button"><a href="https://jsfiddle.net/nkc122ay/2/">Try it!</a></div>
				 </blockquote>
                </figcaption>
			</figure>
			<p> The title on webpage appears blue because the browser first reads the style from the external style sheet then the inline alterations, so it applies the last thing it read.</p>
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
