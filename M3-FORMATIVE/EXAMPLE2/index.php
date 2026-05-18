<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using ARRAYS</title>
    <link rel = "stylesheet" href="style.css">
</head>

<body>
    <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 10);

    $sum = 0;
    $product = 1;
    $difference = $numbers[0];
    $quotient = $numbers[0];

    foreach ($numbers as $num) {
        $sum += $num;
        $product *= $num;
    }

    for ($i = 1; $i < count($numbers); $i++) {  
        $difference -= $numbers[$i];
        $quotient /= $numbers[$i];
    }

    
    echo "<table>";
    echo "<tr><td colspan='2'>Array list " . implode(", ", $numbers) . "</td></tr>";
    echo "<tr><td>Addition</td><td>" . $sum . "</td></tr>";
    echo "<tr><td>Subtraction</td><td>" . $difference . "</td></tr>";
    echo "<tr><td>Multiplication</td><td>" . $product . "</td></tr>";
    echo "<tr><td>Division</td><td>" . sprintf("%.16e", $quotient) . "</td></tr>";
    echo "</table>";
    ?>
</body>

</html>