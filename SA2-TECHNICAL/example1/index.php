<?php

$fruits = array(
    array(
        "image" => "assets/apple.svg",
        "name" => "Apple",
        "color" => "Red",
        "facts" => "Apples are rich in fiber and vitamin C. They help improve digestion and boost immunity."
    ),
    array(
        "image" => "assets/banana.svg",
        "name" => "Banana",
        "color" => "Yellow",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ),
    array(
        "image" => "assets/blueberry.svg",
        "name" => "Blueberry",
        "color" => "Blue",
        "facts" => "Blueberries are packed with antioxidants and have anti-inflammatory properties that promote heart health."
    ),
    array(
        "image" => "assets/cherry.svg",
        "name" => "Cherry",
        "color" => "Red",
        "facts" => "Cherries contain melatonin which helps regulate sleep cycles and improve sleep quality."
    ),
    array(
        "image" => "assets/grape.svg",
        "name" => "Grape",
        "color" => "Purple",
        "facts" => "Grapes are high in resveratrol, a powerful antioxidant that supports cardiovascular health."
    ),
    array(
        "image" => "assets/kiwi.svg",
        "name" => "Kiwi",
        "color" => "Green",
        "facts" => "Kiwis are excellent sources of vitamin C and vitamin K, supporting immune function and bone health."
    ),
    array(
        "image" => "assets/mango.svg",
        "name" => "Mango",
        "color" => "Orange",
        "facts" => "Mangoes are rich in vitamin A and are known as the king of fruits for their nutritional value."
    ),
    array(
        "image" => "assets/orange.svg",
        "name" => "Orange",
        "color" => "Orange",
        "facts" => "Oranges are loaded with vitamin C and help reduce the risk of heart disease and kidney stones."
    ),
    array(
        "image" => "assets/strawberry.svg",
        "name" => "Strawberry",
        "color" => "Red",
        "facts" => "Strawberries are full of vitamin C, potassium, and folate, making them excellent for heart health."
    ),
    array(
        "image" => "assets/watermelon.svg",
        "name" => "Watermelon",
        "color" => "Red",
        "description" => "A large juicy fruit with watery flesh",
        "facts" => "Watermelons contain 92% water and are rich in lycopene, which has powerful antioxidant and anti-inflammatory properties."
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>My Fruits</h1>
        
        <table class="fruit-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($fruits as $fruit): ?>
                <tr>
                    <td class="image-cell">
                        <img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>">
                    </td>
                    <td class="name-cell">
                        <strong><?php echo $fruit['name']; ?></strong>
                    </td>
                    <td class="description-cell">
                        <span class="color">Color: <?php echo $fruit['color']; ?></span><br>
                       
                    </td>
                    <td class="facts-cell">
                        <?php echo $fruit['facts']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
