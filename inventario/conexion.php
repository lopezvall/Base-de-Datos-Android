<?php 
   $servidor="localhost";
   $usuario="root";
   $contra="";
   $bd="pwebii";
   $conexion=mysqli_connect($servidor,$usuario,$contra) or trigger_error(mysqli_error(),E_USER_ERROR);
   mysqli_select_db($conexion,$bd);

   
?>