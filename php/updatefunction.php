<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST['id'];

        $type = $_POST['type'];
        $name = $_POST['name'];
        $year = $_POST['year'];
        $image = $_POST['image'];
        $link = $_POST['link'];
        $ytlink = $_POST['ylink'];

        
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

        // Prepare and bind SQL statement
        $sql = "UPDATE $type SET name='$name', year=$year, image='$image', link='$link', ytlink='$ytlink' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            $msg =  "Update  record created successfully✅";
            
        } else {
            $msg =  "Update  record created Unsuccessfully❌";
            
        }
    mysqli_close($conn);

        // show alert and redirect
        echo '<script>';
        echo 'alert("' . $msg . '");';
        echo 'window.location.href = "./adminviewpage.php?id=123";';
        echo '</script>';
    
}


?>