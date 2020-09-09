<?php 
	$title = "Operators";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Operators</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto"> 
            <h2>Math Operator</h2>
            <p>JS includes the general math operators that you can find on a calculator:</p>
            <ol>
              <li><b>Addition</b>: <code>"Peanut Butter" + "Jelly"</code> </li>
              <li><b>Subtraction</b>: <code>10 - 5</code></li>
              <li><b>Multiplication</b>: <code>2 * 4</code></li>
              <li><b>Division</b>: <code>27 : 9</code> </li>
              </ol>
            <p>Did you notice the addition operatoration? Yes we can and just can use addition for strings, which is usually called <b>String Interpolation</b></p>
            <p>JS also provide modulus, which will return the remainder after you divide a number:</p>
              <p>5. <b>Modulus</b>: <code>10 % 4</code> will be equal to 2</p>
            
          </div>
        </div>
        
        
        <div class="paragraph">
          <div class="col-sm-8 mx-auto"> 
            <h2>Comparison Operators</h2>
            <p>There are two comparisons you might be familiar with:</p>
            <ol>
              <li><b>Less than</b>: <code>2 &lt; 5</code> </li>
              <li><b>Greater than</b>: <code>10 &gt; 5</code></li>
              
              <li><b>Less than or equal to</b>: <code>3 &lt;= 3</code></li>
              <li><b>Greater than or equal to</b>: <code>27 &gt;= 9</code> </li>
            </ol>
            <p>Comparisons need two things to compare and they will always return a boolean: <code>true</code> or <code>false</code></p>
          </div>
        </div>

        <div class="jumbotron">
          <div class="col-sm-8 mx-auto"> 
            <h2>Equal and Not Equal</h2>
            <p>There are two more extremely useful comparisons we can make:</p>
            <ol>
              <li><b>Equal</b>: <code>===</code> </li>
              <li><b>Not Equal</b>: <code>!==</code></li>
            </ol>
            <p>The two operators above can be used to compare Strings also! Lets try it:</p>
            <div class="button"><a href="https://jsfiddle.net/Lmmezk1g/1/">Try it!</a></div>
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
