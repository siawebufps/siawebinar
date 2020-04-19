<?php
class Area{
		
	private $id;
	private $descripcion;

    function __construct(){}

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }
}
?>