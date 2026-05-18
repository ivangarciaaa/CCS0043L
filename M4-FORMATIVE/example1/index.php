<?php
$pageTitle = "Story Gallery";
$pageTagline = "Pick a story card to read.";
require "header.php";
?>
<section class="intro">
  <h1 class="intro-title">Five Short Stories</h1>
  <p class="intro-text">Each card opens a short, original placeholder story with a matching image.</p>
</section>
<section class="story-grid">
  <article class="story-card">
    <a href="story1.php">
      <img src="assets/story1.svg" alt="Kite above a town at dusk">
      <div class="card-body">
        <h2>Story 1</h2>
        <p>The Clockmaker's Kite</p>
        <span class="card-link">Read story</span>
      </div>
    </a>
  </article>
  <article class="story-card">
    <a href="story2.php">
      <img src="assets/story2.svg" alt="Quiet library shelves at night">
      <div class="card-body">
        <h2>Story 2</h2>
        <p>Midnight Library</p>
        <span class="card-link">Read story</span>
      </div>
    </a>
  </article>
  <article class="story-card">
    <a href="story3.php">
      <img src="assets/story3.svg" alt="Rain over a colorful market">
      <div class="card-body">
        <h2>Story 3</h2>
        <p>Rain in the Market</p>
        <span class="card-link">Read story</span>
      </div>
    </a>
  </article>
  <article class="story-card">
    <a href="story4.php">
      <img src="assets/story4.svg" alt="Green sprout in warm light">
      <div class="card-body">
        <h2>Story 4</h2>
        <p>The Last Seed</p>
        <span class="card-link">Read story</span>
      </div>
    </a>
  </article>
  <article class="story-card">
    <a href="story5.php">
      <img src="assets/story5.svg" alt="Paper boat on a river">
      <div class="card-body">
        <h2>Story 5</h2>
        <p>Paper Boat</p>
        <span class="card-link">Read story</span>
      </div>
    </a>
  </article>
</section>
<?php include "footer.php"; ?>
