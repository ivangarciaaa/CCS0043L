<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    $firstName = "James Ivan";
    $middleName = "Cerdan";
    $lastName = "Frondarina";
    $nickName = "Van";
    $gender = "M";
    $dateOfBirth = "07-06-2004";
    $age = 22;
    $birthPlace = "Manila, Philippines";
    $citizenship = "Filipino";
    $contact = "09123456789";
    $school = "Far Eastern University Institute of Technology";
    $course = "Bachelor of Science in Information Technology Specializing in Web and Mobile Application Development";
    $year = "2nd Year";
    $studentNumber = "202410060";
    $email = "frondarinajames@gmail.com";
    
?>



<div class="container">


    <h1>Student Registration Form</h1>

  

        <div class="section">

            <h2>Student Information</h2>
            <label><b>Full Name:</b> <?php echo $firstName . ' ' . $middleName . ' ' . $lastName; ?></label>
            <label><b>Nick Name:</b> <?php echo $nickName; ?></label>
            <label><b>Gender:</b> <?php echo $gender;?></label>
            <label><b>Age:</b> <?php echo $age; ?></label>
            <label><b>Birth Place:</b> <?php echo $birthPlace; ?></label>
            <label><b>Citizenship:</b> <?php echo $citizenship; ?></label>
            <label><b>Grade Level:</b> <?php echo $year; ?></label>
            <label><b>Contact Number:</b> <?php echo $contact; ?></label>

            <h2>School Information</h2>
            <label><b>School:</b> <?php echo $school; ?></label>
            <label><b>Course:</b> <?php echo $course; ?></label>
            <label><b>Year Level:</b> <?php echo $year; ?></label>
            <label><b>Student Number:</b> <?php echo $studentNumber; ?></label>

            <h2>Contact Information</h2>
            <label><b>Email:</b> <?php echo $email; ?></label>
            
        </div>

</div>

</body>
</html>