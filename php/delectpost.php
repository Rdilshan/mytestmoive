<?php 
    session_start();
    $type = $_GET['type'];
    $id = $_GET['id'];
    echo $type;
  //connect sql
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

        $sql = "DELETE FROM $type WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            $delect =  "Record deleted successfully";
        }

        

        

        echo '<script>';
        echo 'let url = `../php/adminviewpage.php?id=123`;';
        echo 'window.location.href = url;';
        echo '</script>';
?>