<?php 
	$submitted = isset($_POST['username']) && isset($_POST['password']);
	if ($submitted) {
		setcookie('username', $_POST['username']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
</head>
<body>
	<div style="font-family: arial;">
		<?php if ($submitted): ?>
			<p>Your login info is</p>
				<ul>
					<li><b>Username</b>: <?php echo $_POST['username']; ?></li>
					<li><b>Password</b>: <?php echo $_POST['password']; ?></li>
				</ul>
		<?php else: ?>
			<p>You did not submit anything!</p>
		<?php endif; ?>
	</div>
</body>
</html>