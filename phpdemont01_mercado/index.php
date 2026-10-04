<?php 
    include 'pure_php.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
    <a href="next_page.php">Go to Next Page</a>

    <h3> 
        Username: <u id="displayusername"><?php echo $username; ?></u>
        <br>
        User_ID: <u id="displayuserid"><?php echo $user_id; ?></u>
        <br>
        Year Level: <u id="displayyearlevel"><?php echo $year_level; ?></u>
        <br>
        Age: <u id="displayage"><?php echo $age; ?></u>
        <br>
        Academic Year: <u id="displayacadyear"><?php echo $academic_year; ?></u>
    </h3>

    <button type="button" onclick="greet_user()">Greet User</button>
    <script src="external.js"></script>
</body>
</html>

