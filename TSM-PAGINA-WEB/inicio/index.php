<!DOCTYPE html>
<html lang="es">
<head>
	<title>INICIO</title>
	<?php include('layouts/meta_index.php');?>
	<?php include('layouts/css.php');?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body  >
	<div id="pi-all">
		<?php include('layouts/header.php');?>
		<?php include('inicio/slider.php');?>
		<?php include('inicio/oportunidades_laborales_tsm.php');?>
		<?php include('inicio/envie_cv.php'); ?>
		<?php include('layouts/galeria.php'); ?>
		<?php include('layouts/footer.php'); ?>
		
	</div>
	<!--scrip para el boton up-->
	<!-- oncontextmenu="return false" onselectstart="return false" ondragstart="return false"
	</script></div><div class="n"><div class="n"> <a href="#" title="Ir arriba"><img alt="Ir arriba" border="0" src="http://2.bp.blogspot.com/_qgZA1ny_dAs/S0QFsV1WD7I/AAAAAAAADhs/ZBKrnpzqBrk/s200/arrow8a.png" style=position:fixed;bottom:0;right:0;/></a> </div>
-->
	<!--titulo con movimiento-->
	<!--
	<SCRIPT LANGUAGE="JavaScript">var txt=" Inicio TSM ";var espera=140;var refresco=null;function rotulo_title() {document.title=txt;txt=txt.substring(1,txt.length)+txt.charAt(0);refresco=setTimeout("rotulo_title()",espera);}rotulo_title();</script>
	-->
	<?php include('layouts/js.php'); ?>
	
</body>
</html>