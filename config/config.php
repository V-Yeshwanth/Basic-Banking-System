<?php

// Connection
// $server = 'localhost';
// $username = 'id16758465_yesh';
// $password = 'aamuWBV[=W*=V*3/';
// $db = 'id16758465_bankingsystem';

$server = 'localhost';
$username = 'yesh';
$password = 'bank';
$db = 'Banking';

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn){
    die('Connection Failed :' . mysqli_connect_error());
}

?>