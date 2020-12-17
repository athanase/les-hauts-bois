<!doctype html>
<html class="no-js" lang="">

<div id="menu_container">
	<div id="menu">
		<a <?php if( $this_page == "index" )
		{
			echo " id=\"current_page\"";
		} ?> href="../index.php">Accueil</a>

		<a <?php if( $this_page == "rental" )
		{
			echo " id=\"current_page\"";
		} ?>href="../html/rental.php">Locations</a>

		<!--		<a --><?php //if( $this_page == "activities" )
			//		{
			//			echo " id=\"current_page\"";
			//		} ?><!--href="../html/activities.php">Activités</a>-->

		<a <?php if( $this_page == "prices" )
		{
			echo " id=\"current_page\"";
		} ?>href="../html/prices.php">Tarifs</a>

		<a <?php if( $this_page == "webcams" )
		{
			echo " id=\"current_page\"";
		} ?>href="../html/webcams.php">Webcams Pistes</a>

		<a <?php if( $this_page == "contact" )
		{
			echo " id=\"current_page\"";
		} ?>href="../html/contact.php">Contact</a>
	</div>
</div>

</html>
