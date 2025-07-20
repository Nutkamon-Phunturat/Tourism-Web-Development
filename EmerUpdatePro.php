<?php

session_start();

include 'conn.php';

$Id = $_SESSION['Id'];
$Info = $_POST['eName'];
$Tel = $_POST['eTel'];

$sql = "UPDATE EmergencyCalls SET eName = '$Info', eTel = '$Tel' WHERE EiD = $Id";
$result = mysqli_query($conn, $sql);

if (!$result) {

    echo mysqli_error().'<br>';
    die('Can not access database!');

} else {

    header("Location: EmergencyCalls.php");
    exit; 

}

?>