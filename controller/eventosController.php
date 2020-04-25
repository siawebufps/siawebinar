<?php
class EventosController
{
	function index(){
		require_once 'views/header.php';
		require_once 'views/eventos/eventosView.php';
		require_once 'views/footer.php';
		// echo "Vista eventos";
	}
}
?>