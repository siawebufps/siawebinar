<?php

require_once dirname(__FILE__) . '/entities/Alumnos.php';

class Alumno
{
	private $em;
    
    public $alumnos;

	public function __CONSTRUCT()
	{
		try
		{
			$this->em = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Nuevo() {

		$alumnos = new Alumnos();
		return $alumnos;
	}

	public function Listar()
	{
		try
		{
			$alumnosRepository = $this->em->getRepository('Alumnos');
			$alumnos = $alumnosRepository->findAll();
			return $alumnos;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$alm = $this->em->find('Alumnos', $id);
			
			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$alm = $this->em->find('Alumnos', $id);
			$this->em->remove($alm);
			$this->em->flush();

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$this->em->merge($data);
			$this->em->flush();
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumnos $data)
	{
		try 
		{
			$this->em->persist($data);
			$this->em->flush();
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}