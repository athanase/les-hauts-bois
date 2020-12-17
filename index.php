<!doctype html>
<html class="no-js" lang="">

<?php $this_page = "index"; ?>

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/main_menu.css">
	<link rel="stylesheet" href="css/content.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
</head>

<body>
<div class="main_container">

	<?php include 'includes/header.php' ?>
	<?php include 'includes/main_menu.php' ?>

	<div id="main_image_container">
	</div>

	<div class="content_container">
		<div class="content">
			<div class="description">
				<p> En pleine nature parfaitement préservée, au cœur du
					<span style="font-weight: bold; color: var(--polar-1)">Parc Naturel du Haut Jura</span>, au milieu des forêts
					et des clairières vallonnées, <strong>les chalets et gîtes «Les Hauts Bois»</strong>, vous accueillent pour des
					vacances vivifiantes et reposantes, des séjours inoubliables !<br><br>

					En famille ou entre amis, dans le beau petit village de <strong>Chapelle Des Bois</strong>, savourez l’excellente
					gastronomie locale et les paysages merveilleux.<br><br>

					En hiver, le ski nordique, les promenades en raquettes et en chien de traîneau vous enchanterons.
					Aux autres saisons, les randonnées à pieds, à VTT ou à vélo vous permettront de découvrir un
					environnement superbe.<br><br>

					Profitez de la paix, de la douceur et l’authenticité du site en toutes saisons.
				</p>
			</div>
			<div class="slideshow-container">
				<script src="js/slider.js"></script>
				<a class="prev" onclick="plus_slides( -1 )">&#10094;</a>
				<script>
					let images = [
						"images/winter/anemone_eglantine_winter.jpg",
						"images/winter/colchique_winter_1.jpg",
						"images/winter/winter_1.jpg",
						"images/winter/winter_2.jpg",
						"images/winter/winter_3.jpg",
						"images/winter/winter_4.jpg",
						"images/winter/winter_5.jpg",
						"images/winter/winter_6.jpg"
					]

					images.forEach( function( array_item )
					{
						document.write( "<div class=\"my_slides\">" +
							"<img src=" + array_item + " style=\"width:100%; max-height:650px; border-radius: 2px;\">" +
							"</div>" );
					} );
					show_slides( slide_index );
				</script>
				<a class="next" onclick="plus_slides( 1 )">&#10095;</a>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php' ?>
</div>

<script src="js/scroll.js"></script>
<script src="js/main.js"></script>
<script>
	window.onload = function( e )
	{
		let header_height = document.getElementById( "header_container" ).offsetHeight;
		let menu_height = document.getElementById( "menu_container" ).offsetHeight;
		let inner_height = window.innerHeight;
		let image_height = inner_height - header_height - menu_height;
		document.getElementById( "main_image_container" ).clientHeight = image_height;

		let main_images = [
			"images/raw/winter/winter_1.jpg",
			"images/raw/winter/winter_5.jpg",
			"images/raw/winter/winter_6.jpg",
		]

		function random( mn, mx )
		{
			return Math.random() * (mx - mn) + mn;
		}

		let index = Math.floor( random( 0, 3 ) );

		let elem = document.createElement( "img" );
		elem.setAttribute( "id", "main_image" )
		elem.setAttribute( "src", main_images[index] )
		elem.setAttribute( "height", image_height + "px" );
		elem.setAttribute( "width", "100%" );
		elem.setAttribute( "alt", "Paysage" );
		document.getElementById( "main_image_container" ).appendChild( elem );
	}
</script>

</body>
</html>
