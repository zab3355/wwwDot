<?php 
	$title = "Margin and Padding";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Margin and Padding</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is Margin and Padding For CSS?</h2>
			  <p>The margin and padding these two values are both is created a space around the element, the different between the margin and padding is that margin is outside of any defined border and the padding is inside of the any define border, in other word the padding is inside of margin or border. The margin and padding both have value these are the length, percentage, inherit.  </p>
              <p>The length that is the unit of margin and padding like px, pt and cm etc. The percentage also is unit for the margin and padding but one different is that how many space around an element is depend on screen size, unlike the length is fixed.  The inherit is specific that margin/padding should be inherited from the parent element. The margin and padding can set four different side: top, left, right and bottom. </p>
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to use margin and padding?</h2>
              <p>We using these four side for set the position of margin. Here is a margin example</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>h1{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-top:100px;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-left:100px;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-right:100px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-bottom:100px;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/13/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>TThe padding is must be inside of border or margin, it will be useless, if it not inside of these two.  </p>         
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>div{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-top:100px;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-left:100px;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-right:100px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-bottom:100px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue</p>
					  <p>}</p>
					  <p>p{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-top:50px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-left:100px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-right:100px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-bottom:50px;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/14/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>Also we can set the unit of margin and padding to percentage. </p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                       <p>&lt;style&gt;</p>
					  <p>div{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-top:20%;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-left:20%;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-right:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin-bottom:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue</p>
					  <p>}</p>
					  <p>p{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-top:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-left:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-right:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding-bottom:20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/15/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>We also can write the margin or padding top, right left, bottom by one single line. The margin and padding can take minimum two parameter to maximum four parameter.  When it take four parameter that is “margin(or padding): top, right, bottom, left”. </p>
			<p>When it take three parameter that is “margin(or padding): top, right and left, bottom” The “right and left” that mean is if we set 50px to this parameter then right equal to 50px the left also equal to 50px. When it take two parameter that is “margin(or padding):  top and bottom, right and left. Top and bottom should have same value for it, and the right and left also have.</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                       <p>&lt;style&gt;</p>
					  <p>div{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin:20% 20% 20% 20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue</p>
					  <p>}</p>
					  <p>p{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding:20% 20% 20% 20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/16/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>The Margin have one thing, the padding not have that is “auto” we can set margin to auto, it will display content which in margin to center of webpage  </p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                        <p>&lt;style&gt;</p>
					  <p>div{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;margin:auto;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;width:500px;
					  <p>}</p>
					  <p>p{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding:20% 20% 20% 20%;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:red;</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/17/">Try it!</a></div>
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