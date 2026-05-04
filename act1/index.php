<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>

<body>

    <?php
    $FirstName = "James Ivan";
    $LastName = "Frondarina";
    $phoneNum = "+63-915-5430870";
    $email = "frondarinajames@gmail.com";
    $location = "Manila, Philippines";
    $profileTitle = "Web Developer";
    $description1 = "Highly adaptable undergraduate with a fervent dedication to the field of programming, seeking to leverage a versatile skill set and passion for technology in the ICT industry. Proficient in various programming languages and frameworks, with a strong foundation in software development principles.";
    $skills = "HTML";
    $skills2 = "CSS";
    $skills3 = "JavaScript";
    $skills4 = "PHP";
    $item_preTitle1 = "2018-2022";
    $item_title1 = "Marriott School";
    $item_subtitle1 = "Junior High School";
    $item_preTitle2 = "2022-2024";
    $item_title2 = "STI College Muñoz-Edsa";
    $item_subtitle2 = "Senior High School";
    $item_preTitle3 = "2024-2026";
    $item_title3 = "Frontend Developer";
    $item_preTitle4 = "2019 - 2021";
    $item_title4 = "Frontend Developer";
    $item_subtitle4 = "Frontend Developer";
    $item_preTitle5 = "2021 - present";
    $item_title5 = "James Company";
    $item_subtitle5 = "Frontend Developer";
    $description2 = "Completed comprehensive frontend development training focusing on modern web technologies including HTML5, CSS3, and JavaScript ES6+. Gained hands-on experience in responsive design, user interface optimization, and best practices in web development.";
    $description3 = "Developed and maintained multiple responsive web applications utilizing HTML, CSS, and JavaScript. Collaborated with design teams to implement pixel-perfect UI designs. Optimized website performance and user experience through code refactoring and optimization.";
    $description4 = "Leading frontend development projects with a focus on creating scalable and maintainable code. Mentoring junior developers and establishing coding standards. Implementing modern frameworks and tools to improve development efficiency and application performance.";
    $socials1 = "https://github.com/ivangarciaaa";
    $socials2 = "https://www.facebook.com/jifrondarina/";
    $socials3 = "https://www.instagram.com/ivancerdann/?hl=en";
    ?>

    <div class="container">
        <div class="profile">
            <div class="profile_container">
                <div class="profile_profileImg">
                    <img src="pic.jpg" alt="pogi siya">
                </div>
                <div>
                    <h1 class="profile_name">
                        <span class="profile_name_firstName"><?php echo $FirstName; ?></span>
                        <span class="profile_name_lastName"><?php echo $LastName; ?></span>
                    </h1>
                    <p class="profile_title"><?php echo $profileTitle; ?></p>
                    <p class="description"><?php echo $description1; ?></p>
                    <a class="downloadBtn" href="My resume_ivan .pdf" download="Resume.pdf">Download Resume</a>
                </div>
            </div>
        </div>

        <div class="group-1">
            <div class="skills">
                <h3 class="title">Expertise</h3>
                <ul class="skills_list description">
                    <li><?php echo $skills; ?></li>
                    <li><?php echo $skills2; ?></li>
                    <li><?php echo $skills3; ?></li>
                    <li><?php echo $skills4; ?></li>
                </ul>
            </div>

            <div class="edu">
                <h3 class="title">Education</h3>
                <div class="edu_item">
                    <p class="item_preTitle"><?php echo $item_preTitle1; ?></p>
                    <h4 class="item_title"><?php echo $item_title1; ?></h4>
                    <p class="item_subtitle"><?php echo $item_subtitle1; ?></p>
                </div>
                <div class="edu_item">
                    <p class="item_preTitle"><?php echo $item_preTitle2; ?></p>
                    <h4 class="item_title"><?php echo $item_title2; ?></h4>
                    <p class="item_subtitle"><?php echo $item_subtitle2; ?></p>
                </div>
            </div>

            <div class="certification">
                <h3 class="title">certification</h3>
                <div class="certification_item">
                    <p class="item_preTitle"><?php echo $item_preTitle3; ?></p>
                    <h4 class="item_title"><?php echo $item_title3; ?></h4>
                    <p class="description">
                        <?php echo $description2; ?>
                    </p>
                </div>
            </div>
        </div>


        <div class="group-2">
            <div class="exp">
                <h3 class="title">Experience</h3>
                <div class="exp_item">
                    <p class="item_preTitle"><?php echo $item_preTitle4; ?></p>
                    <h4 class="item_title"><?php echo $item_title4; ?></h4>
                    <p class="item_subtitle"><?php echo $item_subtitle4; ?></p>
                    <p class=" description">
                    <?php echo $description3; ?>
                    </p>
                </div>
                <div class="exp_item">
                    <p class="item_preTitle"><?php echo $item_preTitle5; ?></p>
                    <h4 class="item_title"><?php echo $item_title5; ?></h4>
                    <p class="item_subtitle"><?php echo $item_subtitle5; ?></p>
                    <p class="description">
                      <?php echo $description4; ?>
                    </p>
                </div>
            </div>




            <hr>
            <div class="group-3">
                <div class="contact">
                    <h3 class="title">Contact</h3>
                    <div class="contact_info">
                        <p class="location">
                            <?php echo $location; ?>
                        </p>
                        <p class="phoneNum">
                            <?php echo $phoneNum; ?>
                        </p>
                        <p class="email">
                            <?php echo $email; ?>
                        </p>
                    </div>
                </div>
                <div class="social">
                    <h3 class="title">Socials</h3>
                    <div class="social_items">
                        <a href="<?php echo $socials1; ?>" target="_blank" class="social_item">
                            <i data-feather="github"></i>
                            <span>Github: ivangarciaaa</span>
                        </a>
                        <a href="<?php echo $socials2; ?>" target="_blank" class="social_item">
                            <i data-feather="facebook"></i>
                            <span>Facebook: jifrondarina</span>
                        </a>
                        <a href="<?php echo $socials3; ?>" target="_blank" class="social_item">
                            <i data-feather="instagram"></i>
                            <span>Instagram: ivancerdann</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>