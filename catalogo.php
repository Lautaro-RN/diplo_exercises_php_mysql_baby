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
        <div><h2>Catálogo</h2></div>
        <nav id="botones_cat">
            <ul>
                <li><a href="catalogo.php?id=pr1">Sillón Capri</a></li>
                <li><a href="catalogo.php?id=pr2">Mesa Ipanema</a></li>
                <li><a href="catalogo.php?id=pr3">Banco Venecia</a></li>
            </ul>
        </nav>
        <div id="productos">
            <?php
                if (isset($_GET['id'])) {

                switch ($_GET['id']) {
                    case 'pr1':
                        $producto='Sillón CAPRI';
                        $precio=345;
                        $caract='Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                        $imagenpr='imagenes/sillon.jpg';
                        break;
                    case 'pr2':
                        $producto='Mesa Ipanema';
                        $precio=500;
                        $caract='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                        $imagenpr='imagenes/ipanema.jpg';
                        break;
                    case 'pr3':
                        $producto='Banco Venecia';
                        $precio='450';
                        $caract='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                        $imagenpr='imagenes/venecia.jpg';
                        break;  
                    }
            ?>
                <div id="prod">
                    <h3><strong>Producto: </strong><?php echo $producto; ?></h3>
                </div>
                <div id="imgp"><img src="<?php echo $imagenpr; ?>"></div>
                <div id="prec"><p><strong>Precio: $ </strong><?php echo $precio;  ?>.00</p>
                </div>
                <div id="car"><p><strong>Características: </strong><?php echo $caract; ?>
                </div>
                
            <?php
                }else{
                    ?><h3>Conocé nuestros productos</h3> <?php
            }
            ?>
        </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>