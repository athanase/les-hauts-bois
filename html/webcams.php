<!DOCTYPE html>
<html lang="en">

<?php $this_page = "webcams"; ?>

<head>
	<meta charset="utf-8">
	<title>rental</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="manifest" href="../site.webmanifest">
	<link rel="apple-touch-icon" href="../icon.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/main_menu.css">
	<link rel="stylesheet" href="../css/content.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">

	<meta name="theme-color" content="#fafafa">
	<script type="text/javascript" src="../js/main.js"></script>
</head>

<body>
<div class="main_container">

	<?php include '../includes/header.php' ?>
	<?php include '../includes/main_menu.php' ?>

	<div class="content_container">
		<div class="content">
			<div>
				Chapelle Des Bois
			</div>
			<iframe id="webcam-chapelle-des-bois" title="Webcam Chapelle des Bois" width="auto" height="500" allowfullscreen="true"
					src="https://m.webcam-hd.com/espace-nordique-jurassien/val-de-mouthe_chapelle-des-bois">
			</iframe>
			<div>
				Pré Poncet
			</div>
			<iframe id="webcam-pre-poncet" title="Webcam Pré Poncet" width="auto" height="500" allowfullscreen="true"
					src="https://m.webcam-hd.com/espace-nordique-jurassien/val-de-mouthe_pre-poncet">
			</iframe>
			<div>
				Bellefontaine
			</div>
			<iframe id="webcam-bellefontaine" title="Webcam Bellefontaine" width="auto" height="500" allowfullscreen="true"
					src="https://m.webcam-hd.com/espace-nordique-jurassien/bellefontaine">
			</iframe>
			<div>
				Foncine Le Haut
			</div>
			<iframe id="webcam-foncine-le-haut" title="Webcam Foncine Le Haut" width="auto" height="500" allowfullscreen="true"
					src="https://m.webcam-hd.com/espace-nordique-jurassien/foncine-le-haut_teleski-foncine">
			</iframe>
		</div>
	</div>
</div>

<?php include '../includes/footer.php' ?>

<script src="../js/scroll.js"></script>

</body>
</html>
