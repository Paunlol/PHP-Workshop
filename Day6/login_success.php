<?php
session_start();
if (!isset($_SESSION["username"])) {

}
echo "<pre>";
print_r($_SESSION)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
</head>

<body>
    <?php
    if (isset($_SESSION["username"])) {
        echo "Username: " . $_SESSION["username"] . " <br>";
        echo "<a href='logout.php'>Logout</a> <br>";
        echo "<a href='login.php'>Login</a>";
    } else {
        header("Location: login.php");

    }

    ?>
</body>

</html>