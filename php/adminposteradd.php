<?php 

        // If the user is not an admin, redirect to the login page
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $type = $_POST['type'];
            $name = $_POST['name'];
            $year = $_POST['year'];
            $image = $_POST['image'];
            $link = $_POST['link'];
            $ylink = $_POST['ylink'];
            

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
            $result =  "Connected successfully";

            if($type == 'film'){
                // film  db add 
                $sqladdfilm = "INSERT INTO film (name, year, image, link, ytlink) VALUES ( '$name', '$year', '$image', '$link', '$ylink')";
                
                if (mysqli_query($conn, $sqladdfilm)) {
                    $msg =  "New film record created successfully✅";
                    echo "<script>alert('$msg');</script>";
                } else {
                    $msg =  "New film record created Unsuccessfully❌";
                    echo "<script>alert('$msg');</script>";
                  }

            }else{
                // tvseries db add
                $sqladdTvseries = "INSERT INTO Tvseries (name, year, image, link, ytlink) VALUES ( '$name', '$year', '$image', '$link', '$ylink')";
                    
                if (mysqli_query($conn, $sqladdTvseries)) {
                    $msg =  "New film record created successfully✅";
                    echo "<script>alert('$msg');</script>";
                } else {
                    $msg =  "New film record created Unsuccessfully❌";
                    echo "<script>alert('$msg');</script>";
                  }
            }

        }
// If the user is an admin, continue displaying the admin dashboard


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adminviewpage.css">
    <link rel="stylesheet" href="../css/adminposteradd.css">

                       
</head>
<body>
    <!-- sidebar start  -->
    <div class="sidebar">
        <h2></h2>
        <ul>
          <li><a href="./adminviewpage.php?id=123">View</a></li>
          <li><a href="./adminposteradd.php">Add</a></li>
          
        </ul>
      </div>
    <!-- sidebar end  -->
    <!-- main-content start -->


    <div class="main-content">
		<h1>Add Poster</h1>
        <form id="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="type">Type:</label>
            <select id="type" name="type">
              <option value="film">Film</option>
              <option value="tvseries">TV Series</option>
            </select>
            
            <br><br>
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            
            <br><br>
            
            <label for="year">Year:</label>
            <input type="number" id="year" name="year">
            
            <br><br>
            
            <label for="image">Image:</label>
            <input type="text" id="image" name="image">
            
            <br><br>
            
            <label for="link">Link:</label>
            <input type="text" id="link" name="link">
            
            <br><br>
            
            <label for="ylink">YLink:</label>
            <input type="text" id="ylink" name="ylink">
            
            <br><br>
            
            <button type="submit" id="save">Add</button>
            <button type="button" id="cancel" onclick="resetForm()">Cancel</button>
        </form>
          
        <script>
            function resetForm() {
                document.getElementById("myForm").reset();
            }
        </script>
            
	</div>
    <!-- main-content end  -->
</body>
</html>