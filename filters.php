<?php
// Check for posted data
if (filter_has_var(INPUT_POST, 'data')) {
    echo 'Data Found.<br>';
} else {
    echo "No Data Found.<br>";
}

if (filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];
    // Remove illegal characters in email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email is valid. ' . $email . "<br>";
    } else {
        echo 'Email invalid. ' . $email . "<br>";
    }
    /*
    Can validate for all these:
        FILTER_VALIDATE_EMAIL
        FILTER_VALIDATE_BOOLEAN
        FILTER_VALIDATE_FLOAT
        FILTER_VALIDATE_INT
        FILTER_VALIDATE_IP
        FILTER_VALIDATE_REGEXP
        FILTER_VALIDATE_URL
    */

    /*
    Can sanitize for all these:
        FILTER_SANITIZE_EMAIL
        FILTER_SANITIZE_ENCODED
        FILTER_SANITIZE_NUMBER_FLOAT
        FILTER_SANITIZE_NUMBER_INT
        FILTER_SANITIZE_STRING
        FILTER_SANITIZE_URL
        FILTER_SANITIZE_SPECIAL_CHARS
    */

    $var = "<script>alert(1)</script>";
    //echo $var; // will run the code and execute alert
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS) . "<br>"; // Will not execute the script code

    // use filter_input_array
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );
    print_r(filter_input_array(INPUT_POST, $filters));
}

// use filer_var_array
$arr = array(
    "name" => "kenza berrouayel",
    "age" => "9",
    "email" => "test@test.com"
);
$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"  // could use own function
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr, $filters));
?>

<!-- Could add method="filters.php" but if we change file name, will have to change method too -->

<form method="POST" method="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>