<?php
$pageTitle = "Story 2 - Midnight Library";
$pageTagline = "Story 2";
require "header.php";
?>
<article class="story-page">
  <div class="story-hero">
    <img src="assets/story2.svg" alt="Quiet library shelves at night">
    <div class="story-hero-text">
      <p class="story-label">Story 2</p>
      <h1>Midnight Library</h1>
      <p class="story-subtitle">A room of books labeled by time.</p>
    </div>
  </div>
  <div class="story-content">
    <p>Mara found the library unlocked at midnight, with only one lamp burning.</p>
    <p>Each shelf held a book labeled with a time rather than a title.</p>
    <p>She opened 12:07 and read the story of a stranger she had helped that afternoon.</p>
    <p>Before leaving, she wrote her own time on a blank spine and promised to return.</p>
  </div>
  <div class="story-actions">
    <a class="button ghost" href="story1.php">Previous story</a>
    <a class="button" href="story3.php">Next story</a>
  </div>
</article>
<?php include "footer.php"; ?>
