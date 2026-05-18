<!DOCTYPE html>
<html>
<head>
    <title>People List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2><b>People Information</b></h2>

<?php
$people = array(
    "Anna Marie Smith" => array("age"=>20,"bday"=>"Jan 1, 2004","contact"=>"09111111111","img"=>"assets/girl.gif"),
    "Brian James Johnson" => array("age"=>21,"bday"=>"Feb 2, 2003","contact"=>"09222222222","img"=>"assets/boy.gif"),
    "Chris Michael Williams" => array("age"=>22,"bday"=>"Mar 3, 2002","contact"=>"09333333333","img"=>"assets/boy.gif"),
    "David Robert Brown" => array("age"=>23,"bday"=>"Apr 4, 2001","contact"=>"09444444444","img"=>"assets/boy.gif"),
    "Ella Jane Davis" => array("age"=>20,"bday"=>"May 5, 2004","contact"=>"09555555555","img"=>"assets/girl.gif"),
    "Faith Anne Miller" => array("age"=>21,"bday"=>"Jun 6, 2003","contact"=>"09666666666","img"=>"assets/girl.gif"),
    "George Paul Wilson" => array("age"=>22,"bday"=>"Jul 7, 2002","contact"=>"09777777777","img"=>"assets/boy.gif"),
    "Hannah Grace Moore" => array("age"=>23,"bday"=>"Aug 8, 2001","contact"=>"09888888888","img"=>"assets/girl.gif"),
    "Ian Patrick Taylor" => array("age"=>24,"bday"=>"Sep 9, 2000","contact"=>"09999999999","img"=>"assets/boy.gif"),
    "Jake Edward Anderson" => array("age"=>25,"bday"=>"Oct 10, 1999","contact"=>"09000000000","img"=>"assets/boy.gif")
);

ksort($people); 

echo "<table class='people-table'>";
echo "<thead>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Name</th>";
echo "<th>Image</th>";
echo "<th>Age</th>";
echo "<th>Birthday</th>";
echo "<th>Contact Number</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$rowNum = 1;
foreach($people as $name => $info){
    echo "<tr>";
    echo "<td>$rowNum</td>";
    echo "<td>$name</td>";
    echo "<td><img src='{$info['img']}'></td>";
    echo "<td>{$info['age']}</td>";
    echo "<td>{$info['bday']}</td>";
    echo "<td>{$info['contact']}</td>";
    echo "</tr>";
    $rowNum++;
}

echo "</tbody>";
echo "</table>";
?>

</body>
</html>