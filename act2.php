<?php include 'templates/header.php' ?>

<!-- Activity Number -->
<div class="card btn-primary mb-3" id="actTitle";>
  <div class="card-body">
    <h2 class="act">ACTIVITY 2</h2>
    <h5 style="padding:5px; text-align:center;">Variable in PHP</h5>
  </div>
</div> 

  <!-- Problem 1 -->
  <div class="card border-primary mb-3" id="main">
    <div class="card-header">Problem 1</div>
    <div class="card-body">

      <!-- Instructions -->
      <p class="card-text">Write a program to print “Hello World” using echo</p>
      <h6>Description:</h6>
      <p class="txt">
        Write a program to print “Hello World” using echo only?
      </p>
      <h6>Conditions:</h6>
      <p class="txt">You can not use any variable</p>

      <!-- Solution -->
      <h5>Solution:</h5>
      <pre class="code">
        <code>
          <span class="keyword">echo</span> <span class="string">"Hello World"</span>;
        </code>
      </pre>

      <!-- Output -->
      <h5>Output:</h5>
      <p class="txt ">
        <?php echo "Hello World"; ?>
      </p>  
    </div>
  </div>

  <!-- Problem 2 -->
  <div class="card border-secondary mb-3" id="main">
    <div class="card-header">Problem 2</div>
    <div class="card-body">
      <!-- Instructions -->
      <p class="card-text">Write a program to print “Hello PHP” using variable</p>

      <h6>Description:</h6>
      <p style="margin-left: 10px;">
        Write a program to print “Hello PHP” using php variable?
      </p>
      <h6>Conditions:</h6>
      <p style="margin-left: 10px;">
        You can not use text directly in echo but can use variable.
      </p>

      <!-- Solution -->
      <h5>Solution:</h5>
      <pre class="code">
        <code>
        <span class="variable">$hello</span> = <span class="string">"Hello PHP"</span>;
        <span class="keyword">echo</span> <span class="string">"$hello"</span>;
        </code>
      </pre>

      <h5>Output:</h5>
      <p style="margin-left: 10px;">
        <?php $hello = "Hello PHP";
          echo "$hello" 
        ?>
      </p>
    </div>
  </div>

  <!-- Problem 3 -->
  <div class="card border-success mb-3" id="main">
    <div class="card-header">Problem 3</div>
    <div class="card-body">
    <p class="card-text">Write a program to print a string using echo + variable.</p>

    <h6>Description:</h6>
      <p style="margin-left: 10px;">
        Write a program to print “Welcome to the PHP World” using some part of the text in variable & some part directly in echo.
      </p>
      <h6>Conditions:</h6>
      <p style="margin-left: 10px;">
        You have to use a variable that contains string “PHP World”.
      </p>

      <h5>Solution:</h5>
      <pre class="code">
        <code>
          <span class="variable">$a</span> = <span class="string">"PHP World"</span>;
          <span class="keyword">echo</span> <span class="string">"Welcome to <span class="variable">$a</span>"</span>;
        </code>
      </pre>

      <h5>Output:</h5>
      <p style="margin-left: 10px;">
        <?php 
        $a = "PHP World"; 
        echo "Welcome to $a";
        ?>
      </p>
    </div>
  </div>

  <!-- button-next-previous -->
  <div id="secfoot">
    <div   id="prevnex">
      <div class="links">
        <a href="#" class="prev"> <button type="button" class="btn btn-primary disabled" id="prev">Previous</button></a>

        <a href="act3.php" class="next"> <button type="button" class="btn btn-primary" id="prev">Next</button></a>
      </div>
    </div>
  </div>
  
<?php include 'templates/footer.php' ?>