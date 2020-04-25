Listado de Areas
<?php
	foreach($areas as $area) {
		echo "</br><b>ID: </b>".$area->getId()." <b>Descripcion: </b>".$area->getDescripcion();
	}
?>