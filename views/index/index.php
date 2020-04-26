<section class="slider">
	<h1 class="slider__title">Aprende <br> Desde Casa</h1>
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
		<div class="eventos__cursos">
			<?php  foreach($eventos as $evento) { ?>
			<div class="eventos__cursos__post">
				<div class="eventos__cursos__post__content">
					<div class="eventos__cursos__info">
						<p class="eventos__cursos--title">Curso básico</p>
						<p class="eventos__cursos--descripcion">
							<?php echo $evento->getNombre() ?>
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

<section class="mensaje">
	<article class="mensaje__content">
		<div class="mensaje__info">
			<p class="mensaje__info--txt-one">Continúa tu aprendizaje</p>
			<p class="mensaje__info--txt-two">En nuestras clases Virtuales del semillero Siaweb. Universidad UFPS</p>
		</div>
		<figure class="mensaje__fig">
			<img class="mensaje__picture" src="<?php echo BASE_URL;?>/assets/imagen/man.png">
		</figure>
	</article>
</section>