<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>


  <header>
    <img class="logo" src="images/logo1.png" alt="logo ">
    <h1>E-Portal Case Management</h1>
    <nav>
       
        <ul class="nav__links">
            <li>
                <a href="#"><img src="images/home-4-line.png" alt="" srcset="">Home</a>
                <a href="#"><img src="images/NJDG-icon.png" alt="" srcset="" style="height: 20px;">NJDG</a>
                <!-- <a href="#">Admin</a> -->
            </li>
        </ul>
    </nav>
    <a href="adminlogin.php" class="cta">
        <button id="btn"><img src="images/user-line.png" alt="" srcset="">Admin</button>
    </a>
</header>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
          aria-current="true"></button>
  </div>
  <div class="carousel-inner">
      <div class="carousel-item">
          <img class="img" src="images/khc.jpg" alt="" srcset="">
      </div>
      <div class="carousel-item">
        <img class="img" src="images/hc.jpg" alt="" srcset="">

      </div>
      <div class="carousel-item active">
        <img class="img" src="images/November_2018_Destination-2-900x400.jpeg" alt="" srcset="">

      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
  </button>
</div>

<section id="services-container1">
  <!-- <h1 class="hprime">Our Services</h1> -->
  <div class="services-container1">
  <div class="services">
      <div class="box">
          <img src="images/judge.avif" alt="">
          <a href="loginsignuppage.php" class=""><button class="loginbtn"><h2>Judge Login</h2></button></a>
      </div>
  </div>
  <div class="services">
      <div class="box">
          <img src="images/advocate.jpg" alt="">
          <a href="index.html" class=""><button class="loginbtn"><h2>Lawyer Login</h2></button></a>
      </div>
  </div>
  </div>
  </div>
</section>


<div class="fcontainer">
  <footer>
    <p>This project is made by Sahil, Harsh, Aditi, Mayank, Nitesh, Dipak </p><br/>
    <form class="w-100">
      <h5>Contact us</h5>
      <div class="d-flex flex-sm-row w-100 gap-2">
        <label for="newsletter1" class="visually-hidden">Email address</label>
        <input id="newsletter1" type="text" class="form-control" placeholder="Email address" fdprocessedid="2laizg">
        <button class="btn btn-primary" type="button" fdprocessedid="cn14ja">Subscribe</button>
      </div>
    </form>
  </footer>
</div>






</body>

</html>