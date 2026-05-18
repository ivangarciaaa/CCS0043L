<?php
if (!isset($pageTitle)) {
    $pageTitle = "Short Story Studio";
}
if (!isset($pageTagline)) {
    $pageTagline = "Five short stories, one simple collection.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <div class="brand-title">Short Story Studio</div>
      <div class="brand-tagline"><?php echo htmlspecialchars($pageTagline); ?></div>
    </div>
    <nav class="site-nav">
      <a href="index.php">Home</a>
      <a href="story1.php">Story 1</a>
      <a href="story2.php">Story 2</a>
      <a href="story3.php">Story 3</a>
      <a href="story4.php">Story 4</a>
      <a href="story5.php">Story 5</a>
    </nav>
  </header>
  <main class="site-main">
