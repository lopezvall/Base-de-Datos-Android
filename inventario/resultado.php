<?php
    $cod=$_POST['cod'];
    $prod=$_POST['pro'];
    $cant=$_POST['can'];
    $prec=$_POST['pre'];


     //REALIZAR LA CONEXIÓN CON LA BASE DE DATOS
    require_once('conexion.php');
    $sql="INSERT INTO inventario(codigo,producto,cantidad,precio) VALUES('$cod','$prod','$cant','$prec')";
    if (mysqli_query($conexion,$sql)){
    	//print 'LA INFORMACIÓN SE INSERTÓ EXITOSAMENTE';
        header("Location:inventario.html");
    }else{
    	print 'LA INFORMACIÓN NO SE LOGRÓ INSERTAR '.mysqli_error($conexion).$sql;
    }

  
?>
