<html>
  <head>
    <style>
      .form {
        max-width: 50rem;
        margin: auto;
        width: 260px;
      }

      h3{
        font-family: initial;
        color: #0A1172;
      }

      .input1 {
        margin-bottom: -10px;
        margin-top: 50px;
      }

      input {
        margin-top: -20px;
        border-radius: 20px;
        width: 100%;
        font-size: 15px;
        padding: 6px;
        text-align: center;
      }

      .input2 {
        margin-top: 20px;
      }
      
      button {
        margin-top: 20px;
        background: #eb6864;
        border-radius: 20px;
        cursor: pointer;
        border: none;
        outline: none;
        width: 100%;
        padding: 10px 20px;
      }

      button:hover {
        opacity: 1;
      }

      p {
        color: #0A1172;
        padding: 10px;
        font-size: 15px;
        margin-top: -20px;
        margin-left: 535px;
      }
    </style>
  </head>
  <body style="background: #fce2e2;">

    <div class="form">

      <form method='get'>
        <div class="input1">
          <label for='number'><h3>Enter Number From (0-10): </h3></label><br>
          <input type='text' name='number'><br>
        </div>
      
        <div class="input2">
          <label for='number2'><h3>Enter Number To (0-10): </h3></label><br>
          <input type='text' name='number2' class="input"><br>
        </div>
        <button type='submit' name='solve'>Submit</button>
       

      </form><br>
    </div>
    

    <?php
          
    if (isset($_GET['solve'])) {
        $number = $_GET['number'];
        $number2 = $_GET['number2'];

        $result = 0;

        for($i = $number; $i <= $number2; $i++){
            $result += $i;        
        }
        echo "<p>Sum between $number to $number2 is: $result</p>";
    }
    ?>

    <div style="padding:10px">
      <a href="act5.php" style="text-decoration: none; font-size: 14px;"><img src="images/arrow.png" style="height: 10px; width: 10px; margin-left: 510px;"> Go Back</a>
    </div>
  </body>
</html>

