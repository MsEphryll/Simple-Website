<?php include 'templates/header.php' ?>

<!-- Activity Number -->
<div class="card bg-light mb-3" id="actTitle";>
  <div class="card-body">
    <h2 class="act">ACTIVITY 5</h2>
    <h5 style="padding:5px; text-align:center;">PHP Loops</h5>
  </div>
</div>

<!-- Problems, Solutions, and Output -->
<div class="card border-primary mb-3" id="main">
  <div class="card-header">Problem 1</div>
  <div class="card-body">
    <p>
      Write a PHP script the will output the following using loop
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <span class="variable">$numStar</span> = 5;
        <span class="variable">$printStar</span> = <span class="string">"<<span class="tag">br</span>>"</span>;

        <span class="keyword">for</span>(<span class="variable">$i</span>=1; <span class="variable">$i</span><=<span class="variable">$numStar</span>; <span class="variable">$i</span>++) {
          <span class="variable">$printStar</span> .= <span class="string">"* "</span>;
          <span class="keyword">echo</span> <span class="variable">$printStar</span> . <span class="string">"\n"</span>;
        }
      </code>
    </pre>
      
  
    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
				// output for Problem 1
				$numStar = 5;
        $printStar = "<br>";

        for($i=1; $i<=$numStar; $i++) {
            $printStar .= "* ";
            echo $printStar . "\n";
        }

			?>
    </p>  
  </div>
</div>

<!-- Problem 2 -->
<div class="card border-secondary mb-3" id="main"">
  <div class="card-header">Problem 2</div>
  <div class="card-body">
  <p>
    Write a PHP script the will output the following using loop
	</p>


  <!-- Solution -->
  <h5>Solution:</h5>
  <h6>A.</h6>
  <pre class="code">
    <code>
      <span class="variable">$numStar</span> = 5;

      <span class="keyword">for</span>(<span class="variable">$i</span>=1; <span class="variable">$i</span><=<span class="variable">$numStar</span>; <span class="variable">$i</span>++) {
        <span class="keyword">for</span>(<span class="variable">$j</span>=0; <span class="variable">$j</span><<span class="variable">$i</span>; <span class="variable">$j</span>++) {
            <span class="keyword">echo</span> <span class="string">"* "</span>;
          }
          <span class="keyword">echo</span> <span class="string">"<<span class="tag">br</span>>"</span>;
      }

      <span class="keyword">for</span>(<span class="variable">$i</span>=<span class="variable">$numStar</span>; <span class="variable">$i</span> >= 1; <span class="variable">$i</span>--){
        <span class="keyword">for</span>(<span class="variable">$j</span>=0; <span class="variable">$j</span><<span class="variable">$i</span>; <span class="variable">$j</span>++) {
            <span class="keyword">echo</span> <span class="string">"* "</span>;
          }
          <span class="keyword">echo</span> <span class="string">"<<span class="tag">br</span>>"</span>;
      }
    </code>
  </pre>
      
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
       $numStar = 5;

       for($i=1; $i<=$numStar; $i++) {
           for($j=0; $j<$i; $j++) {
               echo "* ";
           }
           echo "<br>";
       }
       
       for($i=$numStar; $i >= 1; $i--){
           for($j=0; $j<$i; $j++) {
               echo "* ";
           }
           echo "<br>";
       }
			?>
    </p> 
  </div>
</div>

<!-- Problem 3 -->
<div class="card border-success mb-3" id="main">
  <div class="card-header">Problem 3</div>
  <div class="card-body">
    <p>
      Create a script using a for loop to add all the integers between 0 and 10 and display the total. The range should be user inputted.
		</p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <<span class="tag">html</span>>
        <<span class="tag">body</span>>

            <<span class="tag">form method='get' action='act5.php'</span>>
                <<span class="tag">label for='number'</span>>Enter Number From: <<span class="tag">/label</span>><<span class="tag">br</span>>
                <<span class="tag">input type='text' name='number'</span>><<span class="tag">br</span>>

                <<span class="tag">label for='number2'</span>>Enter Number To: <<span class="tag">/label</span>><<span class="tag">br</span>>
                <<span class="tag">input type='text' name='number2'</span>><<span class="tag">br</span>>

                <<span class="tag">button type='submit'</span>>Submit<<span class="tag">/button</span>> 

              <<span class="tag">/form</span>><<span class="tag">br</span>>

        <<span class="php">?php</span>
              
        <span class="keyword">if</span>(isset(<span class="array">$_GET</span>[<span class="string">'number'</span>]) && isset(<span class="array">$_GET</span>[<span class="string">'number2'</span>])) {
          <span class="variable">$number</span> = <span class="array">$_GET</span>[<span class="string">'number'</span>];
            <span class="variable">$number2</span> = <span class="array">$_GET</span>[<span class="string">'number2'</span>];

            <span class="variable">$result</span> = 0;

            <span class="keyword">for</span>(<span class="variable">$i</span> = <span class="variable">$number</span>; <span class="variable">$i</span><= <span class="variable">$number2</span>; <span class="variable">$i</span>++){
              <span class="variable">$result</span> += <span class="variable">$i</span>;        
            }
            <span class="keyword">echo</span> <span class="string">"Sum between <span class="variable">$number</span> to <span class="variable">$number2</span> is <span class="variable">$result</span>"</span>;
        }
        <span class="php">?</span>>
        
        <<span class="tag">/body</span>>
        <<span class="tag">/html</span>>
      </code>
    </pre>

    <!-- Output -->
    <h5>Output:</h5>
    <div style="padding:10px;">
        <button type="button" style="background-color:#8e1410; border:none; width: 140px; height: 40px; border-radius: 15px;" >
          <a href="act5Prob2.php" style="text-decoration: none;color: white; "> <img src="images/arrow.png" style="height:10px; width:10px;"> Demo</a>
        </button>
      </div>
  </div>
</div>  


<!-- Problem 4 -->
<div class="card border-danger mb-3" id="main">
  <div class="card-header">Problem 4</div>
  <div class="card-body">
    <p>
      Write a PHP script that creates the following table (use for loops).
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> "<<span class="tag">table border='1' style='border-collapse:collapse'</span>>" ;

        <span class="keyword">for</span> (<span class="variable">$i</span> = 1; <span class="variable">$i</span> <= 10; <span class="variable">$i</span>++) {
            <span class="keyword">echo</span> "<<span class="tag">tr</span>>";
            <span class="keyword">for</span> (<span class="variable">$j</span> = 1; <span class="variable">$j</span> <= 10; <span class="variable">$j</span>++) {
              <span class="variable">$result</span> = "<<span class="tag">td</span>>". (<span class="variable">$i</span> * <span class="variable">$j</span>) . <span class="string">"<<span class="tag">/td</span>>"</span>;
              <span class="keyword">echo</span> <span class="variable">$result</span>;
            }
            <span class="keyword">echo</span> <span class="string">"<<span class="tag">/tr</span>>"</span>;
        }

        <span class="keyword">echo</span> <span class="string">"<<span class="tag">/table</span>>"</span> ;
      </code>
    </pre> 

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <html>
        <head>
          <style>
            table {
              border-collapse: collapse;
            }
          </style>
        </head>
          <body>
          <?php 
          echo "<table class='table'>";

          for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
              $result = "<td>". ($i * $j) . "</td>";
              echo $result;
            }
            echo "</tr>";
          }
          echo "</table>";
        ?>
        </body>
      </html>
      
    </p>
  </div>
</div>

<div id="secfoot">
  <div   id="prevnex";>
    <div class="links">
      <a href="act4.php" class="prev"> <button type="button" class="btn btn-primary" id="prev">Previous</button></a>

      <a href="act4.php" class="next"> <button type="button" class="btn btn-primary disabled" id="prev">Next</button></a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php' ?>