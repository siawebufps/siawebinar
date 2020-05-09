<?php
require_once 'models/Database.php';
require_once 'models/entity/Entidad.php';
require_once 'models/EntidadDAO.php';
class EntidadController
{
	function index(){
		$entidadDAO=new EntidadDAO();
		$entidades = $entidadDAO->list();
		require_once 'views/header.php';
		require_once 'views/entidadView.php';
		require_once 'views/footer.php';
	}
	function consultar($id){
		echo "Entro a consultar el id ".$id;
	}
}
?>