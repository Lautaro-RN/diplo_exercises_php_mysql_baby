<?php

$nom_form = $_POST['nombre'];
$ape_form = $_POST['apellido'];
$edd_form = $_POST['edad'];
$cor_form = $_POST['correo'];
$tipo_form = $_POST['tipo_cons'];
$men_form = $_POST['mensaje'];

$conexion = mysqli_connect("localhost", "root", "", "phpintermedio");

mysqli_query($conexion, "INSERT INTO consultas_ VALUES('$nom_form', '$ape_form', $edd_form, '$cor_form', '$tipo_form', '$men_form')");

header("Location: contacto.php?success#caja_formulario");

?>