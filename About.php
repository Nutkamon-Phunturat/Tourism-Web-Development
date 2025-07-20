<HTML>

<head>
  <meta charset="UTF-8">

  <link rel = 'Website Icon' type = 'png' href = 'icon/Phubot_icon.png'>
  <title>Phubot | About</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href="CSS/aboutStyle.css">
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
          <li class="nav-item active">
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
            
      <div class='col-md-12 mx-auto text-center'>
        <img src="icon/PkPhubot.png" alt="Pk" height = 100px;></img>
      </div>

      <div class="container">
        <div id="chat-container">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="icon\Pk.jpeg" class="card-img-top" alt="Pk" width="320">
                    </div>
                    <div class="col-md-5">
                      <p class="card-text"> <br> Phuket ภูเก็ต เป็นจังหวัดหนึ่งทางภาคใต้ของประเทศไทย และเป็นเกาะขนาดใหญ่ที่สุดในประเทศไทย อยู่ในทะเลอันดามัน จังหวัดที่ใกล้เคียงทางทิศเหนือ คือ จังหวัดพังงา ทางทิศตะวันออก คือ จังหวัดพังงา ทั้งเกาะล้อมรอบด้วยมหาสมุทรอินเดีย และยังมีเกาะที่อยู่ในอาณาเขตของจังหวัดภูเก็ตทางทิศใต้และตะวันออก การเดินทางเข้าสู่ภูเก็ตนอกจากทางเรือแล้ว สามารถเดินทางโดยรถยนต์ซึ่งมีเพียงเส้นทางเดียวผ่านทางจังหวัดพังงา โดยข้ามสะพานสารสินและสะพานคู่ขนาน คือ สะพานท้าวเทพกระษัตรีและสะพานท้าวศรีสุนทร เพื่อเข้าสู่ตัวจังหวัด และทางอากาศโดยมีท่าอากาศยานนานาชาติภูเก็ตรองรับ ท่าอากาศยานนี้ตั้งอยู่ทางทิศตะวันตกเฉียงเหนือของเกาะ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h5></h5>
            <h5></h5>

            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5">
                      <p class="card-text"> <br> นอกจากทะเลสวยของภูเก็ตแล้ว จุดถ่ายรูปสวยแห่งแรกที่เราอยากให้มาเช็คอินกันก็คือ เมืองเก่าภูเก็ต ไปเดินเล่นถ่ายรูปสวยๆ กับ ตึกชิโนโปรตุกีส ซึ่งเป็นการผสมผสานกันระหว่างศิลปะตะวันตกและตะวันออก เข้าไว้ด้วยกันอย่างลงตัว รวมถึงที่นี่ยังเป็นไฮไลท์ของจังหวัดภูเก็ตเลยก็ว่าได้ค่ะ เพราะมีทั้งร้านขายของที่ระลึก ร้านอาหารพื้นเมือง รวมไปถึงคาเฟ่ชิลๆ ในนั่ง เราแนะนำว่าให้เผื่อเวลาเดินชมบริเวณนี้เยอะๆ เพราะมันสวยจนถ่ายรูปไม่มีเบื่อแน่นอนจ้า </p>
                    </div>
                    <div class="col-md-7">
                      <img src="icon\PkO.jpg" class="card-img-top" alt="Pk" width="320">
                    </div>
                  </div>
                </div>
              </div>
            </div>

        
</body>

</HTML>