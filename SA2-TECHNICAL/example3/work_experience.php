<?php

$work_experience = array(
	array(
		"position" => "Junior Web Developer",
		"company" => "Tech Solutions Inc.",
		"duration" => "2024 - Present",
		"description" => "Developing web applications using PHP and MySQL, maintaining website functionality, and assisting senior developers."
	),
	array(
		"position" => "Web Developer Intern",
		"company" => "Digital Marketing Agency",
		"duration" => "2023 - 2024",
		"description" => "Assisted in creating and maintaining company websites, learned best practices in web development and client communication."
	)
);
?>

<?php foreach($work_experience as $exp): ?>
	<p>
		<strong><?php echo $exp["position"]; ?></strong><br>
		<?php echo $exp["company"]; ?> | <?php echo $exp["duration"]; ?><br>
		<em><?php echo $exp["description"]; ?></em>
	</p>
<?php endforeach; ?>
