<?php 
	$title = "Background";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Background</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>General Information</h2>
              <p>Your choice for what background type and color palette to use is also a very important part of the design of your website. The background immediately sets the tone for the website and informs the user of what kind of information they can expect. Using an image is a good way to imply what is in the webpage and using a specific color over another color can completely change how a user will feel about the whole page.</p>
			  <p>Choosing what to make your background is largely up to you as everyone will have their own artistic opinions on how to design a page, but it is important that you use your skills from the colors section to have your background mix well with the font color and other colors on your page. For example, white font on a yellow background or black font on a dark blue background are very bad styling practices because it makes your text hard to read.</p>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use background?</h2>
              <p> The background color is an attribute that all container tags (tags that hold text or images) have, not only for the webpage as a whole. You can add a background color to the webpage as a whole by applying it to the head tag, but you can also apply it to a <code>&lt;h1&gt;</code> or <code>&lt;p&gt;</code> tag for example. </p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>}</p>
					  <p>h1{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:blue;</p>
					  <p>}</p>
					  <p>p{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:red;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/7/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>Background-image allows you to link an actual image as the background of an element instead of a simple color selection. You can even use it to reference images from other webpages because it operates off of the url you provide.</p>         
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp; background-image:url("http://serenity.ist.rit.edu/~iste240t03/media/backgroundImage.jpg"); </p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/9/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>An annoying problem with using an image for the background is that that image will repeat over and over while scrolling down, which is not always what you want. To stop it from repeating, you set the "background-repeat" attribute to "no-repeat"</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-image:url("http://serenity.ist.rit.edu/~iste240t03/media/backgroundImage.jpg");</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-repeat:no-repeat;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/10/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>You can also be more specific about where it should repeat by setting "repeat-x" and repeat-y". repeat-x allows you to set the image to repeat horizontally while repeat-y will stop it from repeating horizontally and only repeat vertically.</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                       <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-image:url("http://serenity.ist.rit.edu/~iste240t03/media/backgroundImage.jpg");</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-repeat:repeat-y;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/11/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>We also can set the position of the background-image or the attachment.</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                       <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-image:url("http://serenity.ist.rit.edu/~iste240t03/media/backgroundImage.jpg");</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-repeat:no-repeat;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-position:right top;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-attachment:relative;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/12/">Try it!</a></div>
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