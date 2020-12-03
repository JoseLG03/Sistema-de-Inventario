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
</head>
<body id="page1">
    <div class="main">
        <!-- content -->
        <section id="content">
        <?php include('encabezado.php'); ?>
        <?php include('menu.php'); ?>
        <article class="col2 pad_left1">
			<h2>Baja</h2>
				<div>
            <?php
                require_once 'funciones.php';
                conectar();
                $ser= $_GET['num_serie'];
                $consulta=mysql_query("SELECT equipo.serie, equipo.tipo_eq, equipo.marca, equipo.modelo, equipo.nombre, equipo.capacidad, 
                        equipo.comentarios, status.nombre as `status`, instalaciones.nombre as `instalacion`  FROM `equipo`,`status`,`instalaciones` 
                        WHERE status.id_status=equipo.status and instalaciones.id_instalaciones=equipo.id_instalaciones and equipo.serie=$ser")
                        or die("Problemas en el select:".mysql_error());
                if ($reg=mysql_fetch_array($consulta))
                    {

                       echo"
                           <br>
                            <TABLE border='1' cellpadding='10'>
                                <CAPTION> Resultado de la busqueda</CAPTION>
                                <TR>
                                    <TD>
                                        Serie
                                    </TD>
                                    <TD>
                                        Equipo
                                    </TD>
                                    <TD>
                                        Marca
                                    </TD>    
                                    <TD>
                                        Modelo
                                    </TD>     
                                    <TD>
                                        Nombre
                                    </TD>     
                                    <TD>
                                        Capacidad
                                    </TD>        
                                    <TD>
                                        Comentarios
                                    </TD>
                                    <TD>
                                        Status
                                    </TD>     
                                    <TD>
                                        Instalaciones
                                    </TD>                                    
                                </TR> 
                                <TR>
                                    <TD>
                                        ".$reg['serie']."
                                    </TD>
                                    <TD>
                                        ".$reg['tipo_eq']."
                                    </TD>              
                                    <TD>
                                        ".$reg['marca']."
                                    </TD>            
                                    <TD>
                                        ".$reg['modelo']."
                                    </TD>             
                                    <TD>
                                        ".$reg['nombre']."
                                    </TD>             
                                    <TD>
                                        ".$reg['capacidad']."
                                    </TD>              
                                    <TD>
                                        ".$reg['comentarios']."
                                    </TD>                  
                                    <TD>
                                        ".$reg['status']."
                                    </TD>             
                                    <TD>
                                        ".$reg['instalacion']."
                                    </TD>                                    
                                </TR>
                              </TABLE>
                        ";   
                     
?>
                                    <br></br>
                                    <form action="baja_proceso_3.php" method="get" id="ContactForm">
                                        <input type="hidden" name="no_serie" value="<?php echo $ser ?>">
                                        <a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Confirmar baja</a>
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
