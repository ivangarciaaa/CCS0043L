<?php

$education = array(
	array(
		"school" => "University of Technology",
		"degree" => "Bachelor of Science in Information Technology",
		"year" => "2022 - 2026"
	),
	array(
		"school" => "High School of the Future",
		"degree" => "Senior High School",
		"year" => "2020 - 2022"
	)
);
?>

<?php foreach($education as $edu): ?>
	<p>
		<strong><?php echo $edu["degree"]; ?></strong><br>
		<?php echo $edu["school"]; ?> | <?php echo $edu["year"]; ?>
	</p>
<?php endforeach; ?>
