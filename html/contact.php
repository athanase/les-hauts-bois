<!DOCTYPE html>
<html lang="en">

<?php $this_page = "contact"; ?>

<head>
	<meta charset="utf-8">
	<title></title>
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

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<div class="main_container">

	<?php include '../includes/header.php' ?>
	<?php include '../includes/main_menu.php' ?>

	<div class="content_container">
		<div class="content">

			<div id="contact_form">
				<p>Pour toute demande merci de remplir le formulaire ci-dessous (pensez à cocher la case de vérification avant d'envoyer) :</p><br>
				<form id="form">
					<div class="field">
						<label for="from_name">Nom</label><br>
						<input type="text" name="from_name" id="from_name">
					</div>
					<div class="field">
						<label for="reply_to">Adresse Email</label><br>
						<input type="text" name="reply_to" id="reply_to">
					</div>
					<div class="field">
						<label for="subject">Sujet</label><br>
						<input type="text" name="subject" id="subject">
					</div>
					<div class="field">
						<label for="message">Message</label><br>
						<textarea type="text" name="message" id="message"></textarea>
					</div>

					<div class="g-recaptcha" data-sitekey="6Lf3-ucZAAAAAAxtha82XHFUGecnDgain5H2Nkuo"></div>
					<input type="submit" id="button" value="Envoyer">
				</form>

				<script type="text/javascript"
						src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

				<script type="text/javascript">
					emailjs.init( 'user_OUuHN6hR59MsWtiaRANgN' )
				</script>
			</div>

			<div class="location">
				<div class="location_address">
					Les Hauts Bois<br>
					26 Route des pâturages<br>
					25240 CHAPELLE DES BOIS<br>
				</div>
				<div class="location_map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.2570210165404!2d6.112954457142674!3d46.602805871681234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c550b01a57b49%3A0xcfa78f24d7b81cae!2sLes%20Hauts%20Bois!5e1!3m2!1sen!2sfr!4v1605648404155!5m2!1sen!2sfr"
						width="100%" height="500" style="border:0;" allowfullscreen=""
						aria-hidden="false"
						tabindex="0">
					</iframe>
				</div>

			</div>
		</div>
	</div>

	<?php include '../includes/footer.php' ?>
</div>

<script src="../js/scroll.js"></script>
<script type="text/javascript">
	const btn = document.getElementById( 'button' );

	document.getElementById( 'form' ).addEventListener( 'submit', function( event )
	{
		event.preventDefault();

		btn.value = 'Envoi en cours...';

		const serviceID = 'default_service';
		const templateID = 'template_0b694gu';

		emailjs.sendForm( serviceID, templateID, this )
			.then( () =>
			{
				btn.value = 'Send Email';
				alert( 'Envoi réussi !' );
			}, ( err ) =>
			{
				btn.value = 'Send Email';
				alert( JSON.stringify( err ) );
			} );
	} );
</script>

</body>
</html>
