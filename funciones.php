function conectar()
{
    $usuario = "root";
    $contrasena = "contraseña"; 
    $servidor = "localhost";
    $basededatos = "inv_fa";

	$conexion=mysql_connect($servidor, $usuario, "") or die("Problemas en la conexion");
        mysql_select_db($basededatos);
}
