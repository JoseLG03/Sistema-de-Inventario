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
        <article class="pad_left3">
            <?php
                $equipo='$_REQUEST[num_serie]';
                require_once 'funciones.php';
                conectar();
                $consulta=mysql_query("SELECT equipo.serie, equipo.tipo_eq, equipo.marca, equipo.modelo, equipo.nombre, equipo.capacidad, 
                        equipo.comentarios, status.nombre as `status`, instalaciones.nombre as `instalacion`  FROM `equipo`,`status`,`instalaciones` 
                        WHERE status.id_status=equipo.status and instalaciones.id_instalaciones=equipo.id_instalaciones and equipo.serie='$_REQUEST[num_serie]'")
                        or die("Problemas en el select:".mysql_error());
                
                        echo "<br/>";
                
                        echo "<table border = '1'>";

                        echo "<tr>";

                        echo "<td><b>Numero de Serie</b></td>";

                        echo "<td><b>Tipo de equipo</b></td>";
                        
                        echo "<td><b>Marca</b></td>";
                        
                        echo "<td><b>Modelo</b></td>";
                        
                        echo "<td><b>Nombre</b></td>";
                        
                        echo "<td><b>Capacidad</b></td>";
                        
                        echo "<td><b>Comentarios</b></td>";
                        
                        echo "<td><b>Status</b></td>";

                        echo "<td><b>Instalacion</b></td>";
                        
                        echo "</tr>"; 
                        
                        while ($row = mysql_fetch_row($consulta)){
                            for($i=0;$i<count($row);$i++) 
                                { 
                                    echo "<td> $row[$i]</td>";
                                } 
                            echo "</tr>";

                        }    
                echo "</table>";                        
                    desconectar()
            ?>
	</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html> 
