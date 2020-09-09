<?php 
	$title = "Navigation";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Navigation Bar </h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>What is the Navigation Bar</h2>
			<p>The navigation bar are a way of navigating throughout a website and are usually found on the top/side of each page.</p>
			<p> The main code on getting the navigation bar to connect to the various other pages is located in the HTML, while getting the look of the Navigation bar is located in the CSS. The CSS is very important in this regard since the CSS can make navigation bars look very appealing to the user.</p>
			</div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to Create the Navigation Bar</h2>
			   <p>The first step is to create the navigation bar lists(ul tags):</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
				  <p>&lt;ul&gt;</p>
                     <p>&lt;li&gt;&lt;a href="#"&gt;How&lt;/a&gt;&lt;/li&gt;</p>
					  <p>&lt;li&gt;&lt;a href="#"&gt;To&lt;/a&gt;&lt;/li&gt;</p>
                      <p>&lt;li&gt;&lt;a href="#"&gt;Create&lt;/a&gt;&lt;/li&gt;</p>
					 <p>&lt;li&gt;&lt;a href="#"&gt;Navigation&lt;/a&gt;&lt;/li&gt;</p>
					  <p>&lt;/ul&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/34/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			   <p>Next, we add some CSS elements. These CSS elements will remove the bullets, add a background color, set the margins, and padding.</p>
               <p>Then, we can add more css elements and show how to implement a button while it's active. </p>
			  <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>ul{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;list-style-type:none;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;width:150px;</p>
					  <p>}</p>
					   <p>li a{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:block;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/33/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
				 <p>Finally, add more CSS elements to the sidebar to top it off!</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                     <p>&lt;style&gt;</p>
					  <p>ul{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;list-style-type:none;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;width:150px;</p>
					  <p>}</p>
					  <p>li{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;border-bottom:1px solid black;</p>
					  <p>}</p> 
					  <p>li a{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:block;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-decoration:none;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-align:center;</p>
					  <p>}</p>
					  <p>.active{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:green;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:white;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/35/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
		<p>Another thing that needs to be added is more functionality for our active element, to clearly show which page the user is on.  </p>
       <p>The final thing that's necessary is to make the bar horizontal.</p>

			   <figure class="snip1533">
                <figcaption>
                  <blockquote>
                   <p>&lt;style&gt;</p>
					  <p>ul{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;list-style-type:none;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;margin:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;padding:0;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;overflow: hidden;</p>
					  <p>}</p>
					  <p>li{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;float:left;</p>
					  <p>}</p> 
					  <p>li a{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;display:block;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:lightblue;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-decoration:none;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;text-align:center;</p>
					   <p>&nbsp;&nbsp;&nbsp;&nbsp;padding: 14px 16px;</p>
					  <p>}</p>
					  <p>.active{</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:green;</p>
					  <p>&nbsp;&nbsp;&nbsp;&nbsp;color:white;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/36/">Try it!</a></div>
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