<!DOCTYPE html>
<html lang="es">
<head>
	<title>NOSOTROS</title>
	<?php include('layouts/meta_index.php');?>
	<?php include('layouts/css.php');?>
</head>
<body >
	<div id="pi-all">
		<?php include('layouts/header.php');?>
		<?php include('nosotros/breadcrumbs.php') ?>
		<div class="pi-section-w pi-section-white pi-slider-enabled">
			<div class="pi-section pi-padding-top-bottom-80">
				<?php include('nosotros/introduccion.php')?>
				<?php include('nosotros/mision-vision.php') ?>
				<?php include('nosotros/departamento-procesos.php') ?>
			</div>
		</div>
		<?php include('nosotros/unete.php') ?>
		

		<?php include('layouts/footer.php'); ?>
				
	</div>
	
	<?php include('layouts/js-nosotros.php'); ?>	

</body>
</html>