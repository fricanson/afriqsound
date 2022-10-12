<?php

$server     = "sql208.epizy.com";
$username   = "epiz_31570882";
$password   = "uQFB05v8skfwtF";
$dbname     = "epiz_31570882_afriquesound";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>

