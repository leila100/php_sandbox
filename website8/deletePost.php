<?php
require('config/config.php');
require('config/db.php');

if (isset($_POST['delete'])) {
    // Get ID
    $id = mysqli_real_escape_string($conn, $_POST['deleteId']);

    // Create query
    $query = 'DELETE FROM posts WHERE id=' . $id;

    // Get result
    if (mysqli_query($conn, $query)) {
        //Close connection
        mysqli_close($conn);
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
