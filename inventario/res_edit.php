<?php
    $cod=$_POST['cod'];
    $pro=$_POST['pro'];
    $can=$_POST['can'];
    $pre=$_POST['pre'];
     //REALIZAR LA CONEXIÓN CON LA BASE DE DATOS
    require_once('conexion.php');
    $id= $_GET['codigo'];
    $sql="UPDATE inventario SET codigo='$cod',producto='$pro',cantidad='$can',precio='$pre' WHERE codigo=$id";
    if (mysqli_query($conexion,$sql)){
    	//print 'LA INFORMACIÓN SE INSERTÓ EXITOSAMENTE';
        header("Location:bd.php");
    }else{
    	print 'LA INFORMACIÓN NO SE LOGRÓ MODIFICAR '.mysql_error().$sql;
    }

  
?>