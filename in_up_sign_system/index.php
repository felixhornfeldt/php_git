<?php
session_start();
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>sign up</title>
			<link rel="stylesheet" href="style.css">
		</head>
		<body>
			<?php
				if (isset($_SESSION['u_id'])) {
					echo '<form action="database_php/logout.php" method="post">
					<button type="submit" name="submit">Logout</button>
					</form>';
				} else {
					echo '<h1>Login</h1>
					<form action="database_php/login.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<button name="submit" type="submit">Login</button>
					</form>';
					echo '<h1>Sign Up</h1>
					<form action="database_php/signup.php" method="post">
					<input type="text" name="first" placeholder="Firstname">
					<input type="text" name="last" placeholder="Lastname">
					<input type="email" name="email" placeholder="Email">
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<button name="submit" type="submit">Sign Up</button>
					</form>';
				}
			?>

				<?php
					if (isset($_SESSION['u_id'])) {
						echo 'You are logged in';
					}
				?>
		</body>
	</html>