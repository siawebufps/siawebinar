<?php
class EventoDAO
{
	private $em;

	public $instance;

	function __construct(){
		try {
			$this->em = Database::StartUp();     
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function Nuevo() {

		$instance = new Evento();
		return $instance;
	}

	public function Listar()
	{
		try {
			$dataRepository = $this->em->getRepository('Evento');
			$data = $dataRepository->findAll();
			return $data;
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try {
			$data = $this->em->find('Evento', $id);
			
			return $data;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try {
			$data = $this->em->find('Evento', $id);
			$this->em->remove($data);
			$this->em->flush();

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try {
			$this->em->merge($data);
			$this->em->flush();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Evento $data)
	{
		try {
			$this->em->persist($data);
			$this->em->flush();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}
?>