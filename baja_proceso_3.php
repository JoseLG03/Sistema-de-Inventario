<?php
$ser= $_GET['no_serie'];
//echo $ser;
include 'funciones.php';
conectar();

$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
$registros=mysql_query("update equipo set status=4, id_instalaciones=4 where serie='$ser' ",$conexion) or die("Problemas en el select:".mysql_error());
desconectar();
ir_bajas();
?>
 

