<?php

$skills = array(
	"PHP",
	"HTML",
	"CSS",
	"JavaScript",
	"MySQL",
	"Problem Solving",
	"Communication",
	"Team Work"
);
?>

<ul>
	<?php foreach($skills as $skill): ?>
		<li><?php echo $skill; ?></li>
	<?php endforeach; ?>
</ul>
