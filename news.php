<?php
 

require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "cancerhero");

$newsright = query("SELECT *
FROM news
ORDER BY RAND()
LIMIT 2");

$thread = query("SELECT *
FROM news
ORDER BY RAND()
LIMIT 6");

$newsbaner = query("SELECT *
FROM news
ORDER BY RAND()
LIMIT 1");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="node_modules/bootstrap/css/navbar.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/body.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <title>News Page </title>
  </head>
  <body>
    <!-- navbar menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="node_modules/img/CancerHero.svg" height="100%">
        </a>
        <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="nav nav-pills col-lg-8 col-sm-5 text-center">
            <li class="nav-item text-center">
              <a class="nav-link link tebel-sedang" href="home.php">Home &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link tebel-sedang" href="news.php">News &nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link tebel-sedang" href="about-us.php">About &nbsp;&nbsp;</a>
            </li>
          </ul>
          <li class="nav nav-pills">
            <div class="col-lg-25 col-sm-12">
              <a class="nav-link active tebel-sedang btn btn-outline-primary bg-ungu shadow" href="Dlogin.php">Login</a>
            </div>
          </li>
        </div>
      </div>
    </nav>
      <div class="container">
        <h1 style="line-height: 100px; font-size: 64px;">What's Up</h1>
          <hr border: 3px solid #C4C4C4;>
            <div class="row">
              <div class="row" data-aos="fade-up">
                <div class="col-sm-8 stretch-card grid-margin">
                  <div class="position-relative">
                  <?php $i =1; ?>
                    <?php foreach($newsbaner as $row) : ?>
                    <div class="card shadow-sm">
                      <a href="<?= $row["link"]; ?>">
                        <img src="img/<?= $row["image"]; ?>" width="100%" height="330" alt="news">
                      </a>
                      <div class="card-body" style="background-color: rgba(0, 0, 0, 0.7);">
                        <p class="card-text" style="color: white;"><?= $row["title"]; ?></p>
                      </div>

                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card text-black" style="background-color: #C7D3B5;">
                  <div class="card-body">   
                    <h2>Newest</h2>
          <hr border: 3px solid #C4C4C4;>

                     <?php $i =1; ?>
                    <?php foreach($newsright as $row) : ?>
                      <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                        <div class="pr-3" style="line-height: 5px;">
                          <p style="font-size: 14px;">
                          <?= $row["date"]; ?>
                          </p>
                          <h6>
                          <?= $row["title"]; ?>
                          </h6>
                          <a href="<?= $row["link"]; ?>">
                            <p style="text-align: right; color: black;">
                              <b>
                                Read more ->
                              </b>
                            </p>
                          </a>              
                            </p>
                            </a>
                        </div>
                      </div>
                    <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div>
          <br>
          </div> 
          <?php foreach($thread as $row) : ?>
            <div class="col-sm-4">
              <div class="card shadow-sm">
                <a href="<?= $row["link"]; ?>">
                  <img src="img/<?= $row["image"]; ?>" width="100%" height="225" alt="makanan">  
                </a>
                <div class="card-body" style="background-color: rgba(0, 0, 0, 0.7);">
                <p class="card-text" style="color: white;"><?= $row["title"]; ?></p>
                </div>              
              </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <br>
    <div style="background-image: url(node_modules/img/footer.png);
        background-size: 100%;
        background-repeat: no-repeat;
        padding-top: 265px;
        padding-bottom: 10px;
        "></div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>