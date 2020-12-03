<!DOCTYPE html>
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
			<h2>Reasignacion</h2>
			<div>
            <?php
                include 'funciones.php';
                $rea= $_GET['num_serie'];
                
                conectar();
function generaInstalaciones()
{
        $rea= $_GET['num_serie'];              
          
	$consulta_ins=mysql_query("SELECT id_instalaciones, nombre FROM instalaciones;");
	echo "<select name='instalaciones' id='instalaciones' class='sel'>";
	echo "<option value='0'>Elige ...</option>";
	while($registro=mysql_fetch_row($consulta_ins))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
        
}

                $consulta=mysql_query("SELECT equipo.serie, equipo.tipo_eq, equipo.marca, equipo.modelo, equipo.nombre, equipo.capacidad, 
                        equipo.comentarios, status.nombre as `status`, instalaciones.nombre as `instalacion`  FROM `equipo`,`status`,`instalaciones` 
                        WHERE status.id_status=equipo.status and instalaciones.id_instalaciones=equipo.id_instalaciones and equipo.serie=$rea")
                        or die("Problemas en el select:".mysql_error());
                if ($reg=mysql_fetch_array($consulta))
                    {           
            ?>
                            <form action="resignacion_proceso_2.php" method="get" id="ContactForm">
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="no_serie" value="<?php echo $reg['serie']?>"></div>
			Numero de serie:<br />
                    </div>
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="equipo" value="<?php echo $reg['tipo_eq']?>"></div>
			Tipo de equipo:<br />
                    </div>       
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="marca" value="<?php echo $reg['marca']?>"></div>
			Marca:<br />
                    </div>     
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="modelo" value="<?php echo $reg['modelo']?>"></div>
			Modelo:<br />
                    </div>
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="nombre" value="<?php echo $reg['nombre']?>"></div>
			Nombre:<br />
                    </div>    
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="capacidad" value="<?php echo $reg['capacidad']?>"></div>
			Capacidad:<br />
                    </div>        
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="status" value="<?php echo $reg['status']?>"></div>
			Status:<br />
                    </div>  
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" disabled="disabled" name="ins" value="<?php echo $reg['instalacion']?>"></div>
			Instalacion actual:<br />
                    </div>                                 
                    <div class="wrapper">  
                         <div class="wrapper">
                               Instalaciones:&nbsp;&nbsp;
                               <?php generaInstalaciones() ?>         
                        </div>
         		<br />
                    </div>     
                    <div class="wrapper">
                        <div class="bg"><input type="text"  class="input" name="comentarios" value="<?php echo $reg['comentarios']?>"></div>
			Comentarios:<br />
                    </div> 
                  <br></br>
                
                  <input type="hidden" name="num_serie" value="<?php echo $rea ?>">
                  <a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Confirmar</a>
              </form>
<?php
                    }
                else
                    {   
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "No existe ningun equipo con ese numero de serie.";
                    }
                    desconectar()
?>
		   </div>
		</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 

