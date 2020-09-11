<?php 
	$title = "Color";
    $section = "CSS";

	require_once "../includes/cssHeader.php"; 
?>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>CSS Color</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Color in CSS</h2>
              <p>Color is a very important important part of designing a webpage as the color that you chose will directly determine how appealing your page is, how legible you information is, and how easy it is to browse the page. The color scheme should be one of the first things that you consider and determine in the planning and design phase of your webpage, so we will discuss it first. </p>
              <p>The decision on what colors to use, however, is completely unique to how you want to lay out your website so we will teach you how to incorporate color and you must experiment with different styles to find what fits your needs best. </p>
              <p>There are a number of ways to reference what color you want to use in a browser including the color name, RGB value, HEX value and HLS value. These can all be easily looked up online to get the exact names and values you want to use.</p>
            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2>How to add color</h2>
              <p>Very often, web developers will use references the colors actual name for applying a color attribute as it is easier to remember, harder to make a typo in and often makes more sense than a series of numbers and letters as it appears in the other values.</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:blue;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/3/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			
			<p>The color can also be specified as an RGB value by using the format RGB(red, green, blue), where the the "red", "green" and "blue" are numbers representing the intensity of the respective color. For example, RGB(0,0,255) will appear as plain blue, because 255 is the highest value you can set and the red and green are both zero so they do not appear at all, making blue the only color present. The same method can be used to mix colors, for example RGB(255,255,0) is plain yellow because it is equal parts red and green with no blue to produce yellow.</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:RGB(0,0,255);</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/4/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>The color can also be specified as a HEX value by using the format #rrggbb where r is for red, g for green and b for blue. Unlike RGB where we use numbers, we are using Hexadecimal(0-f) for the setting the values for each color. </p>
			<p>Hexidecimal starts at 0 and goes up to 9, then a-f represent 10-15 respectively. This shows that #ff0000 means that red is set to the highest value possible and green and blue are at zero, resulting in plain red being displayed. </p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:#0000ff;</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/5/">Try it!</a></div>
                  </blockquote>
                </figcaption>
			</figure>
			<p>Finally, the least common form of representing color is to use the HSL value. HSL also takes three parameters, but it functions very differently than RBG and Hex because they both use red, green and blue whereas HSL uses hue, saturation and lightness. The hue is a degree of the color wheel from 0 – 360 where 0 is red, 120 is green and 240 is blue. The saturation is a percentage of how bright the color will appear, so if we set it to 0% it will set the color to gray, but if we set it to 100% it will appear normally. The lightness isa  percentage of white to black where 0% makes the color darker and 100% will make the color more white and washed out.</p>
			<figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>&lt;style&gt;</p>
					  <p>body{</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;background-color:hsl(240,100,50%);</p>
					  <p>}</p>
                      <p>&lt;/style&gt;</p>
                   <div class="button"><a href="https://jsfiddle.net/nkc122ay/6/">Try it!</a></div>
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