<?php

require_once 'models/Database.php';
require_once 'models/entity/Evento.php';
require_once 'service/indexService.php';

class IndexController
{
	function index(){

		$event=new IndexService();
		$eventos = $event->eventosIndex();

		require_once 'views/layout/header.php';
		require_once 'views/index/index.php';
		require_once 'views/layout/footer.php';
	}
}
?>