window.onscroll = function()
{
	stick_menu()
};

let navbar = document.getElementById( "menu_container" );
let sticky = navbar.offsetTop;

function stick_menu()
{
	if( window.pageYOffset >= sticky )
	{
		navbar.classList.add( "sticky" )
	}
	else
	{
		navbar.classList.remove( "sticky" );
	}
}
