<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad
 *
 * @ORM\Table(name="entidad")
 * @ORM\Entity
 */
class Entidad
{

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
	private $tipo;

    /**
     * @ORM\OneToMany(targetEntity="Evento", mappedBy="entidad")
     * */
    private $eventos;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
	private $ciudad;

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
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * @param mixed $eventos
     *
     * @return self
     */
    public function setEventos($eventos)
    {
        $this->eventos = $eventos;

        return $this;
    }
}
?>