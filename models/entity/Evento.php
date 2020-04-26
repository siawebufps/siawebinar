<?php
require_once "Entidad.php";
use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity
 */
class Evento{

	/**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
	private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
	private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $descripcion;
    
	private $fechainicio;
	private $fechafin;
	private $estado;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $enlace;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $grabacion;

    /**
     * @ORM\ManyToOne(targetEntity="Entidad", inversedBy="eventos")
     * @ORM\JoinColumn(name="entidad", referencedColumnName="id")
     */
	private $entidad;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $dependencia;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $inscripcion;
	private $area;

	function __construct(){}
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }
    public function getFechainicio(){
        return $this->fechainicio;
    }
    public function setFechainicio($fechainicio){
        $this->fechainicio = $fechainicio;
        return $this;
    }
    public function getFechafin(){
        return $this->fechafin;
    }
    public function setFechafin($fechafin){
        $this->fechafin = $fechafin;
        return $this;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
        return $this;
    }
    public function getEnlace(){
        return $this->enlace;
    }
    public function setEnlace($enlace){
        $this->enlace = $enlace;
        return $this;
    }
    public function getGrabacion(){
        return $this->grabacion;
    }
    public function setGrabacion($grabacion){
        $this->grabacion = $grabacion;
        return $this;
    }
    public function getEntidad(){
        return $this->entidad;
    }
    public function setEntidad($entidad){
        $this->entidad = $entidad;

        return $this;
    }
    public function getDependencia(){
        return $this->dependencia;
    }
    public function setDependencia($dependencia){
        $this->dependencia = $dependencia;
        return $this;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    public function setResponsable($responsable){
        $this->responsable = $responsable;

        return $this;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
        return $this;
    }
    public function getInscripcion(){
        return $this->inscripcion;
    }
    public function setInscripcion($inscripcion){
        $this->inscripcion = $inscripcion;

        return $this;
    }
    public function getArea(){
        return $this->area;
    }
    public function setArea($area){
        $this->area = $area;
        return $this;
    }
}
?>