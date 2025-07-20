<?php

include 'conn.php';

$Id = $_POST['id'];

$sql = "DELETE FROM Captions WHERE CiD = $Id";
$result = mysqli_query($conn, $sql);

if(!$result){
   echo mysqli_error().'<br>';
   die('Can not access database!');
}
else{
   header("Location: Captions.php");
   exit; 
}