<?php
function generaStatus()
{
        include 'funciones.php';
	conectar();
	$consulta=mysql_query("SELECT id_status, nombre FROM status where id_status!=4 and id_status!=1;");
	desconectar();
	echo "<select name='status' id='status' class='sel' onChange='cargaContenido(this.id)'>";
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


<script type="text/javascript" src="js/select_dependientes.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
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
			<h2>Altas</h2>
                        <form id="ContactForm" name="testform" action="alta_equipo.php" method="post">
				<div>
					<div class="wrapper">
                                            <div class="bg"><input type="text"  class="input"  id="no_serie" name="no_serie"/></div>
						Numero de serie:<br />
					</div>
					<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" id="equipo" name="equipo"/></div>
						Equipo:<br />
					</div>
                     			<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" id="marca" name="marca"/></div>
						Marca:<br />
					</div>
					<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" id="modelo" name="modelo"/></div>
						Modelo:<br />
					</div>        
                     			<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" id="nombre_equipo" name="nombre_equipo" /></div>
						Nombre del equipo:<br />
					</div>
                       			<div class="wrapper">
                                            <div class="bg"><input type="text" class="input" id="capacidad" name="capacidad"/></div>
						Capacidad:<br />
					</div>
                               		<div class="wrapper">
                                            <div class="bg" id="comentarios">
							<textarea name="comentarios" cols="1" rows="1"></textarea>
						</div>
                                                Comentarios:<br />
					</div>   
                                       <div class="wrapper">  
                                           <div class="wrapper">
                                            Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <?php generaStatus(); ?>         
                                           </div>
					   <br />
					</div>   
                			<div id="wrapper">
                                                Instalacion:&nbsp;
                        			<select disabled="disabled" name="instalaciones" id="instalaciones" class="sel2">
                                			<option value="0">Selecciona opci&oacute;n...</option>
                                        	</select>
                                                <br/>
                                        </div>
                                        <a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Cancelar</a>
                                        <a href="#" class="button1" onClick="return valida_alta()">Guardar</a>
			</form>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 
