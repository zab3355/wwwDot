<?php 
	$title = "Height and Width";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main  class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Height and Width </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Height and Width For CSS?</h2>
			  <p>The height and width is use for set the height and width for an element. The unit for the height and width can be length like px, cm, pt, ect. Or percentage which each depend on the screen size. </p>
			  <p>The height and width also can auto, that mean’s the browser calculate the width and height for you. The notice is height and width don’t include padding, margin and border, we set to set those in there.</p>
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use height and width?</h2>
              <p>Here is an example for the height and width</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>h1{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;height:20%;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;width:500px;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/19/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>The min-height which is for minimum height of an element and max-height which is for the maximum of an element. we also can use max-width for the maximum of the width and min-width for minimum width </p>   
            <p>Here is an example, I set max-width and min-height both to 20%</p>			
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>div{</p>
                       <p>&nbsp;&nbsp;&nbsp;&nbsp;height:20%;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;width:20%;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/20/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>There a different between max and min that is the min can contain many elements whatever the element how long is, it all can be contain, but the max can’t it have own range if there are out of range then will be out from the field. Just time browser shows up in above.</p>
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