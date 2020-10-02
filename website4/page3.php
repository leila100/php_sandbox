<?php
session_start();
print_r($_SESSION);

// can use unset($_SESSION['name]) to remove name from session

$name = isset($_SESSION['name']) ? $_SESSION['name'] : "Gest";
$email = isset($_SESSION['email']) ? $_SESSION['email'] : "Not Subscribed";

// Can use session_destroy() to destroy the session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <h1>Hello <?php echo $name; ?>.</h1>
</body>

</html>