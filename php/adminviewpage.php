<?php 
    session_start();
    $id = $_GET['id'];

    if ( $id == 123) {
        // If the user is not an admin, redirect to the login page
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


        //get film data

        $sql = "SELECT id,name FROM film";
        $result = mysqli_query($conn, $sql);

        $datafilm = array(); // create an empty array to hold the data

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $datafilm[] = $row; // add each row to the array
            }
        } else {
            echo "0 results";
        }

        //get tvseries data

        $sqltvseries = "SELECT id,name FROM tvseries";
        $resulttvseries = mysqli_query($conn, $sqltvseries);

        $datatvseries = array(); // create an empty array to hold the data

        if (mysqli_num_rows($resulttvseries) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($resulttvseries)) {
                $datatvseries[] = $row; // add each row to the array
            }
        } else {
            echo "0 resulttvseries";
        }
        
    }else{
        header('Location: ../admin.php');
        exit();
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
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/pen.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/trash.css' rel='stylesheet'>
                       
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

		<h1>Main Content</h1>
        <div class="grid-container">
            <div class="filmview">
                
                <ul class="numbered-list">
                    <h2>List of Film</h2>
                    <?php
                        // Loop through the items and generate the HTML code for each item
                        foreach ($datafilm as $item) {
                        echo '<li>';
                        echo '<span class="list-number"></span> ' . $item['name'];
                        $_idfilm = $item['id'];
                        echo '<span class="list-actions">';
                        echo '<button class="edit-btn" value="' . $_idfilm . '"><i class="gg-pen gg-sm"></i></button>';
                        echo '<button class="delete-btn" value="' . $_idfilm . '"><i class="gg-trash"></i></button>';
                        echo '</span>';
                        echo '</li>';
                        }
                    ?>

                    <!-- Add more list items as needed -->
                  </ul>
                  

            </div>
            <div class="tvseriesview">
                <ul class="numbered-list">
                    <h2>List of Tvseries</h2>
                    <?php
                        // Loop through the items and generate the HTML code for each item
                        foreach ($datatvseries as $items) {
                        echo '<li>';
                        echo '<span class="list-number"></span> ' . $items['name'];
                        $_idtvseries = $items['id'];
                        echo '<span class="list-actions">';
                        echo '<button class="edit-btn" value="' . $_idtvseries . '"><i class="gg-pen gg-sm"></i></button>';
                        echo '<button class="delete-btn" value="' . $_idtvseries . '"><i class="gg-trash"></i></button>';
                        echo '</span>';
                        echo '</li>';
                        }
                    ?>
                    
                    <!-- Add more list items as needed -->
                  </ul>
            </div>
          </div>
          
		
	</div>
    <!-- main-content end  -->
</body>
 <script src="../js/adminedit.js"></script>
 <script src="../js/admintvedit.js"></script>
</html>