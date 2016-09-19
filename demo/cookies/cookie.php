<?php
	//setcookie("userName", 'John');
// echo $_COOKIE["userName"];
$user = [
    'name' => 'John',
    'login' => 'root',
    'password' => '1234'
];

    $str = serialize($user);
    setcookie("user", $str);
    echo $_COOKIE["user"];
echo "\n";
echo base64_encode($str);
    //$str = base64_encode($str);
echo "\n";