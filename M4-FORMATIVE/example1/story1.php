<?php
$pageTitle = "Story 1 - The Clockmaker's Kite";
$pageTagline = "Story 1";
require "header.php";
?>
<article class="story-page">
  <div class="story-hero">
    <img src="assets/story1.svg" alt="Kite above a town at dusk">
    <div class="story-hero-text">
      <p class="story-label">Story 1</p>
      <h1>The Clockmaker's Kite</h1>
      <p class="story-subtitle">A quiet town lifts its eyes.</p>
    </div>
  </div>
  <div class="story-content">
    <p>In a narrow street, the clockmaker glued a bright kite together from spare paper gears.</p>
    <p>He promised the children it would fly as steady as his ticking clocks.</p>
    <p>When the wind finally came, the kite rose and carried a trail of wishes above the town, and everyone paused to watch.</p>
    <p>That evening the clockmaker left his shop open so the children could draw new dreams for the next flight.</p>
  </div>
  <div class="story-actions">
    <a class="button" href="index.php">Back to home</a>
    <a class="button ghost" href="story2.php">Next story</a>
  </div>
</article>
<?php include "footer.php"; ?>
