<?php

require 'functions.php';

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

    <title>Landing Page </title>
</head>

<body>

    <!-- navbar menu -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="node_modules/img/CancerHero.svg" height="100%">
            </a>
            
        </div>
    </nav>

    <!-- konten -->

    <div class="container">

        <div class="row mt-5 mb-5">

            <div class="col-lg-12 gambar">
                <img src="node_modules/img/Ellipse 225.png" width="100%">
            </div>

            <div class="col-sm-12 position-relative p-4">

                <div class="position-absolute top-0 end-0">
                    <img src="node_modules/img/Ellipse 225.png" class="img">
                </div>

                <h1><b>We Consider <br> Motivation of Power</b></h1>

                <div class="desc mt-4">
                    <p>“A good laugh and a long sleep are the best
                        cures in the doctor's book.”</p>
                </div>

                <div class="tombol mt-5">
                    <a href="Dlogin.php" class="button btn btn-outline-primary  shadow tebel-sedang">Sing In (Doctor)</a>
                    <a href="home.php" class="btn btn-outline-success  shadow tebel-sedang">Enter Now</a>

                </div>

                <div class="tombol mt-5">
                    <p><b><a class="lank" href="Dregister.php"> Click Here</a></b> to sign up as doctor</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <p class="footbar-brand">
            Powered By: <br>
            CancerHero Team
        </p>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    


</body>

</html>