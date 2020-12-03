<?php
function conectar()
{
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
        mysql_select_db("inv_fa");
}
function conectados()
{
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
        mysql_select_db("inv_fa");
}
function desconectar()
{
	mysql_close();
}

function ir_altas()
{
    header("Location: http://localhost/PhpProject2/altas.php");
}
function ir_bajas()
{
    header("Location: http://localhost/PhpProject2/bajas.php");
}
function ir_reasignacion()
{
    header("Location: http://localhost/PhpProject2/reasignacion.php");
}
?>

