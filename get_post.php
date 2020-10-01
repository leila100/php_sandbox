<?php
    if(isset($_GET['name'])) {
        // print_r($_GET);
        // echo $_GET['name'];
        $name = htmlentities($_GET['name']); // Prevents people from entering harmful script (<script>alert(1)</script>) in input field 
        //echo $name;
    }

    // If do not want to see the data in the url, use POST
    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']); 
        // echo $name;
    }

    // REQUEST works with GET and POST
    if(isset($_REQUEST['name'])) {
        $name = htmlentities($_REQUEST['name']); 
        // echo $name;
    }

    //echo $_SERVER['QUERY_STRING']; // Have to use GET method
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <!-- Can pass the name in the link -->
            <a href="get_post.php?name=Kenza">Kenza</a> 
        </li>
        <li>
            <a href="get_post.php?name=Aida">Aida</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s: profile"; ?></h1>
</body>
</html>