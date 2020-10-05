<?php
require('config/config.php');
require('config/db.php');

// Create query
$query = 'SELECT * FROM posts';

// Get result
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <h1>Posts</h1><br>
        <?php foreach ($posts as $post) : ?>
            <div class="card">
                <h3 class="card-header"><?php echo $post['title']; ?></h3>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?php echo $post['body']; ?></p>
                        <small class="blockquote-footer">Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                    </blockquote>
                    <br>
                    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    </div>
</body>

</html>