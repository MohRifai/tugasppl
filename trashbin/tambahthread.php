if ( isset($_POST["submit"])){
    $title  = $_POST["title"];
    $content= $_POST["content"];



    $query = "INSERT INTO thread
     VALUES 
    ('', '$title', '$content', '$date')
    ";


    mysqli_query($conn, $query );

    return mysqli_affected_rows($conn);

    }

    <a href="landing_page.php" 
                        type="submit" name="submit"
                        class="active btn btn-outline-primary bg-ungu shadow tebel-sedang" 
                        style="margin-left: -108px; margin-top: 70px; border: 1px solid #4CAF50; border-radius: 10px;">Submit</a>
        


                        <textarea style="
                            border-radius: 10px; 
                            border-color: #00A04A;
                            margin-left: -25px;"
                            for="title" type="text" name="title" id="title" cols="70" rows="1" placeholder="Type title .." >
                            </textarea>
                            
                        
                        
                            <textarea style="
                            border-radius: 10px; 
                            border-color: #00A04A;
                            margin-left: -25px;"
                            for="content" type="text" name="content" id="content" cols="70" rows="10" placeholder="Type content .." >
                            </textarea>