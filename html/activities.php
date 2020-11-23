<!DOCTYPE html>
<html lang="en">

<?php $this_page = "activities"; ?>

<head>
	<meta charset="utf-8">
	<title>activities</title>
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
</head>

<body>
<div class="main_container">
	<?php include '../includes/header.php' ?>
	<?php include '../includes/main_menu.php' ?>

	<div class="content_container">
		<div class="content">
			<div class="tab_container">
				<button class="tab_link" onclick="open_tab(event, 'winter')" id="default_open">Hiver</button>
				<button class="tab_link" onclick="open_tab(event, 'summer')">Été</button>
			</div>
			<div class="tab_content" id="summer">
				<p>Le VTT, les ballades, les lacs.</p>
			</div>
			<div class="tab_content" id="winter">
				<p>Le ski de fond, les raquettes.</p>
			</div>
		</div>
	</div>

	<?php include '../includes/footer.php' ?>
</div>

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

</body>
</html>
