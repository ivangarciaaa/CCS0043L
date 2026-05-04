<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Measure Conversion Chart – Lengths (UK)</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<h2>MEASURE CONVERSION CHART – LENGTHS (UK)</h2>

<?php
$metric = [
    ["1 centimetre", "=", "10 millimetres", "1 cm", "=", "10 mm"],
    ["1 decimetre", "=", "10 centimetres", "1 dm", "=", "10 cm"],
    ["1 metre", "=", "100 centimetres", "1 m", "=", "100 cm"],
    ["1 kilometre", "=", "1000 metres", "1 km", "=", "1000 m"]
];

$imperial = [
    ["1 foot", "=", "12 inches", "1 ft", "=", "12 in"],
    ["1 yard", "=", "3 feet", "1 yd", "=", "3 ft"],
    ["1 chain", "=", "22 yards", "1 ch", "=", "22 yd"],
    ["1 furlong", "=", "220 yards (or 10 chains)", "1 fur", "=", "220 yd (or 10 ch)"],
    ["1 mile", "=", "1760 yards (or 8 furlongs)", "1 mi", "=", "1760 yd (or 8 fur)"]
];

$metricToImperial = [
    ["1 millimetre", "=", "0.03937 inches", "1 mm", "=", "0.03937 in"],
    ["1 centimetre", "=", "0.39370 inches", "1 cm", "=", "0.39370 in"],
    ["1 metre", "=", "39.37008 inches", "1 m", "=", "39.37008 in"],
    ["1 metre", "=", "3.28084 feet", "1 m", "=", "3.28084 ft"],
    ["1 metre", "=", "1.09361 yards", "1 m", "=", "1.09361 yd"],
    ["1 kilometre", "=", "1093.6133 yards", "1 km", "=", "1093.6133 yd"],
    ["1 kilometre", "=", "0.62137 miles", "1 km", "=", "0.62137 mi"]
];

$imperialToMetric = [
    ["1 inch", "=", "2.54 centimetres", "1 in", "=", "2.54 cm"],
    ["1 foot", "=", "30.48 centimetres", "1 ft", "=", "30.48 cm"],
    ["1 yard", "=", "91.44 centimetres", "1 yd", "=", "91.44 cm"],
    ["1 yard", "=", "0.9144 metres", "1 yd", "=", "0.9144 m"],
    ["1 mile", "=", "1609.344 metres", "1 mi", "=", "1609.344 m"],
    ["1 mile", "=", "1.609344 kilometres", "1 mi", "=", "1.609344 km"]
];

function renderTable($title, $data) {
    echo "<table>";
    echo "<caption>$title</caption>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

renderTable("METRIC CONVERSIONS", $metric);
renderTable("IMPERIAL CONVERSIONS", $imperial);
renderTable("METRIC → IMPERIAL CONVERSIONS", $metricToImperial);
renderTable("IMPERIAL → METRIC CONVERSIONS", $imperialToMetric);
?>

</body>
</html>