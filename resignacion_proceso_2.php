<?php
$ins= $_GET['instalaciones'];
$ser= $_GET['num_serie'];
$comen= $_GET['comentarios'];

//echo $ser;
//echo $ins;
//echo $comen;
include 'funciones.php';
conectar();

$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
if($ins==4){
    $registros=mysql_query("update equipo set id_instalaciones=$ins, status=2 where serie='$ser' ",$conexion) or die("Problemas en el select:".mysql_error());
}
else{
    $registros=mysql_query("update equipo set id_instalaciones=$ins where serie='$ser' ",$conexion) or die("Problemas en el select:".mysql_error());    
}
desconectar();
ir_reasignacion();
?>
