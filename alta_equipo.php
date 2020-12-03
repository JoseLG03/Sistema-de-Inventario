<?php
    require_once 'funciones.php';
    $con=mysql_connect("localhost","root","") or die("Problemas en la conexion");
    $sta="$_REQUEST[status]";
    $area=5;
    if($sta==3){
        $sta=1;
    }
    else{
        $sta=$_REQUEST[status];
    }
    mysql_select_db("inv_fa",$con) or die("Problemas en la seleccion de la base de datos");
    mysql_query("insert into equipo(serie,tipo_eq, marca, modelo, nombre, capacidad, status, comentarios, id_instalaciones,id_area)
            values ('$_REQUEST[no_serie]','$_REQUEST[equipo]','$_REQUEST[marca]','$_REQUEST[modelo]','$_REQUEST[nombre_equipo]',
            '$_REQUEST[capacidad]',$sta,'$_REQUEST[comentarios]','$_REQUEST[instalaciones]',$area )", $con)
            or die("Problemas en el select".mysql_error());      
    desconectar();
    echo 'Alta exitosa';
    ir_altas();
?>
