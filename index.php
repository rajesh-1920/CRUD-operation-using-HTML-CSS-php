<?php
include("function.php");

$in_obj = new crud_operation();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Operation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>CRUD Operation</h1><br>
        <?php if (isset($sms)) echo $sms; ?>
        <from action="" method="POST">
            <input type="text" name='in_name' placeholder="Enter your Name"><br>
            <input type="int" name="in_age" placeholder="Enter your Age"><br>
            <input type="submit" name="in_submit" value="Enter your data">
        </from>
    </main>
</body>

</html>