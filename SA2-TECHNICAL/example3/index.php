<!DOCTYPE html>
<html>
<head>
	<title>Student Resume</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	
	<div class="header-section">
		<div class="profile-pic">
			<img src="assets/internship.gif" alt="Profile Picture">
		</div>
		<div class="personal-info">
			<?php require('personal_info.php'); ?>
		</div>
	</div>


	<div class="section">
		<h3>Career Objective</h3>
		<?php include('career_objective.php'); ?>
	</div>

	
	<div class="section">
		<h3>Educational Attainment</h3>
		<?php include('education.php'); ?>
	</div>

	
	<div class="section">
		<h3>Skills</h3>
		<?php include('skills.php'); ?>
	</div>

	
	<div class="section">
		<h3>Affiliation</h3>
		<?php include('affiliation.php'); ?>
	</div>

	
	<div class="section">
		<h3>Work Experience</h3>
		<?php include('work_experience.php'); ?>
	</div>
</div>

</body>
</html>
