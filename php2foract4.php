<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
    <style>
      body {
        background-color: #fce2e2;
        padding: 30px; 
      }

      h1 {
        color: #0A1172;
        padding: 10px;
      }

      p {
        color: #0A1172;
        padding: 10px;
        font-size: 18px;
      }
    </style>
</head>
<body>
    <h1>Word Count</h1>
    <?php
    if(isset($_GET['message'])) {
        $message = $_GET['message'];
        $word_count = str_word_count($message);
        $result =  "<p>The number of words in your message is: $word_count</p>";

        if ($word_count != 0) {
          echo $result; 
        } else {
          echo"<p>No message submitted.</p>";
        }
        
    } else {
        $result =  "<p>No message submitted.</p>";
    }
    ?>

  <div style="padding:10px; margin-left: 3px;">
    <a href="pv2.php" style="text-decoration: none; font-size: 14px;"><img src="images/arrow.png" style="height: 10px; width: 10px;"> Go Back</a>
  </div>
</body>
</html>