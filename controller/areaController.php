<?php
require_once 'models/Database.php';
require_once 'models/entity/Area.php';
require_once 'models/config.ini.php';
require_once 'models/AreaDAO.php';
class AreaController
{
	function index(){
		$area=new AreaDAO();
		$areas = $area->list();
		require_once 'views/header.php';
		require_once 'views/areaView.php';
		require_once 'views/footer.php';
	}
}
?>