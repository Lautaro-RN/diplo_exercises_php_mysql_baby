<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="#">Noticias</a></li><li><a href="#">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
        
        <h2>Contáctenos</h2>
        
        <div id="caja_formulario">
            <form method="POST" action="enviar_consulta.php">
                <input class="i" required type="text" maxlength="20" name="nombre" placeholder="Nombre">
                <input class="i" required type="text" maxlength="20" name="apellido" placeholder="Apellido">
                <input class="i" type="number" maxlength="3" name="edad" placeholder="Edad">
                <input class="i" required type="email" maxlength="30" name="correo" placeholder="Correo Electrónico">
                <select id="tipo" required maxlength="3" name="tipo_cons">
                    <option value="opcion_a">Duda</option>
                    <option value="opcion_b">Reclamo</option>
                    <option value="opcion_c">Otro</option>
                </select>
                <input class="i" type="text" maxlength="100" name="mensaje" placeholder="Tu Mensaje">
                <input id="btn_enviar" type="submit" name="Enviar">
            </form>
            <div> <?php
                if (isset($_GET['success'])) {
                    echo "<h3  id=\"exito\">¡Tu consulta fue enviada con éxito!</h3>";
                }
            ?> </div>

        </div>

    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>