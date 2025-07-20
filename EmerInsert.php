<HTML>

<head>
  <meta charset="UTF-8">
  <title>Phubot | Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href="CSS/emerStyle.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light shadow">
    <a class="navbar-brand" href="Home.php">
      <div class='row'>

        <div class='col-md-5 mx-auto'>
          <img src="icon/Phubot_icon.png" alt="Phuticon" width="78" height="78">
        </div>

        <div class='col-md-7 mx-auto'>
          <p class='icontxt'> PHUBOT </p>
        </div>

      </div>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Places.php">Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Restaurant.php">Restaurant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Captions.php">Captions</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="EmergencyCalls.php">Emergency Calls</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
      </ul>

        <div class="username">
          <div class = "username"> 

                <?php 
                    session_start();

                    echo '<img src="icon/username.png" alt="username" width="24" height="24"></img>';
                    echo " ";

                    echo $_SESSION['username']; 
                ?>
                
          </div>
        </div>
      </nav>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

<div class="container">
    <div id="page-container">

        <div class='col-md-12 text-Center'>
            <form method='GET'>
                <h5> Insert Emergency Calls</h5>
                
                <br>

                <input class = 'inputBox' placeholder = 'Emergency Call Name' name = 'emerIn'></input>

                <br><br>

                <input class = 'inputBox' placeholder = 'Emergency Call Number' name = 'emerTel'></input>
                
                <br><br>
                
                <input type = 'submit' class = 'btn btn-primary' value = 'Insert'>

            </form>
        </div>

        <h3> S </h3>

    </div>
</div>

</body>

</HTML>

<?php
            
    include 'conn.php';

    $emerIn = $_GET['emerIn'];
    $emerTel = $_GET['emerTel'];

    if (isset($capIn)) {

      $sql = "INSERT INTO EmergencyCalls VALUES(NULL, '$emerIn', '$emerTel');";    
      $result = mysqli_query($conn, $sql);

    }

    if (!$result) {
      echo mysqli_error().'<br>';
      die('Can not access database!');
  
    } else {
      
      header("Location: EmergencyCalls.php");
      exit; 
    }

?>