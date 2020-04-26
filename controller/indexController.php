<?php
require_once 'models/entity/Evento.php';
//require_once 'service/indexService.php';
require_once 'models/EventoDAO.php';

class IndexController
{ 

	private $model;

	public function __CONSTRUCT(){
        $this->model = new EventoDAO();
    }

	function index(){

		//$event=new IndexService();
		$eventos = $this->model->Listar();//$event->eventosIndex();

		require_once 'views/layout/header.php';
		require_once 'views/index/index.php';
		require_once 'views/layout/footer.php';
	}
}
?>