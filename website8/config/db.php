<?php
//   Create connect to database
$conn = mysqli_connect('localhost', 'root', 'leilaberrouayel', 'phpblog');

//Check Connection
if (mysqli_connect_errno()) {
    // Connection Failed
    echo 'Failed to connect ot database' . mysqli_connect_errno();
}
