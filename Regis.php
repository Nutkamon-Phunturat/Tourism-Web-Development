<!DOCTYPE html>
<html>

<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel='stylesheet' href="CSS/regisStyle.css">
</head>

<body>

    <div class="container">

    <form method = "post">
        <div class='row align-items-center justify-content-center'>

            <div class='col-md-12 text-center'>
                <img src="icon/Phubot_icon.png" alt="Phuticon" width="128" height="128">
            </div>

            <div class='col-md-12 text-center'>
                <p class='icontxt'> PHUBOT </p>
            </div>

            <div class='col-md-12 text-center'>
                <p class='txt'> Registration </p>
            </div>

            <div class='col-md-12 text-center'>
                <p></p>
            </div>
            
        <div class = 'row'>
            <div class = 'col-md-12 text-center'>
                Username
                <input type="text" class="inputBox" name="username"> <br>
            </div>
        </div>

        <h5></h5>

        <div class = 'row'>
            <div class = 'col-md-12 text-center'>
                Password
                <input type="password" class="inputBox" name="password"> <br>
            </div>
        </div>

        <h5></h5>

        <div class = 'row'>
            <div class = 'col-md-12 text-center'>
                <button type="submit" class = "btn btn-primary"> Register </button>
            </div>
        </div>

        <h5></h5>
        <p class = 'or' style = 'font-size: 8px'> OR </p>
        <h5></h5>
        <p class = 'txt' style = 'font-size: 12px'> Already have account? </p>

        <div class = 'row'>
            <div class = 'col-md-12 text-center'>
                <a href="Login.php" class="btn btn-secondary">Sign in</a>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>


<?php
session_start();

include 'conn.php';

$sql = 'SELECT uName FROM userInfo';
$result = mysqli_query($conn, $sql);

$_SESSION['username'] = $_POST['username'];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!$result) {
        $error = 'Error saving user: ' . mysqli_error($conn);
    
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['uName'] == $username) {
                echo 'Username has already used!';
                exit();
            }
        }
    }

    if (empty($username) || empty($password)) {
        echo 'Please fill all Registration form!';
    } elseif (strlen($password) < 8) {
        echo 'Password must be at least 8 characters';
    } else {

        $sql = "INSERT INTO userInfo (uName, uPwd) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            $error = 'Error saving user: ' . mysqli_error($conn);

        } else {
            header('Location: Home.php');
            exit();
        }

    }
}
?>

