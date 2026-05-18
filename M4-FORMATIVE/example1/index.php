<?php
require 'partials/header.php';
require 'partials/navigation.php';
?>

<main>
    <div class="container">
        <h1>Short Stories Collection</h1>
        <p>Welcome to our simple stories website. Select a story from the menu above to read.</p>
        
        <?php
if (!isset($_GET['story'])) {
echo "<div class='stories-grid'>";
$stories = array(
'story1' => 'The Lost Key',
'story2' => 'The Cat in the Rain',
'story3' => 'The Garden',
'story4' => 'The Old Train Station',
'story5' => 'The Letter'
);
foreach ($stories as $story_id => $story_title) {
echo "<a href='index.php?story=" . $story_id . "' class='story-box'>";
include 'assets/' . $story_id . '.svg';
                    echo "<h3>" . $story_title . "</h3>";
                    echo "</a>";
                }
echo "</div>";
} else {
$story = $_GET['story'];
$story_file = 'stories/' . $story . '.php';
                
if (file_exists($story_file)) {
include $story_file;
} else {
echo "<p>Story not found.</p>";
}
}
?>
    </div>
</main>

<?php
    
    require 'partials/footer.php';
?>
