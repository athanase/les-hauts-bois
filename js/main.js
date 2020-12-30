// function show_slides( n )
// {
// 	var i;
// 	var slides = document.getElementsByClassName( "displayable" );
// 	// var dots = document.getElementsByClassName( "demo" );
// 	// var captionText = document.getElementById( "caption" );
// 	if( n > slides.length )
// 	{
// 		slide_index = 1
// 	}
// 	if( n < 1 )
// 	{
// 		slide_index = slides.length
// 	}
// 	for( i = 0; i < slides.length; i++ )
// 	{
// 		slides[i].style.display = "none";
// 	}
// 	// for( i = 0; i < dots.length; i++ )
// 	// {
// 	// 	dots[i].className = dots[i].className.replace( " active", "" );
// 	// }
// 	slides[slide_index - 1].style.display = "block";
// 	// dots[slideIndex - 1].className += " active";
// 	// captionText.innerHTML = dots[slideIndex - 1].alt;
// }
//
// function open_modal()
// {
// 	document.getElementById( "my_modal" ).style.display = "block";
// }
//
// function close_modal()
// {
// 	document.getElementById( "my_modal" ).style.display = "none";
// }
//
// function current_slide( n )
// {
// 	show_slides( slide_index = n );
// }

function Image(path, text) {
	function display_image() {
		document.write(`<div class="zoom"><img src=${this.path} alt=${this.text} style="max-height:200px; border-radius: 2px;"></div>`);
	}

	this.path = path;
	this.text = text;
	this.display_image = display_image;
}

function Highlight(text, images) {
	function display_highlight() {
		document.write("<div class=\"room_desc\">");
		document.write("<div class=\"room_title\">" + this.text + "</div>");
		document.write("<div class=\"room_images\">");

		this.images.forEach(function (array_item) {
			array_item.display_image();
		});
		document.write("</div>");

		// document.write( "<div id=\"my_modal\" class=\"modal\">" );
		// document.write( "<span class=\"close cursor\" onclick=\"close_modal()\">&times;</span>" )
		// document.write( "<div class=\"modal-content\">" )
		// document.write( "</div>" );
		// document.write( "</div>" );

		document.write("</div>");
	}

	this.text = text;
	this.images = images
	this.display_highlight = display_highlight;
}

function Equipment() {
	function display() {
		document.write("<div class=\"floor\">");
		document.write("<div class=\"floor_title\">" + "Les équipements" + "</div>");

		document.write("<div class=\"room_list\">");
		document.write("<div>\n" +
			"\t\t\t\t\t\t\t\tPlaque vitrocéramique<br>\n" +
			"\t\t\t\t\t\t\t\tCombiné four micro-onde<br>\n" +
			"\t\t\t\t\t\t\t\tHotte aspirante<br>\n" +
			"\t\t\t\t\t\t\t\tRéfrigérateur/congélateur<br>\n" +
			"\t\t\t\t\t\t\t\tLave vaisselle<br>\n" +
			"\t\t\t\t\t\t\t</div>\n" +
			"\t\t\t\t\t\t\t<div>\n" +
			"\t\t\t\t\t\t\t\tAppareil à raclette<br>\n" +
			"\t\t\t\t\t\t\t\tCafetière<br>\n" +
			"\t\t\t\t\t\t\t\tGrille pain<br>\n" +
			"\t\t\t\t\t\t\t\tVaisselle pour 8 personnes<br>\n" +
			"\t\t\t\t\t\t\t\tBouilloire<br>\n" +
			"\t\t\t\t\t\t\t</div>\n" +
			"\t\t\t\t\t\t\t<div>\n" +
			"\t\t\t\t\t\t\t\tCouettes, oreillers, couvertures.<br>\n" +
			"\t\t\t\t\t\t\t\tTélévision<br>\n" +
			"\t\t\t\t\t\t\t\tInternet Haut Débit<br>\n" +
			"\t\t\t\t\t\t\t</div>");
		document.write("</div>")

		document.write("</div>")
	}

	// this.items = items;
	this.display = display;
}

function Floor(name, highlights) {
	function display() {
		document.write("<div class=\"floor\">");
		document.write("<div class=\"floor_title\">" + this.name + "</div>");

		document.write("<div class=\"room_list\">");
		this.highlights.forEach(function (highlight) {
			highlight.display_highlight();
		});
		document.write("</div>")

		document.write("</div>")
	}

	this.name = name;
	this.highlights = highlights;
	this.display = display;
}

function Rental(rental_name, rental_image, floors, equipment) {
	function display_chalet_title() {
		document.write("<div class=\"chalet\">");
// 		document.write(`<div class="chalet_title"> <p>Le chalet ${this.rental_name} est situé au coeur du village de Chapelle des Bois, à 1 minutes à pied du départ des pistes de ski de fond et raquette.
// </br></br>C'est un chalet d’une surface de 70m² environ pouvant accueillir jusqu’à 8 personnes.</p></div>`);
		document.write(`<div class="chalet_title"> <p>D'une surface de 70 mètres carrés repartis sur 2 niveaux, ${this.rental_name} peut accueillir jusqu'à 8 personnes.
<br><br>Il est idéalement situé au calme, au départ des pistes de ski de fond et de raquettes, et à 5 minutes à pieds du centre du village.
<br><br>Au rez de chaussée, il dispose d'un séjour/cuisine toute équipée (avec un poêle à bois), de 2 chambres doubles, d'un sauna, d'une salle de bain et d'un WC.
<br><br>L'étage acceuille 4 lits simples et une salle de bain.
<br><br>Un local attenant permet d'entreposer du matériel.
<br><br>Il possède également une terrasse privative avec un barbecue et du mobilier de jardin.
</p></div>`);
		document.write("<div class=\"chalet_image\">");
		document.write(`<div><img src=${this.rental_image.path} alt=${this.rental_image.alt} style="max-width:500px; border-radius: 2px;"></div>`);
		document.write("</div>");
		document.write("</div>");
	}

	function display_gite_title( description ) {
		document.write("<div class=\"chalet\">");
		document.write(`<div class="chalet_title"> <p>` + description + `</p></div>`);
		document.write("<div class=\"chalet_image\">");
		document.write(`<div><img src=${this.rental_image.path} alt=${this.rental_image.alt} style="max-width:500px; border-radius: 2px;"></div>`);
		document.write("</div>");
		document.write("</div>");
	}

	function display_rental_desc() {
		document.write("<div class=\"chalet_desc\">");
		this.floors.forEach(function (floor) {
			floor.display();
		});
		this.equipment.display();
		document.write("</div>")
	}

	this.rental_name = rental_name;
	this.rental_image = rental_image;
	this.floors = floors;
	this.equipment = equipment;
	this.display_gite_title = display_gite_title;
	this.display_chalet_title = display_chalet_title;
	this.display_rental_desc = display_rental_desc;
}
