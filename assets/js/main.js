$(document).on('click', 'figure span', function()
{
    var nombre = document.getElementById('header__menu');
    
	if (nombre.className === 'header__menu')
	{
		$('ul').removeClass();
		$('ul').addClass('header__menu-activo');
	} else {
		$('ul').removeClass();
		$('ul').addClass('header__menu');
	}
})