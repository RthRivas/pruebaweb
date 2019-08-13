<?php
	require_once "../clases/Conexion.php";
	$c= new conectar();
    $conexion=$c->conexion();?>
    <body id="container-page-product">
        <section id="infoproduct">
            <?php include 'navbar.php'; ?>
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <h1>Libreria SARILO</small></h1>
                        </div>
                        
                                    <div class="col-xs-12 col-sm-6">
                                        <h3 class="text-center">Información de producto</h3>
                                        <br><br>
                                        <h4><strong>Nombre: </strong> <?php echo $ver[0]; ?></h4><br>
                                        <h4><strong>Disponibles: </strong><?php echo $ver[3]; ?></h4><br>
                                        <h4><strong>Marca: </strong><?php echo $ver[2]; ?></h4><br>
                                        <h4><strong>Precio: </strong><?php echo $ver[1]; ?></h4>

                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <br><br><br>
                                        <a href=""><img  src=" <?php $imgVer=explode("/", $ver[4]) ;$imgruta=$imgVer[1]."/".$imgVer[2]."/".$imgVer[3];	?>">
                                    <img width="80" height="80" src="<?php echo $imgruta ?>"></a>
                                    </div>
                                    <br><br><br>
                                    <div class="col-xs-12 text-center">
                                        <a href=" "class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>Regresar a la tienda</a> 
                                        <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                                    </div>
                                
                    </div>
                </div>
            </section>
    </body>