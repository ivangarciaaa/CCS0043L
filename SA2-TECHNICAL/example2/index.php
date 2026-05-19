<?php

$shapes = array(
    array(
        "values" => "s = 5",
        "formula" => "V = s³",
        "answer" => 125
    ),
    array(
        "values" => "s = 3",
        "formula" => "V = s³",
        "answer" => 27
    ),
    array(
        "values" => "s = 10",
        "formula" => "V = s³",
        "answer" => 1000
    ),
    array(
        "values" => "r = 5",
        "formula" => "V = (4/3)πr³",
        "answer" => 524
    ),
    array(
        "values" => "r = 3",
        "formula" => "V = (4/3)πr³",
        "answer" => 113
    ),
    array(
        "values" => "r = 4, h = 10",
        "formula" => "V = πr²h",
        "answer" => 502
    ),
    array(
        "values" => "r = 3, h = 8",
        "formula" => "V = πr²h",
        "answer" => 226
    ),
    array(
        "values" => "r = 5, h = 12",
        "formula" => "V = (1/3)πr²h",
        "answer" => 314
    ),
    array(
        "values" => "l = 5, w = 4, h = 3",
        "formula" => "V = l × w × h",
        "answer" => 60
    ),
    array(
        "values" => "b = 6, h = 9",
        "formula" => "V = (1/3)b²h",
        "answer" => 108
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Volume of Shapes</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($shapes as $shape): ?>
                <tr>
                    <td><?php echo $shape['values']; ?></td>
                    <td><?php echo $shape['formula']; ?></td>
                    <td><?php echo $shape['answer']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
