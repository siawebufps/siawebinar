<?php
class EventoDAO
{
	private $con;
	function __construct(){
		try {
			$this->con = Database::start();
		}catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function insert(Evento $evento){
		try {
			$sql = "INSERT INTO `evento`(`nombre`, `descripcion`, `fechainicio`, `fechafin`, `estado`, `enlace`, `grabacion`, `entidad`, `dependencia`, `responsable`, `email`, `telefono`, `inscripcion`, `area`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	    	$this->con->prepare($sql)->execute(
	    		array(
	    			$evento->getNombre(),
	    			$evento->getDescripcion(),
	    			$evento->getFechainicio(),
	    			$evento->getFechafin(),
	    			$evento->getEstado(),
	    			$evento->getEnlace(),
	    			$evento->getGrabacion(),
	    			$evento->getEntidad(),
	    			$evento->getDependencia(),
	    			$evento->getResponsable(),
	    			$evento->getEmail(),
	    			$evento->getTelefono(),
	    			$evento->getInscripcion(),
	    			$evento->getArea()
	    		)
	    	);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function update(Evento $evento){
		try {
			$sql="UPDATE `evento` SET `nombre`=?,`descripcion`=?,`fechainicio`=?,`fechafin`=?,`estado`=?,`enlace`=?,`grabacion`=?,`entidad`=?,`dependencia`=?,`responsable`=?,`email`=?,`telefono`=?,`inscripcion`=?,`area`=? WHERE `id`=?";
			$this->con->prepare($sql)->execute(array(
				$evento->getNombre(),
	    			$evento->getDescripcion(),
	    			$evento->getFechainicio(),
	    			$evento->getFechafin(),
	    			$evento->getEstado(),
	    			$evento->getEnlace(),
	    			$evento->getGrabacion(),
	    			$evento->getEntidad(),
	    			$evento->getDependencia(),
	    			$evento->getResponsable(),
	    			$evento->getEmail(),
	    			$evento->getTelefono(),
	    			$evento->getInscripcion(),
	    			$evento->getArea(),
	    			$evento->getId()
			));

		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function delete($eventoid){
		try {
			$sql="DELETE FROM `evento` WHERE `id` = ?";
			$this->con->prepare($sql)->execute(array($eventoid));
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}

	public function get($eventoid){
		try {
			$sql="SELECT * FROM evento WHERE id = ?";
			$stm = $this->pdo->prepare($sql);
	    	$stm->execute(array($eventoid));
	    	return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}
	
	

	public function getByDate($fecha,$opcionfecha){
		$campotabla="";
		if($opcionfecha==0)$campotabla="fechafin";
		if($opcionfecha==1)$campotabla="fechafin";
		try{
    		$result = array();
    		$sql="SELECT * FROM evento where '".$campotabla."'='".$fecha."'";
	    	$stm = $this->con->prepare($sql);
	    	$stm->execute();
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		$evento = new Evento();
	    		$evento->setId($fila->id);
	    		$evento->setNombre($fila->nombre);
	    		$evento->setDescripcion($fila->descripcion);
	    		$evento->setFechainicio($fila->fechainicio);
	    		$evento->setFechafin($fila->fechafin);
	    		$evento->setEstado($fila->estado);
	    		$evento->setEnlace($fila->enlace);
	    		$evento->setGrabacion($fila->grabacion);
	    		$evento->setEntidad($fila->entidad);
	    		$evento->setDependencia($fila->dependencia);
	    		$evento->setResponsable($fila->responsable);
	    		$evento->setEmail($fila->email);
	    		$evento->setTelefono($fila->telefono);
	    		$evento->setInscripcion($fila->inscripcion);
	    		$evento->setArea($fila->area);
	    		$result[] = $evento;
	    	}
	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function list() {
    	try{
    		$result = array();
    		$sql="SELECT * FROM evento";
	    	$stm = $this->con->prepare($sql);
	    	$stm->execute();
	    	while($fila = $stm->fetch(PDO::FETCH_OBJ)) {
	    		$evento = new Evento();
	    		$evento->setId($fila->id);
	    		$evento->setNombre($fila->nombre);
	    		$evento->setDescripcion($fila->descripcion);
	    		$evento->setFechainicio($fila->fechainicio);
	    		$evento->setFechafin($fila->fechafin);
	    		$evento->setEstado($fila->estado);
	    		$evento->setEnlace($fila->enlace);
	    		$evento->setGrabacion($fila->grabacion);
	    		$evento->setEntidad($fila->entidad);
	    		$evento->setDependencia($fila->dependencia);
	    		$evento->setResponsable($fila->responsable);
	    		$evento->setEmail($fila->email);
	    		$evento->setTelefono($fila->telefono);
	    		$evento->setInscripcion($fila->inscripcion);
	    		$evento->setArea($fila->area);
	    		$result[] = $evento;
	    	}
	    	return $result;
    	}catch(Exception $e) {
			die($e->getMessage());
		}
    	
    }

}
?>