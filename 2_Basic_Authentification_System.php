<?php


define("Username", "ABCD");
define("Password","123456");

$inputUsername = readline("Enter username: ");
$inputPassword = readline (" Enter password: ");
if($inputUsername === "Username" && $inputPassword === "Password"){
    echo "Login succesful.";
}else {
    echo "Login unsuccesful.";
}