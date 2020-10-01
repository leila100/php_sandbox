<?php
$loggedIn = true;

/*
if ($loggedIn) {
    echo "You are logged in<br>";
} else {
    echo 'You are NOT logged in<br>';
}
*/

// Same as this shorthand - ternary syntax
// echo ($loggedIn) ? "You are logged in" : "You are NOT logged in";

$isRegistered = ($loggedIn) ? true : false;
// var_dump($isRegistered);

$score = 20;
$age = 15;

// echo 'Your score is ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

$nums = [1, 2, 3, 4, 5];
?>

<!-- In HTML -->
<div>
    <?php if ($loggedIn) { ?>
        <h1>Hello User</h1>
    <?php } else { ?>
        <h1>Please log in</h1>
    <?php } ?>
</div>

<!-- Can be changed to -->
<div>
    <?php if ($loggedIn) : ?>
        <h1>Hello User</h1>
    <?php else : ?>
        <h1>Please log in</h1>
    <?php endif ?>
</div>

<div>
    <?php foreach ($nums as $num) : ?>
        <h2><?php echo $num ?></h2>
    <?php endforeach ?>
</div>