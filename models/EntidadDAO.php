<?php
class EntidadDAO{

	private $con;

	function __construct(){
		try {
			$this->con = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function insert(Entidad $entidad){
		try {
			$sql = "INSERT INTO `entidad`( `nombre`, `tipo`, `ciudad`) VALUES (?,?,?)";
	    	$this->con->prepare($sql)->execute(
	    		array(
	    			$entidad->getNombre(),
	    			$entidad->getTipo(),
	    			$entidad->getCiudad()
	    		)
	    	);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function update(Entidad $entidad){
		try {
			$sql="UPDATE `entidad` SET `nombre`=?,`tipo`=?,`ciudad`=? WHERE id=?";
			$this->con->prepare($sql)->execute(array(
				$entidad->getNombre(),
	    		$entidad->getTipo(),
	    		$entidad->getCiudad(),
	    		$entidad->getId()
			));

		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function delete($entidadid){
		try {
			$sql="DELETE FROM `entidad` WHERE `id` = ?";
			$this->con->prepare($sql)->execute(array($entidadid));
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function get($entidadid){
		try {
			$sql="SELECT * FROM entidad WHERE id = ?";
			$stm = $this->con->prepare($sql);
	    	$stm->execute(array($entidadid));
	    	return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function list() {
    	try{
    		$result = array();
    		$sql="SELECT * FROM entidad";
	    	$stm = $this->con->prepare($sql);
	    	$stm->execute();
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		$p = new Entidad();
	    		$p->setID($fila->id);
	    		$p->setNombre($fila->nombre);
	    		$p->setTipo($fila->tipo);
	    		$p->setCiudad($fila->ciudad);
	    		$result[] = $p;
	    	}
	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

}
?>