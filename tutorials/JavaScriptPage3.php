<?php 
	$title = "Data/Comments";
    $section ="JavaScript";
	require_once "../includes/jsHeader.php"; 
?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Data Type and Comments</h1>
          <div class="jumbotron">
            <div class="col-sm-8 mx-auto">
              <h2>Data Type</h2>
              <p>There are three essential data types in Javascript:</p>
              <ol>
                <li><b>String</b>: Any grouping of words or numbers surrounded by single quotes ‘....’ or double quotes “....”</li>
                <li><b>Number</b>: Any number, including numbers with decimals. The number is written without quotes</li>
                <li><b>Boolean</b>: This is always one of the two words: <b>true</b> or <b>false</b>, with no quotations</li>
              </ol>
              <p>You can make the <code>console.log()</code> to print out any of these types of data</p>
            </div>
          </div>

          <div class="paragraph">
            <div class="col-sm-8 mx-auto"> 
              <h2>Comments</h2>
              <p>Comments are lines that are not evaluated when the codes run. They exists just for human readers.</p>
              <p>Comments can be extremely useful when we are looking back at code or when other people are looking at our code.</p>
              <ol>
              	  <li>Single line comment: <code>//Hello</code></li>
              	  <li>Multi-line comment:</li>
              	  </ol>
              	  <div>
              	  <p><code>/*</code></p>
              	  <p><code>This is world</code></p>
              	  <p><code>*/</code></p>
              	  </div>
              
              <p>You can use comments to comment out the written code too!</p>
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
