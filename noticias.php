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
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
        <section id="noticias"><h2>Noticias</h2></section>
       
        <?php
       
        $news = array (
            array('Tit'=>'LA FINAL DEL FEDERAL A YA TIENE SEDE', 'Tex'=>' El estadio Julio Humberto Grondona, de Arsenal, recibirá el partido final de la categoría que enfrente a Cipoletti contra Racing (C) o Gimnasia (S).','Img'=>'imagenes/federala.jpg', 'Fec'=>'27 de Octubre de 2021'),
            array('Tit'=>'TERMINÓ EL CALSIFICATORIO REGIONAL DEL FUTSAL AFA', 'Tex'=>'Camioneros y ADEFU, ambos de Río Grande, representarán a la Patagonia en la fase final de la Liga Nacional de Futsal Argentina.', 'Img'=>'imagenes/futsal.jpg', 'Fec'=>'26 de Octubre de 2021'),
            array('Tit'=>'ARRANCA LA LIGA NACIONAL DE BÁSQUET', 'Tex'=>'Los primeros cruces se darán este martes 2. El sábado 6 debutan Gimnasia de Comodoro e Hispano de Río Gallegos. Todos los detalles.', 'Img'=>'imagenes/lnb.jpg', 'Fec'=>'25 de Octubre de 2021')
        );
        
        for($i=0; $i<count($news); $i++){
            ?><div class="caja_nots">
                <div id="titulos"><?php echo $news[$i]['Tit']; ?></div>
                <div id="subtitulos"><?php echo $news[$i]['Tex']; ?> </div>
                <div><img id="img_noticias" src="<?php echo $news[$i]['Img']; ?>"></div>
                <div id="fechas"><?php echo $news[$i]['Fec']; ?></div>
            </div>    
        <?php } ?>
        
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>