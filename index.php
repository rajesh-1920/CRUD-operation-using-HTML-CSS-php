<?php
include("function.php");
$in_object = new operation();

$message = "";
if (isset($_POST['in_submit'])) {
    $message = $in_object->insert($_POST);
}
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
        <div id="in_main_div">
            <h1>CRUD Operation</h1>
            <p><?php if (isset($message)) echo $message ?></p>
            <form action="" method="POST">
                <label for="in_name"> <b>Name :</b> </label>
                <input type="text" name='in_name' placeholder="Enter your Name"><br>
                <label for="in_age"> <b>Age :&nbsp;&nbsp;&nbsp;</b> </label>
                <input type="int" name="in_age" placeholder="Enter your Age"><br>
                <label for="in_submit"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </label>
                <input type="submit" name="in_submit" value="Enter your data">
            </form>
        </div>
    </main>
</body>

</html>