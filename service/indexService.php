<?php
class IndexService
{
	private $con;
	function __construct(){
		try {
			$this->con = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function eventosIndex() {
    	try{
    		$result = array();
    		$sql="SELECT d.nombre as entidad, e.nombre as nombre, e.descripcion, e.fechainicio, e.fechafin, e.enlace, e.grabacion, e.dependencia, e.responsable, e.email FROM evento e INNER JOIN entidad d ON d.id = e.entidad";
	    	$stm = $this->con->prepare($sql);
	    	$stm->execute();
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		
	    		$result[] = $fila;
	    	}
	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

}
?>