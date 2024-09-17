<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<form method="post" action="../controllers/RegisterController.php" novalidate>
		<label for="full_name">Full Name</label>
		<input type="text" id="full_name" name="full_name" value="<?php echo empty($_SESSION['full_name']) ? "" : htmlspecialchars($_SESSION['full_name']); ?>">
		<span><?php echo empty($_SESSION['err1']) ? "" : htmlspecialchars($_SESSION['err1']); ?></span>
		<br><br>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" value="<?php echo empty($_SESSION['email']) ? "" : htmlspecialchars($_SESSION['email']); ?>">
		<span><?php echo empty($_SESSION['err2']) ? "" : htmlspecialchars($_SESSION['err2']); ?></span>
		<br><br>

		<label for="password">Password</label>
		<input type="password" id="password" name="password">
		<span><?php echo empty($_SESSION['err3']) ? "" : htmlspecialchars($_SESSION['err3']); ?></span>
		<br><br>

		<label for="confirm_password">Confirm Password</label>
		<input type="password" id="confirm_password" name="confirm_password">
		<span><?php echo empty($_SESSION['err4']) ? "" : htmlspecialchars($_SESSION['err4']); ?></span>
		<br><br>

		<label for="contact_number">Contact Number</label>
		<input type="text" id="contact_number" name="contact_number" value="<?php echo empty($_SESSION['contact_number']) ? "" : htmlspecialchars($_SESSION['contact_number']); ?>">
		<br><br>

		<label>Gender</label>
		<input type="radio" id="male" name="gender" value="Male" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Male') ? 'checked' : ''; ?>>
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Female') ? 'checked' : ''; ?>>
		<label for="female">Female</label>
		<input type="radio" id="other" name="gender" value="Other" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'Other') ? 'checked' : ''; ?>>
		<label for="other">Other</label>
		<br><br>

		<input type="submit" value="Register">
	</form>

	<?php 
		echo empty($_SESSION['err5']) ? "" : htmlspecialchars($_SESSION['err5']); 
		echo empty($_SESSION['err6']) ? "" : htmlspecialchars($_SESSION['err6']); 
	?>

</body>
</html>
