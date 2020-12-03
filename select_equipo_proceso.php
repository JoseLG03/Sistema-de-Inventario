<?php
// Array que vincula los IDs de los selects declarados en el HTML con el nombre de la tabla donde se encuentra su contenido
$listadoSelects=array(
"status"=>"status",
"instalaciones"=>"instalaciones"
);

function validaSelect($selectDestino)
{
	// Se valida que el select enviado via GET exista
	global $listadoSelects;
	if(isset($listadoSelects[$selectDestino])) return true;
	else return false;
}

function validaOpcion($opcionSeleccionada)
{
	// Se valida que la opcion seleccionada por el usuario en el select tenga un valor numerico
	if(is_numeric($opcionSeleccionada)) return true;
	else return false;
}

$selectDestino=$_GET["select"]; 
$opcionSeleccionada=$_GET["opcion"];

if(validaSelect($selectDestino) && validaOpcion($opcionSeleccionada))
{
	$tabla=$listadoSelects[$selectDestino];
	include 'funciones.php';
	conectar();
	$consulta=mysql_query("SELECT id_instalaciones, nombre FROM $tabla WHERE relacion='$opcionSeleccionada'") or die(mysql_error());
	desconectar();
	
	// Comienzo a imprimir el select
        echo "Instalacion:&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<select class='sel' name='".$selectDestino."' id='".$selectDestino."' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige ...</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
		$registro[1]=htmlentities($registro[1]);
		// Imprimo las opciones del select
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}			
	echo "</select>";
}
?>