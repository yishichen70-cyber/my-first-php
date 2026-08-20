<?php

$firstName = "Yishi";
$lastName = "Chen";

$fullName = $firstName . " " . $lastName;

$age = 21;
$skill = "PHP";
$university = "Asia-Pacific International University";
$hobby = "Playing games";

?>

<!DOCTYPE html>
<html>

<head>
    <title>My First PHP</title>
</head>

<body>

    <h1>Student Information</h1>

    <p>Name: <?php echo $fullName; ?></p>

    <p>Age: <?php echo $age; ?></p>

    <p>Skill: <?php echo $skill; ?></p>

    <p>University: <?php echo $university; ?></p>

    <p>Hobby: <?php echo $hobby; ?></p>

</body>

</html>