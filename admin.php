<?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the username and password are correct
        if ($username == 'admin1' && $password == 'admin123') {
            // Set the session variable and redirect to the admin dashboard

            header('Location: ./php/adminviewpage.php?id=123');
            exit();
        } else {
            // Display an error message if the credentials are incorrect
            $error = 'Invalid username or password.';
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">

</head>
<body>
    <div class="login-container">
		<div class="login-image">
			<img src="./assets/admin.png">
		</div>
		<form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h2>Admin Login</h2>
            
            <!-- error msg print  -->
            <?php if (!empty($error)): ?>
            <div class="error" style="background-color: red; color: white;">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>



			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit" class="btn-login">Login</button>
		</form>
	</div>
</body>
</html>