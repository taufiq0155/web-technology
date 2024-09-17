<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<form method="post" action="../controllers/LoginController.php" novalidate>
		<label for="email">Email</label>
		<input type="email" id="email" name="email" value="<?php echo empty($_SESSION['email']) ? "" : htmlspecialchars($_SESSION['email']); ?>">
		<span><?php echo empty($_SESSION['err1']) ? "" : htmlspecialchars($_SESSION['err1']); ?></span>
		<br><br>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<span><?php echo empty($_SESSION['err2']) ? "" : htmlspecialchars($_SESSION['err2']); ?></span>
		<br><br>
		<input type="submit" value="Login">
	</form>

	<?php echo empty($_SESSION['err3']) ? "" : htmlspecialchars($_SESSION['err3']); ?>

	<a href="register.php">Register</a>

</body>
</html>
