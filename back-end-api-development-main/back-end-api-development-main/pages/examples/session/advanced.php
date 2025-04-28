<?php
	session_start();

	// Sessie verwijderen
	if (isset($_GET['session']))
	{
		if($_GET['session'] === 'destroy')
		{
			session_destroy();
			header('Location: advanced.php'); // refreshes page
		}
	}

	// Defining variabeles
	$emptyCart 	= 	true;
	$articles 			=	array();

	// Als de get-variabele article geset is, voeg de waarde van deze key dan toe aan de session-array
	if ( isset($_GET['article']) ) {
				
		$_SESSION['articles'][] = $_GET['article'];		
						
	}

	// Bevolk de variabele articles met de session articles-array als deze key al bestaat
	if ( isset( $_SESSION['articles'] ) )
	{
		$articles = $_SESSION['articles'];
	}
	
	// Tel of er iets in de articlesvariabele zit, zoja, dan is het cart niet leeg
	if ( count( $articles ) > 0 )
	{
		$emptyCart = false;
	}

	// Get full URL
	$fullUrl = $_SERVER['REQUEST_URI']
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

	<h1>Session: advanced</h1>

	<style>
		.shelf
		{
			float:left;
			width:48%;
			padding: 0 1%;
		}

		.cart
		{

			float:right;
			width:48%;
			padding: 0 1%;
			background-color:rgba(0,0,0, 0.08);
			border-radius:3px;
		}

		.cart h1, h2, h3
		{
			border-bottom:	1px solid whitesmoke;
		}
	</style>

	
		<p>URL: <b><?= $fullUrl ?></b></p>
		<section class="cf">
			<section class="shelf">
				<h2>Shelf</h2>
				<p>Click on an article to add it to the cart</p>
				<ul>
					<li><a href="?article=bananas">Bananas</a></li>
					<li><a href="?article=oranges">Organges</a></li>
					<li><a href="?article=coffee">Coffee</a></li>
					<li><a href="?article=milk">Milk</a></li>
				</ul>
			</section>
			
			<section class="cart">
				
				<h2>cart</h2>
			
					<h3>articles</h3>

					<?php if (!$emptyCart): ?>
						<ul>
							<?php foreach($articles as $article): ?>
								<li><?= $article ?></li>
							<?php endforeach ?>
						</ul>
					<?php else: ?>
						<p>No articles in cart</p>
					<?php endif ?>

			</section>
		</section>
	

		<hr>	
			<a href="advanced.php?session=destroy">Leave store</a>
		<hr>

	<h2>dump of $_SESSION-array (for debugging)</h2>
	<pre><?php var_dump( $_SESSION ) ?></pre>
	
</body>
</html>