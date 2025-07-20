<HTML>

<head>
  <meta charset="UTF-8">
  
  <link rel = 'Website Icon' type = 'png' href = 'icon/Phubot_icon.png'>
  <title>Phubot | Contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href="CSS/contactStyle.css">
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
            <li class="nav-item">
              <a class="nav-link" href="EmergencyCalls.php">Emergency Calls</a>
            </li>
            <li class="nav-item active">
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
    </div>
</nav>
        
<div class='col-md-12 mx-auto text-center'>
      <img src="icon/nnnnPhubot.png" alt="nnnn" height = 100px;>
    </div>

    <div class='col-md-12 text-center'>
      <p class='icontxt'> PHUBOT </p>
    </div>

    <div class='col-md-12 text-center'>
      <p class='txt'> Developer Group Member </p>
    </div>

    <h1></h1>

    <div class = 'row'>

            <div class = 'col-md-3 mx-auto'>
              <div class="card">
                <img src="icon\toonn.png" class="card-img-top" alt="TOONN">
                <div class="card-body">
                  <h5 class="card-title"> Nutkamon Phunturat </h5>
                  <p class="card-text"> 6430611003 </p>
                  <p class="card-text"> Computing, College of Computing </p>
                  <p class="card-text"> s6430611003@phuket.psu.ac.th </p>
                </div>
              </div>
            </div>

            <div class = 'col-md-3 mx-auto'>
              <div class="card";>
                <img src="icon\nett.png" class="card-img-top" alt="NETT">
                <div class="card-body">
                  <h5 class="card-title"> Nantaporn Phukoat </h5>
                  <p class="card-text"> 6430611014 </p>
                  <p class="card-text"> Computing, College of Computing </p>
                  <p class="card-text"> s6430611014@phuket.psu.ac.th </p>
                </div>
              </div>
            </div>
  
              <div class = 'col-md-3 mx-auto'>
              <div class="card">
                <img src="icon\gp.png" class="card-img-top" alt="GAMPANN">
                <div class="card-body">
                  <h5 class="card-title"> Natpakan Noosomton </h5>
                  <p class="card-text"> 6430611019 </p>
                  <p class="card-text"> Computing, College of Computing </p>
                  <p class="card-text"> s6430611019@phuket.psu.ac.th </p>
                </div>
              </div>
            </div>

              <div class = 'col-md-3 mx-auto'>
              <div class="card">
                <img src="icon\not.png" class="card-img-top" alt="NOTT">
                <div class="card-body">
                  <h5 class="card-title"> Nonthakorn Chareonkit </h5>
                  <p class="card-text"> 6430611030 </p>
                  <p class="card-text"> Computing, College of Computing </p>
                  <p class="card-text"> s6430611030@phuket.psu.ac.th </p>
                </div>
              </div>
            </div>
        
</body>

</HTML>