<?php  
$lookingForBook = isset($_GET['title']) || isset($_GET['author']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
</head>
<body>
	<div style="font-family: arial; ">

		<p>You are <?php echo $_COOKIE['username']; ?></p>
		<p>You lookin' for a book? <?php echo (int) $lookingForBook; ?></p>
		<p>The book you are looking for is</p>
			<ul>
				<li><b>Title</b>: <?php echo $_GET['title']; ?></li> 
				<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
			</ul>
	</div>
	<?php echo phpinfo(); ?>
</body>
</html>
