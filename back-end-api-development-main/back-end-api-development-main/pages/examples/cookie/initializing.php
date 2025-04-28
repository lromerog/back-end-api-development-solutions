<?php

	//PASSWORD
	$password 			= 	'footprint';
	$isAuthenticated	=	false;
	$message			=	'';
	
	//LOGOUT
	if (isset($_GET['cookie'])) {
	
		if ($_GET['cookie'] == 'delete') {
		
			setcookie('authenticated','', time() - 3600 );
			
			header('location: initializing.php');
		}
	}

	//ON PASSWORD SUBMIT
	if (isset( $_POST['password'] ) ) 
	{
		
		if ($_POST['password'] == $password) 
		{
			
			setcookie( 'authenticated', TRUE, time() + 60 );
			header( 'location: initializing.php' );
		} 
		else 
		{
		
			$message = 'Password not correct. Try again.';
		}
	}

	//IF AUTHENTICATED
	if ( isset( $_COOKIE['authenticated'] ) ) 
	{
		$isAuthenticated	=	true;
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/global.css">
	<link rel="stylesheet" type="text/css" href="/css/directory.css">
	<link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>

<body>

	<h1>Cookie: initializing</h1>

	<h2>Enter password</h1>
			
	<?php if ( $isAuthenticated ):	?>
		<p>You're logged in.</p>
		<p><a href="?cookie=delete">Log out</a></p>
	<?php else: ?>
		<?php if ( $message ): ?>
			<p><?= $message ?></p>
		<?php endif ?>
		<form action="initializing.php" method="post">
			<ul>
				<li><label for="password">Password: </label>
				<input type="password" name="password" id="password"></li>
			</ul>
			<input type="submit">
		</form>
	<?php endif ?>
</body>
</html>