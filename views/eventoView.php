Listado de Eventos
<?php
	foreach($eventos as $evento) {
		echo "</br><b>ID: </b>".$evento->getId()." <b>Nombre: </b> ".$evento->getNombre()." <b>Descripcion:</b> ".$evento->getDescripcion();
	}
?>