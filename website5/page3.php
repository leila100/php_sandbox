<?php
$user = ['name' => 'Anissa', 'email' => 'anissa@anissa.com', 'age' => 16];
$user = serialize($user);  // modify array to be able to pass it to cookie
setcookie('user', $user, time() + 3600);

// To read data from the cookie, have to unserialize it
$user = unserialize($_COOKIE['user']);
print_r($user);
