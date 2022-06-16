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
        <div><h2>Clientes</h2></div>
        
        <div id="caja_clientes">
        
        <?php include "conectar_bd.php";
        
            while($row = mysqli_fetch_array($consulta)) {
            
                $id_pedido = $row['id_pedido'];
                $producto = $row['producto'];
                $cantidad = $row['cantidad'];
                $precio = $row['precio'];
                ?> 

                <div class="caja_datos">
                    <h3><?php echo("ID PEDIDO: ".$id_pedido) ?></h3>
                    <h3><?php echo("PRODUCTO: ".$producto) ?></h3>
                    <h3><?php echo("CANTIDAD: ".$cantidad) ?></h3>
                    <h3><?php echo("PRECIO: $ ".$precio.".00") ?></h3>
                </div>

            <?php  }   /*echo "Termina el while; ";*/  ?>

        </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>