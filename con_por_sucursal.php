<?php
function generaSucursal()
{
        include 'funciones.php';
	conectar();
	$consulta=mysql_query("SELECT id_instalaciones, nombre FROM instalaciones;");
	desconectar();
	echo "<select name='instalaciones' id='instalaciones' class='sel'>";
	echo "<option value='0'>Elige ...</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>
﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
    <div class="main">
        <!-- content -->
        <section id="content">
        <?php include('encabezado.php'); ?>
        <?php include('menu.php'); ?>
		<article class="col2 pad_left1">
			<h2>Consulta por Sucursales</h2>
                        <form id="ContactForm" action="con_por_consulta_proceso.php">
                                <div class="wrapper">
                                       <div class="wrapper">  
                                           <div class="wrapper">
                                            Sucursal:&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php generaSucursal(); ?>         
                                           </div>
					   <br />
					</div> 
                                        <a class="button1" onClick="document.getElementById('ContactForm').submit()">Confirmar</a>
				</div>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 