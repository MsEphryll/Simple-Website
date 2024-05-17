<?php
// problem 1
echo "Problem 1";

$numStar = 5;
$printStar = "<br>";

for($i=1; $i<=$numStar; $i++) {
    $printStar .= "* ";
    echo $printStar . "\n";
}

// problem 2
echo "<br><br>Problem 2<br>";
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


echo "<br><br>Problem 3";
?>


<html>
<body>

    <form method='get' action='act5.php'>
        <label for='number'>Enter Number From: </label><br>
        <input type='text' name='number'><br>

        <label for='number2'>Enter Number To: </label><br>
        <input type='text' name='number2'><br>

        <button type='submit'>Submit</button> 

      </form><br>
    <?php
        
    if (isset($_GET['number']) && isset($_GET['number2'])) {
        $number = $_GET['number'];
        $number2 = $_GET['number2'];

        $result = 0;

        for($i = $number; $i <= $number2; $i++){
            $result += $i;        
        }
        echo "Sum between $number to $number2 is $result";
    }
    ?>

</body>
</html>

<?php

// problem 4
echo "<br><br>Problem 4<br>";

echo "<table border='1' style='border-collapse:collapse'>" ;

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
