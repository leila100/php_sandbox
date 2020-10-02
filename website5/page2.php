<?php
setcookie('username', 'Kenza', time() + (86400 * 30));  // set expiration date to 1 day

// To delete cookie: set expiration time to a passed time 
// setcookie('username', 'Kenza', time() - 3600);

if (count($_COOKIE) > 0) {
    echo 'There are ' . count($_COOKIE) . ' cookies saved<br>.';
} else {
    echo 'There are no cookies saved<br>';
}

if (isset($_COOKIE['username'])) {
    $message = 'User ' . $_COOKIE['username'] . ' is set';
} else {
    $message = 'User is not set';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <h3><?php echo $message; ?></h3>
</body>

</html>