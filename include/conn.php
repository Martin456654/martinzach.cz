<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "desetiminutovka";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
if(!$conn){
    die("Database connection failed.");
}

// $server_name = "127.0.0.1";
// $db_username = "martinzach.cz";
// $db_password = "kfwFj83fP8cT";
// $db_name = "martinzachcz2";

// $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
// if(!$conn){
//     die("Database connection failed.");
// }

?>