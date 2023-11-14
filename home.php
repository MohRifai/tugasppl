<?php



require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "cancerhero");

$thread = query("SELECT *
FROM thread
ORDER BY RAND()
LIMIT 1");

if ( isset($_POST["submit"])){
     

    $title  = $_POST["title"];
    $content= $_POST["content"];
    


    $query = " INSERT INTO 

    thread

    VALUES 

    ('', '$title', '$content',NOW(),'Anonymous')";



    mysqli_query($conn , $query );
    

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

    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="node_modules/bootstrap/css/navbar.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/body.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/theme.css">

    <title>Cancer Hero</title>
</head>

<body>

    <!-- navbar menu -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="node_modules/img/CancerHero.svg" height="100%">
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
                    <li class="nav-item">
                        <a class="nav-link link tebel-sedang" href="form.php">form &nbsp;&nbsp;</a>
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

    <div class="container" style="margin-top: 150px;">

        <div class="row mt-5 mb-5">

            <div class="col-lg-1 gambar">
                <img src="node_modules/img/Rectangle 39.png" width="100%">
            </div>

            <div class="col-sm-12 position-relative p-4">

                <div class="float-start">
                    <img  src="node_modules/img/Rectangle 39.png" class="img">
                </div>

                <h1 class="float-end" style="margin-right: 90px;"><b>Your Privacy<br> Is Our Priority</b></h1>


                <div class="tombol mt-5 float-end" style="padding: 70px; margin-right: 100px;">
                    <a href="discussion_page.php" class="btn btn-outline-success  shadow tebel-sedang" style="border-radius: 50px;">Start The Journey</a>
                </div>


            </div>

        </div>

    </div>
    </div>
    <div class="page-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 py-3 wow zoomIn">
              <div class="img-place text-center">
                <img src="node_modules/img/intro2.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 py-3 wow fadeInRight">
              <h2 class="title-section"> <span class="marked">Introduction</span></h2>
              <div class="divider"></div>
              <p style="font-size: 13px; text-align: justify; text-indent: 50px;">Menurut data dari Globocan 2018, setidaknya 1 dari 5 laki-laki dan 1 dari 6 perempuan di seluruh dunia terserang kanker. Sedangkan menurut data dari Kementerian Kesehatan, di tahun 2013 hampir 350 ribu orang di Indonesia yang terkena penyakit kanker. Tentu jumlah tersebut masih terus meningkat setiap tahunnya.<br>
                </p>
                <p style="font-size: 13px; text-align: justify; text-indent: 50px;">Di dalam dunia kedokteran, bukan hanya pengobatan secara medis saja yang memiliki peran dalam menyembuhkan pasien kanker, namun pengobatan secara psikologis juga berperan sangat penting atas meningkatnya kualitas hidup si penderita. “Di rumah sakit, tidak ada supporting club untuk pasien. Banyak teman-teman seperjuangan yang meninggal (tanpa dukungan orang-orang di sekitarnya),”, dikutip dari perkataan Ketua Makasar Cancer Care Community (MCCC) yang juga penyintas kanker payudara, Nurlina Subair</p>
                <p style="font-size: 13px; text-align: justify; text-indent: 50px;">Dengan dasar kemanusiaan, tim kami melakukan gerakan Peduli Penderita Kanker lalu berinovasi untuk membuat satu website yang dinamai dengan CancerHero yang berfokus menjadi sebuah wadah supportive bagi penderita kanker. Website yang akan dibangun memiliki fitur utama sebagai media sosial bagi para penderita untuk bertukar pengalaman dan saling memotivasi guna meningkatkan semangat hidup mereka.</p>
              <div class="img-place mb-3">
                <img src="../assets/img/testi_image.png" alt="">
              </div>
            </div>
          </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->
    
      <div class="discuss">
          
          <h2 style="
          background-color: white;
          margin-left: 100px;
          font-weight: bold;
          width: 648px;
          height: 56px;
          left: 100px;
          top: 1974px;
          font-size: 35px;
          line-height: 56px;
          color: #000000;">  People recently discuss about </h2>

        
        <div style="
            border: 1px solid #00A04A;
            box-sizing: border-box;
            border-radius: 10px;
            width: 1200px;
            height: auto;
            margin-left: 100px;
            top: 2090px;">
            <?php $i =1; ?>
          <?php foreach($thread as $row) : ?>
                <div style="
                    border: 1px solid #C4C4C4;
                    box-sizing: border-box;
                    border-radius: 10px;
                    width: 1150px;
                    height: autopx;
                    margin-left: 25px;
                    margin-top: 20px;">
                
                <p style="font-family: 'Roboto', sans-serif;
                        margin-left: 20px;
                        margin-top: 5px;
                        "><?= $row["date"]; ?></p>

                <h5 style="font-weight: bold; margin-left:20px;
                 margin-top: -10px;"><?= $row["usertype"]; ?></h5>
                <h6 style="font-weight: bold; margin-left:20px;
                 margin-top: -10px;"><?= $row["title"]; ?></h6>
                <p style="margin-left: 20px; margin-bottom: 30px ;"><?= $row["content"]; ?></p>



            </div>
            <?php endforeach; ?>
            <a href="discussion_detail.php?idthread=<?= $row["idthread"]; ?>" 
                                    class="btn btn-outline-success  shadow tebel-sedang" 
                                    style="
                                    border-radius: 10px; 
                                    border: 1px solid #00A04A;
                                    box-sizing: border-box; width: 110px;
                                    height: auto;
                                    left: 1680px;
                                    margin-top: 10px;
                                    margin-bottom: 20px ;
                                    margin-left: 1060px ;">Enter</a>
                </div>
                    <a href="discussion_page.php" class="active btn btn-outline-primary bg-ungu shadow tebel-sedang" 
                    style="margin-left: 1150px; margin-top: 20px; border: 1px solid #4CAF50; border-radius: 10px;">View More</a>

                    <div class="container" style="margin-top: 50px;">

                        <div class="row mt-5 mb-5">
                
                
                            <form class="col-sm-12 position-relative p-4" method="post">

                                    

                                <textarea  data-validate = "judul is required" cols="80" rows="1"style="
                                    border-radius: 10px; 
                                    border-color: #00A04A;
                                    margin-left: 25px;
                                    
                                    margin-top: 20px;"
                                    type="text" name="title" id="title"
                                    placeholder="judul">
                                </textarea>

                                <textarea data-validate = "content is reauired"  cols="80" rows="10" style="
                                border-radius: 10px; border-color: #00A04A;margin-left: 25px;margin-top: 20px;"type="text" name="content" id="content"
                                placeholder="content">
                                </textarea>
                                <h1 class="float-end" style="font-size:45px;margin-right: 90px; margin-top:70px;"><b>Make a<br> new thread</b></h1>        
                                <br></br>
                                <button 
                                class="active btn btn-outline-primary bg-ungu shadow 
                                tebel-sedang" style=" margin-left:2%;
                                width: 120px; height: 60px;  border: 1px solid #4CAF50; 
                                border-radius: 10px;" type="submit" name="submit">submit</button> 

                                

                            </form>

                        </div>
                
                    </div>
          
                </div>
        
                <div style="background-image: url(node_modules/img/footer.png);
                background-size: 100%;
                background-repeat: no-repeat;
                padding-top: 265px;
                padding-bottom: 10px;
                ">
                
                </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
