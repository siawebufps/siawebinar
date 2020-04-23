<?php
require_once 'models/Database.php';
// require_once 'models/entity/Evento.php';
require_once 'models/config.ini.php';
// require_once 'models/EventoDAO.php';
class SemillerosController
{
	function index(){ 
		// $event=new EventoDAO();
		// $eventos = $event->list();
		require_once 'views/header.php';
		require_once 'views/semilleros/semillerosView.php';
		require_once 'views/footer.php';
	}
	// function view($id){
	// 	echo "EVENTO ID: ".$id;
	// }
}
?>