<?php
require('config/config.php');
require('config/db.php');

// Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create query
$query = 'SELECT * FROM posts WHERE id=' . $id;

// Get result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// Free result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
        <br>
        <h1><?php echo $post['title']; ?></h1><br>
        <p><?php echo $post['body']; ?></p>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    </div>
</body>

</html>