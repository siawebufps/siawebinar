Listado de Entidades
<?php
	foreach($entidades as $entidad) {
		echo "</br><b>ID:</b>".$entidad->getId()." <b>Nombre:</b> ".$entidad->getNombre()." <b>Tipo:</b> ".$entidad->getTipo()." <b>Ciudad:</b> ".$entidad->getCiudad();
	}
?>