<?php

$conectar = mysqli_connect("localhost", "root", "", "phpintermedio") or die ("Ocurrió un error").mysqli_error($conectar);
//echo "Funciona $.conectar; ";

$sel_tabla = "SELECT * FROM pedidos" or die ("Ocurrió un error").mysqli_error($conectar);
//echo "Funciona $.sel_tabla; ";

$consulta = mysqli_query($conectar, $sel_tabla);
//echo "Funciona $.mostrardatos; ";

?>