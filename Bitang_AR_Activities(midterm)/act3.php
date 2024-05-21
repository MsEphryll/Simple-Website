<?php include 'templates/header.php' ?>

<!-- Activity Number -->
<div class="card bg-light mb-3" id="actTitle";>
  <div class="card-body">
    <h2 class="act">ACTIVITY 3</h2>
    <h5 style="padding:5px; text-align:center;">Exploring PHP Operators</h5>
  </div>
</div>

<!-- Problems, Solutions, and Output -->
<div class="card border-primary mb-3" id="main">
  <div class="card-header">Problem 1</div>
  <div class="card-body">
    <p>
      A. Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result.
    </p>

    <p>
      B. Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"A. Area of a rectangle: "</span>;
        <span class="variable">$length</span> = 20;	
        <span class="variable">$width</span> = 30;	
        
        <span class="variable">$area</span> = <span class="variable">$length</span> * <span class="variable">$width</span>; 
        <span class="keyword">echo</span> <span class="string">"<span class="variable">$area</span>"</span>;  
      </code>
    </pre>

    <h6>B.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"B. Convert currency: "</span>; 
        <span class="variable">$amountPhp</span> = 50;	
        <span class="variable">$conversionRate</span> = 0.018; 

        <span class="variable">$convertedAmount</span> = <span class="variable">$amountPhp</span> * <span class="variable">$conversionRate</span>; 
        <span class="keyword">echo</span> <span class="string">"Equivalent in USD: "</span> . <span class="variable">$convertedAmount</span>;  
      </code>
    </pre>
      
    

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
				// output for Problem 1-A
				echo "<strong>A.</strong> Area of a rectangle: "; 
				$length = 20;
				$width = 30;

				$area = $length * $width;
				echo "$area";
				
				echo "<br>";

				// output for Problem 1-B
				echo "<strong>B.</strong> Convert currency: ";
				$amountPhp = 50;
				$conversionRate = 0.018;

				$convertedAmount = $amountPhp * $conversionRate;
				echo "<br>Equivalent in USD: " . $convertedAmount;

			?>
    </p>  
  </div>
</div>

<!-- Problem 2 -->
<div class="card border-secondary mb-3" id="main"">
  <div class="card-header">Problem 2</div>
  <div class="card-body">
  <p>
			A. Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators. Display the updated total.
		</p>
		<p>
			B. Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
		</p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
      <span class="keyword">echo</span> <span class="string">"A. Track fundraising: "</span>;  
        <span class="variable">$totalDonation</span> = 100; 
        <span class="variable">$newDonation</span> = 20; 
        <span class="variable">$totalDonation</span> += <span class="variable">$newDonation</span>;

        <span class="keyword">echo</span> <span class="string">"Total donation: $" </span>. <span class="variable">$totalDonation</span>; 
      </code>
    </pre>


    <h6>B.</h6>
    <pre class="code">
      <code>
      <span class="keyword">echo</span> <span class="string">"B. Voting system: "</span>;  
      <span class="variable">$candidate1Votes</span> = 49;
      <span class="variable">$candidate2Votes</span> = 78;
      <span class="variable">$userVote</span> = 1;

      <span class="variable">$candidate1Votes</span> += <span class="variable">$userVote</span>;
      <span class="keyword">echo</span> <span class="string">"Candidate 1 total votes: " . <span class="variable">$candidate1Votes</span> . ", Candidate 2 total votes: " . <span class="variable">$candidate2Votes</span></span>;
      </code>
    </pre>
      
    </p>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
        // output for Problem 2-A
				echo "<strong>A.</strong> Track fundraising: "; 
				$totalDonation = 100;
				$newDonation = 20;
				$totalDonation += $newDonation;

				echo "<br>Total donation: $" . $totalDonation;
				
				echo "<br>";

				// output for Problem 2-B
				echo "<strong>B.</strong> Voting system: ";
				$candidate1Votes = 49;
				$candidate2Votes = 78;
				$userVote = 1;

				$candidate1Votes += $userVote;
				echo "<br>Candidate 1 total votes: " . $candidate1Votes . ", Candidate 2 total votes: " . $candidate2Votes;
			?>
    </p> 
  </div>
</div>

<!-- Problem 3 -->
<div class="card border-success mb-3" id="main">
  <div class="card-header">Problem 3</div>
  <div class="card-body">
    <p>
      A. Compare the performance of two athletes in a race and determine the winner using comparison operators. Display the result.
		</p>
		<p>
      B. Evaluate the efficiency of two algorithms based on their execution times using comparison operators. Display the more efficient algorithm
		</p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
      <span class="keyword">echo</span> <span class="string">"A. Compare athlete times: "</span>;  
      <span class="variable">$athlete1</span> = 10.20; 
      <span class="variable">$athlete2</span> = 9.78; 

      <span class="variable">$winner</span> = (<span class="variable">$athlete1</span> < <span class="variable">$athlete2</span>) ? <span class="string">"Athlete 1"</span> : <span class="string">"Athelete 2"</span>; 
      <span class="keyword">echo</span> <span class="string">"The winner is: $winner"</span>;
      </code>
    </pre>

    <h6>B.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"B. Evaluate algorithm efficiency: "</span>; 
        <span class="variable">$firstAlgorithm</span> = 0.003;  
        <span class="variable">$secondAlgorithm</span> = 0.001;  

        <span class="variable">$faster</span> = (<span class="variable">$firstAlgorithm</span> < <span class="variable">$secondAlgorithm</span>) ? <span class="string">"First Algotrithm"</span> : <span class="string">"Second Algorithm"</span>; 
        <span class="keyword">echo</span> <span class="string">"Faster Algorithm is the $faster"</span>;  
      </code>
    </pre>
    
   

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
    <?php 
        // output for Problem 3-A
				echo "<strong>A.</strong> Compare athlete times: "; 
				$athlete1 = 10.20;
				$athlete2 = 9.78;

				$winner = ($athlete1 < $athlete2) ? "Athlete 1" : "Athelete 2";
				echo "<br>The winner is: $winner";
				
				echo "<br>";

				// output for Problem 3-B
				echo "<strong>B.</strong> Evaluate algorithm efficiency: ";
				$firstAlgorithm = 0.003;
				$secondAlgorithm = 0.001;

				$faster = ($firstAlgorithm < $secondAlgorithm) ? "First Algotrithm" : "Second Algorithm";
				echo "<br>Faster Algorithm is the $faster";
			?>
    </p> 
  </div>
</div>

<!-- Problem 4 -->
<div class="card border-danger mb-3" id="main">
  <div class="card-header">Problem 4</div>
  <div class="card-body">
    <p>
      A. Calculate the factorial of a number using postfix increment/decrement operations. Display the factorial.
    </p>
    <p>
      B. Simulate the movement of a vehicle along a track using prefix increment/decrement operations. Display the final position of the vehicle.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"A. Calculate factorial: "</span>; 
        <span class="variable">$number</span> = 10; 
        <span class="variable">$factorial</span> = 1;  

        <span class="keyword">for</span> (<span class="variable">$i</span> = 1; <span class="variable">$i</span> <= <span class="variable">$number</span>; <span class="variable">$i++</span>) {  
          <span class="variable">$factorial</span> *= <span class="variable">$i</span>;
        }  

        <span class="keyword">echo</span> <span class="string">"Factorial of <span class="variable">$number</span>: <span class="variable">$factorial</span>"</span>;  
      </code>
    </pre>



    <h6>B.</h6>
      <pre class="code">
        <code>
        <span class="keyword">echo</span> <span class="string">"B. Simulate vehicle movement: "</span>; 
        <span class="variable">$point</span> = 1;
        <span class="variable">$distance</span> = 15;

        <span class="variable">$point</span> += <span class="variable">$distance</span>;
        <span class="keyword">echo</span> <span class="string">"Position of the vehicle: <span class="variable">$point</span>"</span>;
        </code>
      </pre>



    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <?php 
        // output for Problem 4-A
				echo "<strong>A.</strong>
        Calculate factorial: "; 
				$number = 10;
				$factorial = 1;

				for ($i = 1; $i <= $number; $i++) {
					$factorial *= $i;
				}

				echo "<br>Factorial of $number: $factorial";
				
				echo "<br>";

				// output for Problem 4-B
				echo "<strong>B.</strong>
        Simulate vehicle movement: ";
				$point = 1;
				$distance = 15;

				$point += $distance;
				echo "<br>Position of the vehicle: $point";
			?>
    </p>
  </div>
</div>

<!-- Problem 5 -->
<div class="card border-warning mb-3" id="main">
  <div class="card-header">Problem 5</div>
  <div class="card-body">
    <p>
      A. Determine eligibility for a discount based on purchase amount and customer loyalty using logical operators. Display whether the customer is eligible for a discount.
    </p>
    <p>
      B. Design a decision-making system for a chatbot to respond to user queries using logical operators. Display the appropriate response based on the query.
    </p>

    <!-- Solution -->
    <h5>Solution:</h5>
    <h6>A.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"A. Determine discount
        eligibility: "</span>;  
        <span class="variable">$amount</span> = 500;  
        <span class="variable">$loyaltyDiscount</span> = <span class="boolean">false</span>; 

        <span class="variable">$discount</span> = (<span class="variable">$amount</span> > 300 <span class="comparator">&&</span> <span class="variable">$loyaltyDiscount</span>) ? <span class="string">"With Discount"</span> : <span class="string">"Without Discount"</span>;  

        <span class="keyword">echo</span> <span class="string">"Discount Eligibility: <span class="variable">$discount</span>"</span>;  
      </code>
    </pre>

    <h6>B.</h6>
    <pre class="code">
      <code>
        <span class="keyword">echo</span> <span class="string">"B. Chatbot decision-making: "</span>;
        <span class="variable">$query</span> = <span class="string">"time"</span>; 
        <span class="variable">$time</span> = (<span class="variable">$query</span> == <span class="string">"time"</span>) ? <span class="string">"It's midnight" </span>: <span class="string">"Invalid!" </span>;  

        <span class="keyword">echo</span> <span class="string">"Response of the Chatboot: <span class="variable">$time</span>"</span>; 
      </code>
    </pre>

    <!-- Output -->
    <h5>Output:</h5>
    <p class="txt ">
      <?php 
       // output for Problem 5-A
				echo "<strong>A.</strong> Determine discount
				eligibility: "; 
				$amount = 500;
				$loyaltyDiscount = false;

				$discount = ($amount > 300 && $loyaltyDiscount) ? "With Discount" : "Without Discount";

				echo "<br>Discount Eligibility: $discount";
				
				echo "<br>";

				// output for Problem 5-B
				echo "<strong>B.</strong> Chatbot decision-making: ";
				$query = "time";
				$time = ($query == "time") ? "It's midnight" : "Invalid!";

				echo "<br>Response of the Chatboot: $time";
			?>
    </p> 
  </div>
</div>

<div id="secfoot">
  <div   id="prevnex";>
    <div class="links">
      <a href="act2.php" class="prev"> <button type="button" class="btn btn-primary" id="prev">Previous</button></a>

      <a href="act4.php" class="next"> <button type="button" class="btn btn-primary" id="prev">Next</button></a>
    </div>
  </div>
</div>

<?php include 'templates/footer.php' ?>