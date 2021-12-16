<?php
    $id= $_GET['codigo'];
    require_once('conexion.php');
    $sql="DELETE FROM inventario WHERE codigo=$id";
    if (mysqli_query($conexion,$sql)){
        header("Location:bd.php");
    }else{
        print 'LA INFORMACIÓN NO SE LOGRÓ ELIMINAR '.mysqli_error().$sql;
    }
?>