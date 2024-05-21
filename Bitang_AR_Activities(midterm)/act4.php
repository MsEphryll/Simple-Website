<?php include 'templates/header.php' ?>

<div class="card bg-light mb-3" id="actTitle";>
  <div class="card-body">
    <h2 class="act">ACTIVITY 4</h2>
    <h5 style="padding:5px; text-align:center;">Passing Variables on the URL</h5>
  </div>
</div>

<!-- Problems, Solutions, and Output -->
<div class="card border-primary mb-3" id="main">
  <div class="card-header">Problem 1</div>
  <div class="card-body">
    <p>
      Create a simple form with two input fields for the user to enter two numbers performs arithmetic operations (addition, subtraction, multiplication, division) on them. The form submits the data to a PHP script using the GET method.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <pre class="code">
      <code>
      <span class="php"> < ?php </span>
          <span class="variable">$num1</span> = <span class="variable">$num2</span> = <span class="variable">$oper</span> = <span class="variable">$answer</span> = <span class="variable">$infotext</span> = <span class="string">""</span>;

          <span class="keyword">if</span>(isset(<span class="array">$_POST</span>[<span class="string">'btnSolve'</span>])) 
          { 
            <span class="comment">// Get the values from the form</span>
            <span class="variable">$num1</span>   = <span class="array">$_POST</span>[<span class="string">'txtNum1'</span>];
            <span class="variable">$num2</span>  = <span class="array">$_POST</span>[<span class="string">'txtNum2'</span>];
            <span class="variable">$oper</span>   = <span class="array">$_POST</span>[<span class="string">'txtOper'</span>];

            <span class="keyword">switch</span> (<span class="variable">$oper</span>) {
              <span class="keyword">case</span> <span class="string">"Addition"</span>:
                <span class="variable">$answer</span> = <span class="variable">$num1</span> + <span class="variable">$num2</span>;
                <span class="variable">$infotext</span> = <span class="variable">$num1</span>.<span class="string">" + "</span>.<span class="variable">$num2</span>;
                <span class="keyword">break</span>;
              <span class="keyword">case</span> <span class="string">"Subtraction"</span>:
                <span class="variable">$answer</span> = <span class="variable">$num1</span> - <span class="variable">$num2</span>;
                <span class="variable">$infotext</span> = <span class="variable">$num1</span>.<span class="string">" - "</span>.<span class="variable">$num2</span>;
                <span class="keyword">break</span>;
              <span class="keyword">case</span> <span class="string">"Multiplication"</span>:
                <span class="variable">$answer</span> = <span class="variable">$num1</span> * <span class="variable">$num2</span>;
                <span class="variable">$infotext</span> = <span class="variable">$num1</span>.<span class="string">" x "</span>.<span class="variable">$num2</span>;
                <span class="keyword">break</span>;
              <span class="keyword">case</span> <span class="string">"Division"</span>:
                <span class="keyword">if</span> (<span class="variable">$num2</span> == 0) {
                <span class="variable">$answer</span> =  <span class="string">"cannot divide a number with zero!"</span>;
              } <span class="keyword">else</span> {
                <span class="variable">$answer</span> = <span class="variable">$num1</span> / <span class="variable">$num2</span>;
                <span class="variable">$infotext</span> = <span class="variable">$num1</span>.<span class="string">" / "</span>.<span class="variable">$num2</span>;
                <span class="keyword">break</span>;
              }
                }
                <span class="variable">$answer</span>=<span class="string">''</span>.<span class="variable">$infotext</span>.<span class="string">' = '</span>.<span class="variable">$answer</span>.<span class="string">''</span>;
            }
          <span class="php">?></span>
      </code>
    </pre>
    

    <h5>Output:</h5>
    <div style="padding:10px;">
      <button type="button" style="background-color:#8e1410; border:none; width: 110px; height: 40px; border-radius: 15px;" >
        <a href="pv.php" style="text-decoration: none;color: white; "> <img src="images/arrow.png" style="height:10px; width:10px;"> Calculator</a>
      </button>
    </div>
  </div>
</div>


<!-- Problem 2 -->
<div class="card border-secondary mb-3" id="main">
    <div class="card-header">Problem 2</div>
    <div class="card-body">
      <!-- Instructions -->
      <p class="card-text">Create a simple form that allows to input a message and counts the number of words in it. The form submits the data to a PHP script using the GET method.</p>

      

      <!-- Solution -->
      <h5>Solution:</h5>
      <pre class="code">
        <code>
        <span class="php"> < ?php </span>
        <span class="keyword">if</span>(isset(<span class="array">$_GET</span>[<span class="string">'message'</span>])) {
            <span class="variable">$message</span> = <span class="array">$_GET</span>[<span class="string">'message'</span>];
            <span class="variable">$word_count</span> = <span class="function">str_word_count</span>(<span class="variable">$message</span>);
            <span class="variable">$result</span> =  <span class="string">"The number of words in your message is: <span class="variable">$word_count</span>"</span>;

            <span class="keyword">if</span> (<span class="variable">$word_count</span> != 0) {
              <span class="keyword">echo</span> <span class="variable">$result</span>; 
            } <span class="keyword">else</span> {
              <span class="keyword">echo</span> <span class="string">"No message submitted."</span>;
            }
                
            } <span class="keyword">else</span> {
              <span class="variable">$result</span> =  <span class="string">"No message submitted."</span>;
            }
        <span class="php"> < ? </span>
        </code>
          </pre>
      
      
      <h5>Output:</h5>
      <div style="padding:10px;">
        <button type="button" style="background-color:#8e1410; border:none; width: 140px; height: 40px; border-radius: 15px;" >
          <a href="pv2.php" style="text-decoration: none;color: white; "> <img src="images/arrow.png" style="height:10px; width:10px;"> Word Counter</a>
        </button>
      </div>
    </div>
  </div>

  <div id="secfoot">
  <div   id="prevnex";>
    <div class="links">
      <a href="act3.php" class="prev"> <button type="button" class="btn btn-primary" id="prev">Previous</button></a>

      <a href="act5.php" class="next"> <button type="button" class="btn btn-primary" id="prev">Next</button></a>
    </div>
  </div>
</div>


<?php include 'templates/footer.php' ?>