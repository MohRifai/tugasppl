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
    <title>About Us </title>
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
  <h2>HTML Forms</h2>
    <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
    
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe" readonly><br>
        
        <label for="lname">Data:</label><br>
        <input type="text" id="lname" name="ldata" value="None" disabled><br>
    
        <label for="lname">Age:</label><br>
        <input type="number" id="lname" name="lage" required><br>
    
        <label for="lname">Select :</label><br>
        <select id="cars" name="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select><br>
    
        <label for="lname">Multiple :</label><br>
        <select name="cars" size="4" multiple>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select><br>
    
        <label for="lname">Gender :</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
    
        <label for="lname">Choose :</label><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> I have a boat</label><br>
        
        <label for="lname">Text Area :</label><br>
    <textarea name="message" rows="10" cols="30">
    The cat was playing in the garden.
        </textarea><br>
    
        <label for="favcolor">Select your favorite color:</label><br>
        <input type="color" id="favcolor" name="favcolor"><br>
        
        <label for="birthday">Birthday:</label><br>
        <input type="date" id="birthday" name="birthday"><br>
    
        <label for="email">Enter your email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="myfile">Select a file:</label><br>
        <input type="file" id="myfile" name="myfile">

        <input type="submit" value="Submit"><br>
    </form>
    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
    <footer>
      <div style="background-image: url(node_modules/img/footer.png);
        background-size: 100%;
        background-repeat: no-repeat;
        padding-top: 265px;
        padding-bottom: 10px;
        "></div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>