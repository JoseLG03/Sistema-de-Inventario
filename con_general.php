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
        <article>
            <?php
                require_once 'funciones.php';
                conectar();
                $consulta=mysql_query("SELECT `equipo`.`tipo_eq` , `equipo`.`modelo` , `equipo`.`capacidad` , `equipo`.`serie` , `plaza`.`nombre` , `instalaciones`.`ubicacion` , `instalaciones`.`filial` , `instalaciones`.`nombre` , `area`.`nombre` , `equipo`.`nombre` , `personal`.`nombre`
                    FROM `equipo` , `plaza` , `instalaciones` , `area` , `personal` , `area_x_instalaciones`
                    WHERE `equipo`.`id_instalaciones` = `instalaciones`.`id_instalaciones`
                    AND `plaza`.`id_plaza` = `instalaciones`.`Plaza_id_plaza`
                    AND `area_x_instalaciones`.`Area_id_area` = `area`.`id_area`
                    AND `area_x_instalaciones`.`Instalaciones_id_instalaciones` = `instalaciones`.`id_instalaciones`
                    AND `instalaciones`.`id_personal` = `personal`.`id_personal`
                    AND `equipo`.`id_area` = `area`.`id_area`
                    ORDER BY `equipo`.`serie`")
                        or die("Problemas en el select:".mysql_error());
                        echo "<br />";
                        echo "<table border = '1'>";

                        echo "<tr>";

                        echo "<td><b>Tipo de equipo</b></td>";

                        echo "<td><b>Modelo</b></td>";
                        
                        echo "<td><b>Capacidad</b></td>";
                        
                        echo "<td><b>Numero de Serie</b></td>";
                        
                        echo "<td><b>Plaza</b></td>";
                        
                        echo "<td><b>Ubicacion</b></td>";
                        
                        echo "<td><b>Filial</b></td>";
                        
                        echo "<td><b>Sucursal</b></td>";
                        
                        echo "<td><b>Area</b></td>";
                        
                        echo "<td><b>Nombre</b></td>";
                        
                        echo "<td><b>Encargado</b></td>";
                        
                        echo "</tr>"; 
                        
                        while ($row = mysql_fetch_row($consulta)){
                            for($i=0;$i<count($row);$i++) 
                                { 
                                    echo "<td> $row[$i]</td>";
                                } 
                            echo "</tr>";

                        }    
                echo "</table>"; 
                echo "</textarea>";
                    desconectar()
            ?>
	</article>
          </section>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>   