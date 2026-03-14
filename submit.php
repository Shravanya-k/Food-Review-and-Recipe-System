<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/stylesheet4.css">
        <title>SpicY</title>
        <div class="heads">
            <img src ="pic/logo.png" alt="SpicY logo" style=width:150px;height:150px;float:right;><br>
            <h1><span>SpicY</span></h1>
            <p><b><span>Spice Up your life</span></b></p>
        </div>
    </head>
   <body style=" background-image:url(pic/1.jpg)">
        <div class="navi" >
            <ul>
                <li><a href="main.html">Home</a></li>
                <li><a class="active" href="review.html">Give Review</a></li>
                <li class=resi><a>Recipe</a>
                    <div class="drop"> 
                        <a href="pani.html">Pani-Puri</a>
                        <a href="samosa.html">Samosa</a>
                        <a href="vada.html">Vada Pav</a>
                        <a href="dosa.html">Dosa</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="your">
            <p><u>Your Review</u></p>
        </div>
        <div class="ph">
            <?php
                    $name=$_POST["names"];
                    echo "<p>Name : ".$name."<br>";
                    $mail=$_POST["mails"];
                    echo "E-Mails : ".$mail."<br>";
                    $phone=$_POST["phones"];
                    echo "Phone no.: ".$phone."<br>";
                    $review=$_POST["reviews"];
                    echo "Review : ".$review."</p>";

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "food";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "INSERT INTO review(FName,Email,Phone,Review)
                    VALUES ('$name', '$mail', '$phone','$review')";

                    if (!(mysqli_query($conn, $sql)))
                    {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
            ?>
        </div>

        <button><a href="main.html">Go Back</a></button>
        <br><br>
        <footer>
                Copyright (C) 2020 All Right Reserved
        </footer>
    </body> 
</html>