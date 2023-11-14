
<?php
 
 
 

require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "cancerhero");


$id = $_GET["idthread"];



$thread = query("SELECT *
FROM thread
WHERE idthread = $id "); 

$threadc = queryt("SELECT *
FROM threadc
WHERE idthread = $id  limit 4"); 




if ( isset($_POST["submit"])){
    global $id;
    $title  = $_POST["title"];
    $content= $_POST["content"];



    $query = "INSERT INTO threadc
    VALUES 
   ( '','$title','$content','Anonymous','$id',NOW())
   ";



    mysqli_query($conn, $query );
    header("location: discussion_detail.php?idthread=$id");
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
            <a class="navbar-brand" href="landing_page.php">
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
                    <a class="nav-link active tebel-sedang btn btn-outline-primary bg-ungu shadow" href="logout.php">Logout</a>
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

        <div style="
          border: 3px solid #00A04A;
          box-sizing: border-box;
          border-radius: 10px;
          width: 80%;
          height: auto;
          margin-left: 100px;
          margin-top: 20px;">
        <?php $i =1; ?>
          <?php foreach($thread as $row) : ?>
            <h7 style="font-weight: normal; margin-left:20px;
                 margin-top: 10px;"><?= $row["date"]; ?></h7>
            <h5 style="font-weight: italic; font-weight: bold; margin-left:20px;
                 margin-top: 10px;"><?= $row["usertype"]; ?></h5>
        <h4 style="font-weight: bold; margin-left: 15px; margin-top: 10px; margin-left: 15px;"><?= $row["title"]; ?></h4>
        <h5 style="margin-left: 12px; margin-bottom: 20px;"><?= $row["content"]; ?></h5>
        <?php endforeach; ?>
          </div>

        <div class="row mt-5 mb-5">
                
                
                            <form class="col-sm-12 position-relative p-4"method="post">

                                    <h3 style="margin-left:3%;">Answer or Asking</3>

                                    <br></br>

                                <textarea  cols="100%" rows="1"style="
                                    border-radius: 10px; 
                                    border-color: #00A04A;
                                    margin-left: 25px;
                                    
                                    margin-top: 20px;"
                                    type="text" name="title" id="title"
                                    placeholder="judul">
                                </textarea>
<br></br>
 
                                <textarea  cols="100%" rows="10" style="
                                border-radius: 10px; 
                                border-color: #00A04A;
                                margin-left: 25px;
                                
                                margin-top: 20px;"
                                type="text" name="content" id="content"
                                placeholder="content">
                                </textarea>
                                

                                <br></br>
                                <button 
                                class="active btn btn-outline-primary bg-ungu shadow 
                                tebel-sedang" style=" 
                                width: 120px; height: 60px;  border: 1px solid #4CAF50; 
                                border-radius: 10px; margin-left: 73%;" type="submit" name="submit">submit</button> 

                                

                            </form>

                        </div>
    <h4 style="
        font-weight: bold;
        padding-top: 30px;
        font-size: 30px;
        line-height: 56px;
        margin-left: 100px;
        color: #000000;">People discuss about</h4>
        
    <div style="
          border: 1px solid #00A04A;
          box-sizing: border-box;
          border-radius: 10px;
          width: 1200px;
          height: auto;
          margin-left: 100px;
          margin-top: 20px;
          margin-bottom: 80px;">
            <?php $i =1; ?>
        <?php foreach($threadc as $row) : ?>
            <div style="
                border: 1px solid #C4C4C4;
                box-sizing: border-box;
                border-radius: 10px;
                width: 1150px;
                height: 180px;
                margin-left: 25px;
                margin-top: 20px;
                margin-bottom: 20px;">

                <p style="font-family: 'Roboto', sans-serif;
                        margin-left: 20px;
                        margin-top: 5px;
                "><?= $row["date"]; ?></p>

                <h5 style="font-weight: bold; margin-left: 20px; margin-top: -10px;"><?= $row["usertype"]; ?></h5>
                <h6 style="font-weight: bold; margin-left: 20px; margin-top: -10px;"><?= $row["title"]; ?></h6>
                <p style="margin-left: 20px;"><?= $row["content"]; ?></p>


            </div>
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