
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basic Math Operations in PHP Using</title>
        <link rel="stylesheet" href="assets/css/hv.css">
    </head>
    <body>          
        <h3 align="center"> Basic Math Operations in PHP</h3>
          <div class="box">
            <div class="container">
                <form action="phpforact4.php" method="post">
                    <label for="txtNum1"><b>First Number:</b></label>
                    <input class="selectss" type="number" name="txtNum1" id="txtNum1" value="<?php echo $num1; ?>" required>

                    <label for="txtNum2"><b>Second Number:</b></label>
                    <input class="selectss" type="number" name="txtNum2" id="txtNum2" value="<?php echo $num2; ?>" required>
                  <div class="operationss">
                    <label for="txtOper"><b>Select Operator:</b></label>
                    <select name="txtOper" id="txtOper" value="<?php echo $oper; ?>" required>
                        <option value="Addition">Addition</option>
                        <option value="Subtraction">Subtraction</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Division">Division</option>
                    </select>
                  </div>

                    <button type="submit" name="btnSolve" class="btnSolve">Solve</button>    
                </form>
                <div style="padding:10px">
                <a href="act4.php" style="text-decoration: none; font-size: 14px;"><img src="images/arrow.png" style="height: 10px; width: 10px;"> Go Back</a>
                </div>
            </div>
        </div>
    </body>
</html>
