<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">
    <h1>Number 3: Two-Digit Decimal Combinations</h1>
    
    <h3>All Two-Digit Combinations (00-99):</h3>
    <div class="output">
        <?php

        $combinations = [];
        
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                
                $combinations[] = sprintf("%02d", $i * 10 + $j);
            }
        }
        
    
        echo implode(", ", $combinations) . ",";
        ?>
    </div>
</div>

</body>
</html>
