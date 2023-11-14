<?php
 

require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "cancerhero");



$jumlahDataPerHalaman = 3;
$jumlahData           = count(query("SELECT * FROM thread"));
$jumlahHalaman        = ceil($jumlahData/ $jumlahDataPerHalaman);
$halamanAktif         = ( isset($_GET["halaman"]) ) ? 
                        $_GET["halaman"] : 1;
$awalData             = ($jumlahDataPerHalaman * $halamanAktif ) 
                        - $jumlahDataPerHalaman;


$thread = query("SELECT * FROM thread LIMIT $awalData, $jumlahDataPerHalaman");





if ( isset($_POST["submit"])){
    $title  = $_POST["title"];
    $content= $_POST["content"];



    $query = "INSERT INTO thread
    VALUES 
   ('', '$title', '$content',NOW(),'Anonymous')
   ";



    mysqli_query($conn, $query );

    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"rel="stylesheet"/>

    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="node_modules/bootstrap/css/navbar.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/body.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/theme.css">

    <title>Landing Page </title>
</head>

<body>

    <!-- navbar menu -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img  src="node_modules/img/CancerHero.svg" height="100%">
            </a>
            <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                     
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <div class="discuss">
        <h2 style="
        background-color: white;
        text-align: center;
        font-weight: bold;
        padding-top: 30px;
        font-size: 50px;
        line-height: 56px;
        color: #000000;">  Discussion </h2>

        <h4 style="
        font-weight: bold;
        padding-top: 30px;
        font-size: 30px;
        line-height: 56px;
        margin-left: 100px;
        color: #000000;">Make a new thread</h4>

<div class="container" style="margin-top: -50px;">

    <div class="row mt-5 mb-5">


    <form class="col-sm-12 position-relative p-4"method="post">

        <textarea  cols="70" rows="1"style="
            border-radius: 10px; 
            border-color: #00A04A;
            margin-left: -25px;
            width: 1200px;"
            type="text" name="title" id="title">
        </textarea>

        <textarea  cols="70" rows="10" style="
        border-radius: 10px; 
        border-color: #00A04A;
        margin-left: -25px;
        width: 1200px;
         "
        type="text" name="content" id="content">
        </textarea>

        <button 
        class="active btn btn-outline-primary bg-ungu shadow 
        tebel-sedang" style=" 
        width: 120px; height: 60px;  border: 1px solid #4CAF50; 
        border-radius: 10px;" type="submit" name="submit">submit</button> 



    </form>

    </div>

</div>

    <h4 style="
        font-weight: bold;
        padding-top: 30px;
        font-size: 30px;
        line-height: 56px;
        margin-left: 100px;
        color: #000000;">People discuss about</h4>
        
        <div style="
        font-weight: bold;
        padding-top: 30px;
        font-size: 30px;
        line-height: 56px;
        margin-left: 100px;
        color: #000000;">
     <?php if( $halamanAktif > 1) : ?>
      <a href="?halaman=<?= $halamanAktif -1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
      <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" 
        style="font-weight: bold; color:green;"><?= $i; ?></a>
      <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
      <a href="?halaman=<?= $halamanAktif +1; ?>">&raquo;</a>
    <?php endif; ?>
    </div>

    <div style="
          border: 1px solid #00A04A;
          box-sizing: border-box;
          border-radius: 10px;
          width: 1200px;
          height:auto;
          margin-left: 100px;
          margin-top: 20px;">
            <?php $i =1; ?>
          <?php foreach($thread as $row) : ?>
            <div style="
                border: 1px solid #C4C4C4;
                box-sizing: border-box;
                border-radius: 10px;
                width: 1150px;
                height: auto;
                margin-left: 25px;
                margin-top: 20px;">

                <p style="font-family: 'Roboto', sans-serif;
                        margin-left: 20px;
                        margin-top: 5px;
                        font-size: 12px;
                "><?= $row["date"]; ?></p>

                <h5 style="font-weight: bold; margin-left:20px;
                 margin-top: -10px;"><?= $row["usertype"]; ?></h5>
                <h6 style="font-weight: bold; margin-left: 20px; margin-top: -10px;"><?= $row["title"]; ?></h6>
                <p style="margin-left: 20px;"><?= $row["content"]; ?></p>

            </div>
            
            <a href="discussion_detail.php?idthread=<?= $row["idthread"]; ?>" class="btn btn-outline-success  shadow tebel-sedang" style="
            border-radius: 10px; 
            border: 1px solid #00A04A;
            box-sizing: border-box; width: 110px;
            height: 40px;
            left: 1680px;
            margin-top: 10px;
            margin-bottom:20px;
            margin-left: 1050px ;">Enter</a>
            <?php endforeach; ?>
            
         

          
        
    </div>

    <div style="background-image: url(node_modules/img/footer.png);
        background-size: 100%;
        background-repeat: no-repeat;
        padding-top: 275px;
        padding-bottom: 10px;
        ">
        
      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>