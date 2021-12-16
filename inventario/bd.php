 <?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos_inventario.css">
    <title>PRODUCTOS REGISTRADOS</title>
</head>
<body>
 <br>
  <tr>
            <center><td colspan="2" align="center"><h1 class="listadep">LISTA DE REGISTROS DE PRODUCTOS</h1></td></center>
        </tr>
 <table class="bd" style = "color:#000099"width="900" border=3 bordercolor="#333333" align="center"> 
  <tr style="background-color:skyblue;">
   
    <td>ID</td>
    <td>NOMBRE PRODUCTO</td>
    <td>CANTIDAD</td>
    <td>PRECIO</td>
    <td width="250" colspan="2">ACCIÓN</td>
  </tr>

 <?php
  $sql="SELECT * from inventario"; 
  $result=mysqli_query($conexion, $sql);

  while($mostrar= mysqli_fetch_array($result)) {
    print '

    <tr>
      <td>'.$mostrar['codigo'].'</td>
      <td>'.$mostrar['producto'].'</td>
      <td>'.$mostrar['cantidad'].'</td>
      <td>'.$mostrar['precio'].'</td>

      <td style="background-color:gray;"><a href="eliminar.php? codigo='.$mostrar['codigo'].'">ELIMINAR</a></td>
    </tr>

    ';}?><a class="reg2" href="../index.html"> Regresar</a>
</body>
</html>