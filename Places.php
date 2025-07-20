<HTML>

<head>
  <meta charset="UTF-8">

  <link rel = 'Website Icon' type = 'png' href = 'icon/Phubot_icon.png'>
  <title>Phubot | Places</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href="CSS/placesStyle.css">
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
        <li class="nav-item active">
          <a class="nav-link" href="Places.php">Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Restaurant.php">Restaurant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Captions.php">Captions</a>
        </li>
                <li class="nav-item">
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
        <div class='col-md-4 mx-auto'>
            <form method='GET'>
              <input class="btn btn-secondary" type="submit" name="search" value="หาด">
              <input class="btn btn-secondary" type="submit" name="search" value="เกาะ">
              <input class="btn btn-secondary" type="submit" name="search" value="วัด">
            </form>
        </div>

        <div class='col-md-8 text-right'>
            <form method='GET'>
                <input type="text" class="inputBox" placeholder="Search..." name="search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>

        <br>

        <div class="row g-5 justify-content-md-center">

            <?php
                include 'conn.php';

                $search = $_GET['search'];

                if (isset($search)) {
                  $sql = "SELECT * FROM Places WHERE pName LIKE '%$search%'";
                } else {
                  $sql = 'SELECT * FROM Places';
                } 

                $result = mysqli_query($conn, $sql);

                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            ?>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo $row['pPhoto'] ?>" class="card-img-top" alt="Places">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['pName'] ?></h5>
                        <p class="card-text"><?php echo '<br>' . $row['pDes'] ?></p>
                        <p class="card-text"><?php echo "<a href='" . $row['pLo'] . "'> <img src = 'icon/maps.png' alt = 'map' width = '16px'> Location </a>"; ?></p>
                    </div>
                </div>
            </div>
                       
            <?php 
              } 
            ?>

        </div>
      </div>
    </div>
  </div>

</body>

</HTML>