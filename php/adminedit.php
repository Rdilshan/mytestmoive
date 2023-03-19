<?php 
    session_start();
    $type = $_GET['type'];
    $id = $_GET['id'];
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
        

        if ($type == 'film') {

          $sql = 'SELECT * FROM film WHERE id ="'.$id.'"';

        } else if ($type == 'tvseries') {

          $sql = 'SELECT * FROM tvseries WHERE id ="'.$id.'"';

        } 

        $result = $conn->query($sql);
        $item = mysqli_fetch_assoc($result);

      
        
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
    <style>
      #id {
        display: none;
        margin-top: 10px;
        padding: 5px;
      }
    </style>

                       
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
        <form action="./updatefunction.php" method="post">
            <label for="type">Type:</label>
            <select id="type" name="type">
              <option value="film" <?php if ($type == 'film') echo 'selected'; ?>>Film</option>
              <option value="tvseries" <?php if ($type == 'tvseries') echo 'selected'; ?>>TV Series</option>
            </select>
            
            <br><br>
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $item['name']; ?>">
            
            <br><br>
            
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" value="<?php echo $item['year']; ?>">
            
            <br><br>
            
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" value="<?php echo $item['image']; ?>">
            <input type="text" id="id" name="id" value="<?php echo $id; ?>">
           
            <br><br>
            
            <label for="link">Link:</label>
            <input type="text" id="link" name="link" value="<?php echo $item['link']; ?>">
            
            <br><br>
            
            <label for="ylink">YLink:</label>
            <input type="text" id="ylink" name="ylink" value="<?php echo $item['ytlink']; ?>">
            
            <br><br>
            
            <button type="submit" id="save">Update</button>
            <button type="button" id="cancel">Cancel</button>
          </form>
          

            
	</div>
    <!-- main-content end  -->
</body>
<script>
    const cancelBtn = document.querySelector('#cancel');
    cancelBtn.addEventListener('click', function() {
      window.history.back();
    });
</script>
</html>