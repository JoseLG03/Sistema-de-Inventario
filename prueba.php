<?php
session_start();
$v_usuario=$_REQUEST['usuario'];
$v_password=$_REQUEST['password'];
//$_SESSION['usuario']=$_REQUEST['usuario'];
//$_SESSION['clave']=$_REQUEST['password'];
//echo 'Te haz loguedo como '.$_SESSION['usuario']; 
echo $v_usuario;
echo $v_password;
?>
