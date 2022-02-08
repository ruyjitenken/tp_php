<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP DISCOVERY</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<header>


	<h1>PHP DISCOVERY</h1>
	
	

</header>

<div id="infos">

<?php include 'users.php'; ?>
	
	<h1>Nom: <?php echo $name ?></h1>
	<h1>Prénom: <?php echo $firstname ?></h1>
	<h1>Age : <?php echo $age; ?></h1>
	
</div>	