<?php
   $id= $_GET['codigo']; 
   require_once('conexion.php');
   $sql="SELECT codigo,producto,cantidad,precio FROM inventario WHERE codigo=$id";
   $result=mysqli_query($conexion,$sql);
   $datos=mysqli_fetch_array($result);
   
   $cod=$datos['codigo'];
   $prod=$datos['producto'];
   $cant=$datos['cantidad'];
   $prec=$datos['precio'];
   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO INVENTARIO</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<section class="form-inventario">
		<form action="res_edit.php?id=<?php echo $id ?>" method="post" onsubmit="return valida(this)">
			<h5>inventarios</h5>
		  <input class="controls" type="text"  placeholder="&#128272; Codigo" name="cod" value="<?php echo $cod ?>">
		  <input class="controls" type="text" placeholder="&#128272; Producto" name="pro" value="<?php echo $prod ?>">
		  <input class="controls" type="text"  placeholder="&#128272; Cantidad" name="can" value="<?php echo $cant ?>"> 
		  <input class="controls" type="text" placeholder="&#128272; Precio" name="pre" value="<?php echo $prec ?>">

		  <input class="buttons" type="submit" name="submit" value="Ingresar">
		  <a class="reg" href="index.html"> regresar</a>
		  <p><a href="">¿Olvidastetu contraseña?</a></p>
	  
     </form>

   </section>

</body>
</html>
