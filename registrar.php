<?php
    //conexion con labase de datos y el servidor
    $link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
    $bd = mysql_select_db("inventario",$link) or die("<h2>Error de conexion</h2>");

    //obtenemos los valores del formulario
    $