<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'Phubot';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($conn -> connect_error) {
    die ('Connection Failed: ' . $conn -> connect_error);
} else {
    // echo 'Connection Succesful :)';
}

?>