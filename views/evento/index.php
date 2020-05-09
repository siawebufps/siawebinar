<?php
/*
	foreach($eventos as $evento) {
		echo "</br><b>ID: </b>".$evento->getId()." <b>Nombre: </b> ".$evento->getNombre()." <b>Descripcion:</b> ".$evento->getDescripcion();
	}
	*/
?>


<section class="slider-evento">
	<article class="slider-evento__content">
		<div class="slider-evento__info">
			<p class="slider-evento__info--txt">New</p>
			<h1 class="slider-evento__info--title">Curso de Backend y Frontend usando JPA, HTML, CSS y Javascript</h1>
			<div class="slider-evento__entidad">
				<span class="slider-evento__entidad--verificado icon-checkmark"></span>
				<p class="slider-evento__entidad--name">Semillero siaweb</p>
			</div>
		</div>
		<figure class="slider-evento__fig">			
			<img class="slider-evento__picture" src="<?php echo BASE_URL;?>/assets/imagen/imgevent.jpg">
		</figure>
	</article>
</section>

<section class="eventos">
	<article class="eventos__content">
		<div class="eventos__menu">
			<div class="eventos__menu__content">
				<div class="eventos__menu__fecha">
					<p class="eventos__menu--txt">Eventos</p>
					<p class="eventos__menu--txt">|</p>
					<p class="eventos__menu--fecha">Mayo, 2020</p>
				</div>
				<a class="eventos__menu--filtro" href="">Filtrar por</a>
			</div>
		</div>
		<div class="eventos__cursos-grid">
			<?php foreach($eventos as $evento) { ?>
			<div class="eventos__cursos__post event-grid">
				<div class="eventos__cursos__post__content">
					<div class="eventos__cursos__info">
						<p class="eventos__cursos--title"><?php echo $evento->getNombre() ?></p>
						<p class="eventos__cursos--descripcion">
							<?php echo $evento->getDescripcion() ?>
						</p>
						<a class="eventos__cursos--entidad" href=""><?php echo $evento->getEntidad()->getNombre() ?></a>
					</div>
					<div class="eventos__cursos__date-autor">
						<div class="eventos__cursos__date-autor__content">
							<p class="eventos__cursos--fecha"><?php 
							$fecha_format = date('M d, Y', strtotime($evento->getFechainicio()));
							echo $fecha_format; ?></p>
							<p class="eventos__cursos--autor">By: <?php echo $evento->getResponsable() ?></p>
						</div>
						<span class="eventos__cursos__btn-like">❤</span>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
		<a class="eventos__btn-vermas" href="eventos.php">
			<p class="eventos__btn-vermas--txt">Ver más</p>
		</a>
	</article>
</section>