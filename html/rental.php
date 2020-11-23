<!DOCTYPE html>
<html lang="en">

<?php $this_page = "rental"; ?>

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
			<div class="tab_container">
				<button class="tab_link" onclick="open_tab(event, 'colchique')" id="default_open">Colchique</button>
				<button class="tab_link" onclick="open_tab(event, 'anemone')">Anémone</button>
				<button class="tab_link" onclick="open_tab(event, 'eglantine')">Églantine</button>
				<button class="tab_link" onclick="open_tab(event, 'edelweiss')">Edelweiss</button>
				<button class="tab_link" onclick="open_tab(event, 'capucine')">Capucine</button>
			</div>
			<div class="tab_content" id="colchique">
				<script>
					const colchique_highlights_1 = [
						new Highlight( "1 cuisine équipée ouverte sur séjour", [
							new Image( "../images/colchique/colchique_cuisine.jpg", "Colchique_cuisine" ),
							new Image( "../images/colchique/colchique_salon_3.jpg", "Colchique_salon_3" ),
							new Image( "../images/colchique/colchique_salon_2.jpg", "Colchique_salon_2" ),
						] ),
						new Highlight( "1 poêle a bois", [
							new Image( "../images/colchique/colchique_salon_1.jpg", "Colchique_salon_1" ),
						] ),
						new Highlight( "1 chambre avec lit 140 cm", [
							new Image( "../images/colchique/colchique_chambre1.jpg", "Colchique_chambre_1" ),
						] ),
						new Highlight( "1 chambre avec 2 lits en 80 cm", [
							new Image( "../images/colchique/colchique_chambre2_1.jpg", "Colchique_chambre_2_1" ),
							new Image( "../images/colchique/colchique_chambre2_2.jpg", "Colchique_chambre_2_2" ),
						] ),
						new Highlight( "1 sauna", [
							new Image( "../images/colchique/colchique_sauna.jpg", "Colchique_sauna" ),
						] ),
						new Highlight( "1 salle de bain (douche + lavabo)", [
							new Image( "../images/colchique/colchique_SdB.jpg", "Colchique_SdB" ),
						] ),
						new Highlight( "1 wc séparé", [
							new Image( "../images/colchique/colchique_WC.jpg", "Colchique_WC" ),
						] ),
						new Highlight( "1 terrasse privative avec table bois", [
							new Image( "../images/colchique/", "Colchique_Terrasse" ),
						] ),
						new Highlight( "1 local de rangement, (ski, luge, VTT…)", [
							new Image( "../images/colchique/colchique_ext_3.jpg", "Colchique_Local" ),
						] ),
						new Highlight( "1 bûcher pour le bois", [
							new Image( "../images/colchique/colchique_ext_2.jpg", "Colchique_Bois" ),
						] ),
					]
					const colchique_highlights_2 = [
						new Highlight( "1 mezzanine (2 espaces couchages séparés) avec 4 lits de 90 cm", [
							new Image( "../images/colchique/colchique_chambre3_1.jpg", "Colchique_Couchages_Mezzanine" ),
							new Image( "../images/colchique/colchique_chambre3_2.jpg", "Colchique_Couchages_Mezzanine" ),
							new Image( "../images/colchique/colchique_chambre3_3.jpg", "Colchique_Couchages_Mezzanine" ),
						] ),
						new Highlight( "1 douche", [
							new Image( "../images/colchique/colchique_SdB.jpg", "Colchique SdB Mezzanine" ),
						] ),
					]

					const colchique = new Rental(
						"Colchique",
						new Image( "../images/winter/colchique_winter_1.jpg", "Colchique_Hiver" ),
						[
							new Floor( "Le rez de chaussée", colchique_highlights_1 ),
							new Floor( "À l’étage", colchique_highlights_2 )
						],
						new Equipment()
					);

					colchique.display_title();
					colchique.display_rental_desc();
				</script>
			</div>
			<div class="tab_content" id="anemone">
				<script>
					const anemone_highlights_1 = [
						new Highlight( "1 cuisine équipée ouverte sur séjour", [
							new Image( "../images/anemone/anemone_cuisine_1.jpg", "Anémone_cuisine_1" ),
							new Image( "../images/anemone/anemone_cuisine_2.jpg", "Anémone_cuisine_2" ),
							new Image( "../images/anemone/anemone_cuisine_3.jpg", "Anémone_cuisine_3" ),
							new Image( "../images/anemone/anemone_cuisine_4.jpg", "Anémone_cuisine_4" ),
							new Image( "../images/anemone/anemone_salon_1.jpg", "Anémone_salon_1" ),
						] ),
						new Highlight( "1 poêle a bois", [
							new Image( "../images/anemone/", "Anémone_poêle" ),
						] ),
						new Highlight( "1 chambre avec lit 140 cm", [
							new Image( "../images/anemone/anemone_chambre1_1.jpg", "Anémone_Chambre_1_1" ),
							new Image( "../images/anemone/anemone_chambre1_2.jpg", "Anémone_Chambre_1_2" ),
						] ),
						new Highlight( "1 chambre avec 2 lits en 80 cm", [
							new Image( "../images/anemone/anemone_chambre2_1.jpg", "Anémone_Chambre_2_1" ),
							new Image( "../images/anemone/anemone_chambre2_2.jpg", "Anémone_Chambre_2_2" ),
						] ),
						new Highlight( "1 sauna", [
							new Image( "../images/anemone/anemone_sauna.jpg", "Anémone_sauna" ),
						] ),
						new Highlight( "1 salle de bain (douche + lavabo)", [
							new Image( "../images/anemone/anemone_SdB1_1.jpg", "Anémone SdB RdC" ),
							new Image( "../images/anemone/anemone_SdB1_2.jpg", "Anémone SdB RdC" ),
						] ),
						new Highlight( "1 wc séparé", [
							new Image( "../images/anemone/anemone_WC.jpg", "Anémone_WC" ),
						] ),
						new Highlight( "1 terrasse privative avec table bois", [
							new Image( "../images/anemone/anemone_ext_3.jpg", "Anémone_Terrasse" ),
						] ),
						new Highlight( "1 local de rangement, (ski, luge, VTT…)", [
							new Image( "../images/anemone/", "Anémone_Local" ),
						] ),
						new Highlight( "1 bûcher pour le bois", [
							new Image( "../images/anemone/anemone_ext_5.jpg", "Anémone_Bois" ),
						] ),
					]
					const anemone_highlights_2 = [
						new Highlight( "1 mezzanine (2 espaces couchages séparés) avec 4 lits de 90 cm", [
							new Image( "../images/anemone/anemone_chambre3_1.jpg", "Anémone_Couchages_Mezzanine" ),
							new Image( "../images/anemone/anemone_chambre3_2.jpg", "Anémone_Couchages_Mezzanine" ),
							new Image( "../images/anemone/anemone_chambre3_3.jpg", "Anémone_Couchages_Mezzanine" ),
							new Image( "../images/anemone/anemone_chambre3_5.jpg", "Anémone_Couchages_Mezzanine" ),
						] ),
						new Highlight( "1 douche", [
							new Image( "../images/anemone/anemone_SdB2.jpg", "Anémone SdB Mezzanine" ),
						] ),
					]

					const anemone = new Rental(
						"Anémone",
						new Image( "../images/winter/anemone_eglantine_winter.jpg", "Anémone_Hiver" ),
						[
							new Floor( "Le rez de chaussée", anemone_highlights_1 ),
							new Floor( "À l’étage", anemone_highlights_2 )
						],
						new Equipment()
					);

					anemone.display_title();
					anemone.display_rental_desc();
				</script>
			</div>
			<div class="tab_content" id="eglantine">
				<script>
					const eglantine_highlights_1 = [
						new Highlight( "1 cuisine équipée ouverte sur séjour", [
							new Image( "../images/eglantine/eglantine_cuisine.jpg", "Églantine_cuisine_1" ),
							new Image( "../images/eglantine/eglantine_salon1.jpg", "Églantine_Salon" ),
						] ),
						new Highlight( "1 poêle a bois", [
							new Image( "../images/eglantine/", "Églantine_poêle" ),
						] ),
						new Highlight( "1 chambre avec lit 140 cm", [
							new Image( "../images/eglantine/eglantine_chambre1_1.jpg", "Églantine_Chambre_1_1" ),
							new Image( "../images/eglantine/eglantine_chambre1_2.jpg", "Églantine_Chambre_1_2" ),
						] ),
						new Highlight( "1 chambre avec 2 lits en 80 cm", [
							new Image( "../images/eglantine/eglantine_chambre2_1.jpg", "Églantine_Chambre_2_1" ),
							new Image( "../images/eglantine/eglantine_chambre2_2.jpg", "Églantine_Chambre_2_2" ),
						] ),
						new Highlight( "1 sauna", [
							new Image( "../images/eglantine/eglantine_sauna.jpg", "Églantine_sauna" ),
						] ),
						new Highlight( "1 salle de bain (douche + lavabo)", [
							new Image( "../images/eglantine/eglantine_SdB1_1.jpg", "Églantine_SdB_RdC" ),
							new Image( "../images/eglantine/eglantine_SdB1_2.jpg", "Églantine_SdB_RdC" ),
						] ),
						new Highlight( "1 wc séparé", [
							new Image( "../images/eglantine/eglantine_WC.jpg", "Églantine_WC" ),
						] ),
						new Highlight( "1 terrasse privative avec table bois", [
							new Image( "../images/eglantine/eglantine_ext_4.jpg", "Églantine_Terrasse" ),
						] ),
						new Highlight( "1 local de rangement, (ski, luge, VTT…)", [
							new Image( "../images/eglantine/", "Églantine_Local" ),
						] ),
						new Highlight( "1 bûcher pour le bois", [
							new Image( "../images/eglantine/eglantine_ext_5.jpg", "Églantine_Bois" ),
						] ),
					]
					const eglantine_highlights_2 = [
						new Highlight( "1 mezzanine (2 espaces couchages séparés) avec 4 lits de 90 cm", [
							new Image( "../images/eglantine/eglantine_chambre3_1.jpg", "Églantine_Couchages_Mezzanine" ),
							new Image( "../images/eglantine/eglantine_chambre3_2.jpg", "Églantine_Couchages_Mezzanine" ),
							new Image( "../images/eglantine/eglantine_chambre3_3.jpg", "Églantine_Couchages_Mezzanine" ),
							new Image( "../images/eglantine/eglantine_chambre3_5.jpg", "Églantine_Couchages_Mezzanine" ),
						] ),
						new Highlight( "1 douche", [
							new Image( "../images/eglantine/eglantine_SdB2.jpg", "Églantine SdB Mezzanine" ),
						] ),
					]

					const eglantine = new Rental(
						"Églantine",
						new Image( "../images/winter/anemone_eglantine_winter.jpg", "Anémone_Hiver" ),
						[
							new Floor( "Le rez de chaussée", eglantine_highlights_1 ),
							new Floor( "À l’étage", eglantine_highlights_2 )
						],
						new Equipment()
					);

					eglantine.display_title();
					eglantine.display_rental_desc();
				</script>
			</div>
			<div class="tab_content" id="edelweiss">
				<div class="chalet">
					<div class="chalet_title">
						Photos et descriptions bientôt disponibles.
					</div>
				</div>
			</div>
			<div class="tab_content" id="capucine">
				<div class="chalet">
					<div class="chalet_title">
						Photos et descriptions bientôt disponibles.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include '../includes/footer.php' ?>

<script>
	document.getElementById( "default_open" ).click();

	function open_tab( event, tab_name )
	{
		let i, tab_content, tab_links;
		tab_content = document.getElementsByClassName( "tab_content" );
		for( i = 0; i < tab_content.length; i++ )
		{
			tab_content[i].style.display = "none";
		}
		tab_links = document.getElementsByClassName( "tab_link" );
		for( i = 0; i < tab_links.length; i++ )
		{
			tab_links[i].className = tab_links[i].className.replace( " active", "" );
		}
		document.getElementById( tab_name ).style.display = "block";
		event.currentTarget.className += " active";
	}
</script>

<script src="../js/scroll.js"></script>

</body>
</html>