<?php
function generaPaises()
{
	include 'conexion.php';
	conectar();
	$consulta=mysql_query("SELECT id, opcion FROM lista_paises");
	desconectar();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<select name='paises' id='paises' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
?>

<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AJAX, Ejemplos: Combos (select) dependientes, codigo fuente - ejemplo</title>
<link rel="stylesheet" type="text/css" href="select_dependientes.css">
<script type="text/javascript" src="select_dependientes.js"></script>
</head>

<body>

			<div id="demo" style="width:600px;">
				<div id="demoDer">
					<select disabled="disabled" name="estados" id="estados">
						<option value="0">Selecciona opci&oacute;n...</option>
					</select>
				</div>
				<div id="demoIzq"><?php generaPaises(); ?></div>
			</div>
			
</body>
</html>
