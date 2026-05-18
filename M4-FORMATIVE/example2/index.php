<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>📝 String Functions in PHP</h1>
        <p class="subtitle">Array with 20 names - String manipulation exercise</p>
    </header>

    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number of Characters</th>
                        <th>Uppercase First Character</th>
                        <th>Replace Vowels with @</th>
                        <th>Position of 'a'</th>
                        <th>Reverse Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $names = array(
                        "chrisa",
                        "jennifer",
                        "michael",
                        "patricia",
                        "robert",
                        "barbara",
                        "james",
                        "catherine",
                        "david",
                        "margaret",
                        "daniel",
                        "jessica",
                        "matthew",
                        "sarah",
                        "anthony",
                        "karen",
                        "andrew",
                        "nancy",
                        "joseph",
                        "susan"
                    );

                    foreach ($names as $name) {
                        $char_count = strlen($name);


                        $uppercase_first = ucfirst($name);

                        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
                        $replace_vowels = str_replace($vowels, '@', $name);

                        $position_a = strpos($name, 'a');
                        $position_a_display = ($position_a !== false) ? $position_a : "Not found";

                        $reverse_name = strrev($name);

                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($name) . "</td>";
                        echo "<td>" . $char_count . "</td>";
                        echo "<td>" . htmlspecialchars($uppercase_first) . "</td>";
                        echo "<td>" . htmlspecialchars($replace_vowels) . "</td>";
                        echo "<td>" . $position_a_display . "</td>";
                        echo "<td>" . htmlspecialchars($reverse_name) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 String Functions Exercise. Created using PHP string manipulation functions.</p>
    </footer>
</body>
</html>
