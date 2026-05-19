<?php

$affiliations = array(
	"Information Technology Club - Member (2023 - Present)",
	"Rotaract Club - Vice President (2022 - 2023)",
	"Student Government - Council Member (2021 - 2022)"
);
?>

<ul>
	<?php foreach($affiliations as $affiliation): ?>
		<li><?php echo $affiliation; ?></li>
	<?php endforeach; ?>
</ul>
