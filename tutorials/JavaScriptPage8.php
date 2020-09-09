<?php 
	$title = "Loops";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Loops</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Why do we need loops?</h2>
              <p>One of a computer's greatest abilities is to repeat a task over and over so we don't have to. Loops let us tell the computer to loop over a block of code so that we don't have to write out the same process over and over.</p>
              <p>Loops are especially helpful when we have an array where we'd like to do something to each item in the array, like logging each item to the console.</p>
              <p>There are two kinds of loops we will learn in this lesson:</p>
              <ol>
                  <li><code>for</code> loops, which let us loop a block of code a known amount of times.</li>
                  <li><code>while</code> loops, which let us loop a block of code an unknown amount of times.</li>
              </ol>

            </div>
          </div>
          
          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2><code>for</code> loops</h2>
              <p>Instead of writing out the same code over and over, let’s make the computer loop through our array for us. We can do this with <code>for</code> loops.</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>for (var i = 0; i &lt; 10; i++) {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;console.log("The current number is: ", i);</p>
                      <p>}</p>
                      <div class="button"><a href="https://jsfiddle.net/zmx7d8q4/">Try it!</a></div>
                  </blockquote>
                </figcaption>
              </figure>
              <p>Since this syntax is a little complicated, let's break it into 4 parts:</p>
              <ol>
                <li>Within the <code>for</code> loop's parentheses, the <b>start condition</b> is <code>var i = 0</code>, which means the loop will start counting at <b>0</b>.</li>
                <li>The <b>stop condition</b> is <code>i &lt; 10</code>, which means the loop will run as long as <code>i</code> is less than <code>10</code>. When <code>i</code> is greater than or equal to 10, the loop will stop looping.</li>
                <li>The <b>iterator</b> is <code>i++</code>. This means that each loop, <code>i</code> will have 1 added to it.</li>
                <li>And finally, the code block is inside the <code>{ ... }</code>. The block will run each loop, until the loop stops.</li>
              </ol>
              
            </div>
          </div>

          <div class="paragraph">
            <div class="col-sm-8 mx-auto">
              <h2><code>while</code> loops</h2>
              <p><code>for</code> loops are great, but they have a limitation: you have to know how many times you want the loop to run. What if you want a loop to run an unknown or variable number of times instead?</p>
              <p>For example, if we have a deck of cards and we want to flip cards <b>until</b> we get a 'Spade', how could we write that in JavaScript?</p>
              <p>That's the purpose of the <code>while</code> loop. It looks like similar to a for loop! Check it out:</p>
              <figure class="snip1533">
                <figcaption>
                  <blockquote>
                      <p>var i = 10;</p>
                      <p>while (i &gt; 0) {</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;console.log("The current number is: ", i);</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;i--;</p>
                      <p>}</p>
                      <div class="button"><a href="https://jsfiddle.net/6k953t2n/2/">Try it!</a></div>
                  </blockquote>
                </figcaption>
              </figure>
              <p>Since this syntax is a little complicated, let's break it into 5 parts:</p>
              <ol>
                <li>We first define our variable <code>i</code> outside of the loop</li>
                <li>The loop begins with the keyword <code>while</code>.</li>
                <li>Inside the parentheses, we can insert a <b>until condition</b>. As long as the variable evaluates to <code>true</code> the block of code will loop.</li>
                <li>The <b>iterator</b> is <code>i--</code>. This means that each loop, <code>i</code> will have 1 subtracted to it.</li>
                <li>Inside the code block we can write any code we'd like to loop.</li>
                <li><b>Important!</b> we have to decrease our variable <code>i</code> inside the loop, or else it will loop FOREVER!</li>
              </ol>
              
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
