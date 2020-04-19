<?php
class AreaDAO
{
	private $con;

	function __construct(){
		try {
			$this->con = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function insert(Area $area){
		try {
			$sql = "INSERT INTO `area`(`id`, `descripcion`) VALUES (?,?)";
	    	$this->con->prepare($sql)->execute(
	    		array(
	    			$area->getId(),
	    			$area->getDescripcion()
	    		)
	    	);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function update(Area $area){
		try {
			$sql="UPDATE `area` SET `descripcion`= ? WHERE `id`= ?";
			$this->con->prepare($sql)->execute(array(
				$area->getId(),
	    		$area->getDescripcion()
			));

		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function delete($areaid){
		try {
			$sql="DELETE FROM `area` WHERE `id` = ?";
			$this->con->prepare($sql)->execute(array($areaid));
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function get($areaid){
		try {
			$sql="SELECT * FROM area WHERE id = ?";
			$stm = $this->pdo->prepare($sql);
	    	$stm->execute(array($areaid));
	    	return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function list() {
    	try{
    		$result = array();
    		$sql="SELECT * FROM area";
	    	$stm = $this->con->prepare($sql);
	    	$stm->execute();
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		$p = new Area();
	    		$p->setId($fila->id);
	    		$p->setDescripcion($fila->descripcion);
	    		$result[] = $p;
	    	}
	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

	


}
?>