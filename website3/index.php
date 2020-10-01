<?php
// Message vars
$msg = "";
$msgClass = "";

//Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check required fields
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Check email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Invalid email.";
            $msgClass = "alert-danger";
        } else {
            $toEmail = 'nb_leila@yahoo.com';
            $subject = 'Contact Request from ' . $name;
            $body = '<h2>Contact Request</h2>
                     <h4>Name: </h4><p>' . $name . '</p>
                     <h4>Email: </h4><p>' . $email . '</p>
                     <h4>Message: </h4><p>' . $message . '</p>
                    ';
            // email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";

            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                $msg = "You email has been sent.";
                $msgClass = "alert-success";
            } else {
                $msg = "Your email was not sent.";
                $msgClass = "alert-danger";
            }
        }
    } else {
        // /failed to pass all required fields
        $msg = "Please enter a value for all the fields.";
        $msgClass = "alert-danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg != "") : ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control " value="<?php echo isset($_POST['name']) ? $name : ""; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control " value="<?php echo isset($_POST['email']) ? $email : ""; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ""; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>