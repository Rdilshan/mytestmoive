<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/indesx.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<!-- start php  -->

<?php 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "moviedb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully"."<br>";
            
        $sql = "SELECT * FROM film";
        $result = mysqli_query($conn, $sql);

        $data = array(); // create an empty array to hold the data

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; // add each row to the array
            }
        } else {
            echo "0 results";
        }

        $json_data = json_encode($data);

        $sqltv = "SELECT * FROM tvseries";
        $resultv = mysqli_query($conn, $sqltv);

        $tvseries = array(); // create an empty array to hold the data

        if (mysqli_num_rows($resultv) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($resultv)) {
                $tvseries[] = $row; // add each row to the array
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

        // convert the PHP array to JSON format
        $json_datatv = json_encode($tvseries);

        // write the JSON data to data.js
        $file = fopen('./js/data.js', 'w');
        fwrite($file, 'var film = ' . $json_data.
        ';var tvseries = ' . $json_datatv.
        ";console.log(film);"
    
    );
        fclose($file);

?>
<!-- end php  -->
  
    <!-- leading line -->

    <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <form>
            <input type="text" placeholder="Search...">
            <button type="submit" >Search</button>
        </form>
          
    </nav>
      <!-- titile of film  -->
      <div class="twelve">
        <h1>Movies</h1>
      </div>
      <!-- image box  -->
      <div class="container">
        <a href="#" class="back">&#8249;</a>
        <div class="image-box">
            <a href="https://www.example.com">
              <img src="./assets/batman.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-box">
                <a href="https://www.example.com">
                  <img src="./assets/batman.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        <div class="image-box">
            <a href="https://www.example.com">
              <img src="./assets/batman.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-box">
                <a href="https://www.example.com">
                  <img src="./assets/batman.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        <div class="image-box">
            <a href="https://www.example.com">
              <img src="./assets/batman.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-box">
                <a href="https://www.example.com">
                  <img src="./assets/batman.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        
        
        <a href="#" class="next">&#8250;</a>
          
    </div>
    <hr class="style-five">

    <!-- tvseriers set  -->
    <div class="twelve">
        <h1>Tvseries</h1>
      </div>
      <!-- image box  -->
      <div class="containertv">
        <a href="#" class="back">&#8249;</a>
        <div class="image-boxtv">
            <a href="https://www.example.com">
              <img src="./assets/lucifer.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-boxtv">
                <a href="https://www.example.com">
                  <img src="./assets/lucifer.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        <div class="image-boxtv">
            <a href="https://www.example.com">
              <img src="./assets/lucifer.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-boxtv">
                <a href="https://www.example.com">
                  <img src="./assets/lucifer.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        <div class="image-boxtv">
            <a href="https://www.example.com">
              <img src="./assets/lucifer.jpg" alt="Image description">
              <div class="image-text">
                <h3>Image Title</h3>
                <p>Image Description</p>
              </div>
            </a>
        </div>
        <div class="image-boxtv">
                <a href="https://www.example.com">
                  <img src="./assets/lucifer.jpg" alt="Image description">
                  <div class="image-text">
                    <h3>Image Title</h3>
                    <p>Image Description</p>
                  </div>
                </a>
        </div>
        
        
        <a href="#" class="next">&#8250;</a>
          
    </div>
    
    <footer>
        <div class="footer">
            <p>This is footer section.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="footer-copyright">
                <p>copyright Randika &copy;2023 </p>
            </div>
        </div>
    </footer>
    <script src="./js/data.js"></script>
    <script src="./js/fulljs.js"></script>
    <script src="./js/viewpage.js"></script>
    <script src="./js/search.js"></script>
</body>
</html>