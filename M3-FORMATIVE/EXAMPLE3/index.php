<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USING USER DEFINED FUNCTION</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    <?php
    function calculate($param1, $param2, $param3) {
        $sum = $param1 + $param2 + $param3;
        $difference = $param1 - $param2 - $param3;
        $product = $param1 * $param2 * $param3;
        $quotient = $param1 / $param2 / $param3;
        
        return array(
            'sum' => $sum,
            'difference' => $difference,
            'product' => $product,
            'quotient' => $quotient
        );
    }
    
   
    $result = calculate(25, 13, 6);
    
   
    echo "<table>";
    echo "<tr><td colspan='2'>My Parameter values: 25, 13, 6</td></tr>";
    echo "<tr><td>Addition</td><td>" . $result['sum'] . "</td></tr>";
    echo "<tr><td>Subtraction</td><td>" . $result['difference'] . "</td></tr>";
    echo "<tr><td>Multiplication</td><td>" . $result['product'] . "</td></tr>";
    echo "<tr><td>Division</td><td>" . $result['quotient'] . "</td></tr>";
    echo "</table>";
    ?>
</body>
</html>