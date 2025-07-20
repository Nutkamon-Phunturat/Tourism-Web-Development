<HTML>

<head>
  <meta charset="UTF-8">

  <link rel = 'Website Icon' type = 'png' href = 'icon/Phubot_icon.png'>
  <title>Phubot | Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href="CSS/homeStyle.css">
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
      <li class="nav-item active">
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
        <div id="chat-container">
          <div class = 'row'>
            

          <div class = 'col-md-4 '>
            <div class="card">
              <img src="icon\Pk1.jpg" class="card-img-top" alt="Pk1">
              <div class="card-body">
                <h5 class="card-title">Phuket Attraction - สถานที่ท่องเที่ยว</h5>
                <p class="card-text"> สอบถาม ภูบอท เกี่ยวกับสถานที่ท่องเมี่ยวในจังหวัดภูเก็ต ที่มีความโดดเด่นและได้รับความที่นิยม </p>
                <a href="Places.php" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>

          <div class = 'col-md-4'>
            <div class="card";>
              <img src="icon\Pk2.jpg" class="card-img-top" alt="Pk2">
              <div class="card-body">
                <h5 class="card-title">Phuket Food - อาหารพื้นเมือง</h5>
                <p class="card-text">สอบถาม ภูบอท เกี่ยวกับร้านอาหารหรือแหล่งที่ข่ยอาหารพื้นเมืองจังหวัดภูเก็ตที่เป็นที่ชื่นชอบของนักท่องเที่ยว</p>
                <a href="Restaurant.php" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>

          <div class = 'col-md-4'>
            <div class="card">
            <img src="icon\Pkk.jpg" class="card-img-top" alt="Pk3">
              <div class="card-body">
                <h5 class="card-title">Captions - แคปชั่น</h5>
                <p class="card-text">สอบถาม ภูบอท เพื่อหาแคปชั่น หรือคำคมเพื่อโพสรูปลงโชเชียลมีเดียของสถานที่ท่องเที่ยวหรืออาหาร</p>
                <a href="Captions.php" class="btn btn-primary">Explore</a>
              </div>
            </div>
          </div>

          <h5></h5>
          <h5></h5>

          <div class = 'col-md-12'>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title-EM"> <img src="icon/emergency-call.png" alt="Phuticon" width="64" height="64"> Emergency Calls - เบอร์โทรฉุกเฉิน
                  <a href="EmergencyCalls.php" class="btn btn-danger"> Explore </a></h5>
              </div>
            </div>
          </div>

        </div>
      </div>
        
</body>

</HTML>