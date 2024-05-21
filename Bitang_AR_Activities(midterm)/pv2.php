<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
    <style>
      body {
        background-color: #fce2e2;
        padding: 30px;
      }

      label {
        font-size: 18px;
      }

      h2, label {
        color: #0A1172;
        padding: 10px;
      }

      form { 
        padding: 10px;
      }

      textarea {
        width: 100%;
        resize: horizontal;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        transition: border-color .3s;
        outline: none;
      }

      textarea:focus {
        border-color: #eb6864;
      }

      input[type=submit], input[type=button] {
        background-color: #04AA6D;
        border: none;
        width: 150px;
        border-radius: 20px;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }

    </style>
</head>
<body>
    <h2>Word Counter</h2>
    <form action="php2foract4.php" method="GET">
        <label for="message">Enter your message:</label><br><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Count Words">
    </form>
    <form action="act4.php" class="form2">
      <input type="submit" value="Go Back">
    </form>
    
</body>
</html>