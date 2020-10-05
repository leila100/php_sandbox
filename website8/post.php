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

<?php include('inc/header.php'); ?>

<div class="container">
    <br>
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
    <br>
    <h1><?php echo $post['title']; ?></h1><br>
    <p><?php echo $post['body']; ?></p>
    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <hr>
    <a href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a>
</div>
<?php include('inc/footer.php'); ?>