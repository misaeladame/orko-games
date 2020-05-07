<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <title>Orko Games</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>

    <div id="top"> <!-- Inicia Top -->

        <div class="container"> <!-- Inicia container  -->

            <div class="col-md-6 offer"> <!-- Inicia col-md-6 offer -->
                
                <a href="#" class="btn btn-success btn-sm">Bienvenidos</a> 
                <a href="checkout.php">4 articulos en tu Carrito | Precio Total: $300 </a>  

            </div> <!-- Termina col-md-6 offer  -->

            <div class="col-md-6"> <!-- Inicia col-md-6  -->
                <ul class="menu">
                
                    <li>
                        <a href="registro_cliente.php">Registro</a>
                    </li>
                    <li>
                        <a href="checkout.php">Mi cuenta</a>
                    </li>
                    <li>
                        <a href="carrito.php">Ir al carrito</a>
                    </li>
                    <li>
                        <a href="checkout.php">Iniciar sesión</a>
                    </li>

                </ul> <!-- Termina menú -->

            </div> <!-- Termina col-md-6  -->

        </div> <!-- Termina container  -->

    </div> <!-- Termina Top  -->

    <div id="navbar" class="navbar navbar-default"> <!-- Inicia navbar navbar-default  -->

        <div class="container"> <!-- Inicia container -->

            <div class="navbar-header"> <!-- Inicia navbar-header -->
                <a href="index.php" class="navbar-brand home">

                    <img src="imagenes/orko-games-logo.png" alt="Logo Orko">   

                </a>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Navegación de Palanca</span>
                    <i class="fa fa-align-justify"></i>
                </button>
    
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Navegación de búsqueda</span>
                    <i class="fa fa-search"></i>
                </button>

            </div> <!-- Termina navbar-header -->

            <div class="navbar-collapse collapse" id="navigation"> <!-- Inicia navbar-collapse collapse -->

                <div class="padding-nav"> <!-- Inicia padding-nav -->

                    <ul class="nav navbar-nav left">

                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="tienda.php">Tienda</a>
                        </li>
                        <li>
                            <a href="checkout.php">Mi cuenta</a>
                        </li>
                        <li class="active">
                            <a href="carrito.php">Carrito de compras</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contactanos</a>
                        </li>

                    </ul> <!-- Termina nav navbar-nav left -->

                </div> <!-- Termina padding-nav -->

                <a href="carrito.php" class="btn navbar-btn btn-primary right"> <!-- Inicia btn navbar-btn btn-primary right -->

                    <i class="fa fa-shopping-carrito"></i>
                    <span>4 Artículos En Tu Carrito</span>

                </a>

                <div class="navbar-collapse collapse right">

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Navegación de Palanca</span>
                        <i class="fa fa-search"></i>
                    </button>

                </div>

                <div class="collapse clearfix" id="search">

                    <form method="get" action="resultados.php" class="navbar-form">

                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Buscar" name="user_query" required>
                            <span class="input-group-btn">
                            
                            <button type="submit" name="search" value="Buscar" class="btn btn-primary">

                                <i class="fa fa-search"></i>

                            </button>

                            </span>

                        </div>

                    </form>

                </div>

            </div> <!-- Termina navbar-collapse collapse -->

        </div> <!-- Termina container -->

    </div> <!-- Termina navbar navbar-default  -->


    <div id="contenido"> <!-- Inicia #contenido  -->
        <div class="container">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        Carrito
                    </li>
                
                </ul>

            </div>

            <div id="carrito" class="col-md-9">

                <div class="box">

                    <form action="carrito.php" method="post" enctype="multipart/form-data">
                    
                        <h1>Carrito de compras</h1>
                        <p class="text-muted">Actualmente tienes 3 articulo(s) en tu carrito</p>

                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                    <tr>

                                        <th colspan="2">Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Tamaño</th>
                                        <th colspan="1">Borrar</th>
                                        <th colspan="2">Subtotal</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>

                                        <td>

                                            <img class="img-responsive" src="admin_area/imagenes_productos/producto-1.jpg" alt="Producto 1">

                                        </td>
                                        <td>

                                            <a href="#">Cartas de NGNL</a>

                                        </td>

                                        <td>

                                            2

                                        </td>

                                        <td>

                                            $500

                                        </td>

                                        <td>

                                            Largo

                                        </td>
                                        <td>

                                            <input type="checkbox" name="remover[]" id="">

                                        </td>
                                        <td>

                                            $1000

                                        </td>
                                    </tr>

                                </tbody>

                                <tbody>

                                    <tr>

                                        <td>

                                            <img class="img-responsive" src="admin_area/imagenes_productos/producto-2.jpg" alt="Producto 1">

                                        </td>
                                        <td>

                                            <a href="#">Dirt 3 para PS3</a>

                                        </td>

                                        <td>

                                            4

                                        </td>

                                        <td>

                                            $50

                                        </td>

                                        <td>

                                            Impresionante

                                        </td>
                                        <td>

                                            <input type="checkbox" name="remover[]" id="">

                                        </td>
                                        <td>

                                            $200

                                        </td>
                                    </tr>

                                </tbody>

                                <tbody>

                                    <tr>

                                        <td>

                                            <img class="img-responsive" src="admin_area/imagenes_productos/producto-3.jpg" alt="Producto 1">

                                        </td>
                                        <td>

                                            <a href="#">Una flor mística</a>

                                        </td>

                                        <td>

                                            1

                                        </td>

                                        <td>

                                            $5000

                                        </td>

                                        <td>

                                            Amazing

                                        </td>
                                        <td>

                                            <input type="checkbox" name="remover[]" id="">

                                        </td>
                                        <td>

                                            $5000

                                        </td>
                                    </tr>

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th colspan="5">Total</th>
                                        <th colspan="2">$6200</th>

                                    </tr>

                                </tfoot>

                            </table>

                        </div>

                        <div class="box-footer">

                            <div class="pull-left">

                                <a href="index.php" class="btn btn-default">

                                    <i class="fa fa-chevron-left"></i> Seguir comprando

                                </a>

                            </div>
                            
                            <div class="pull-right">

                                <button type="submit" name="actualizar" value="Actualizar Carrito" href="index.php" class="btn btn-default">

                                    <i class="fa fa-refresh"></i> Actualizar Carrito

                                </button>

                                <a href="checkout.php" class="btn btn-primary">

                                    Proceder al pago <i class="fa fa-chevron-right"></i>

                                </a>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">Productos que te pueden gustar</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="detalles.php">
                                <img class="img-responsive" src="admin_area/imagenes_productos/producto-3.jpg" alt="Producto 3">
                            </a>

                            <div class="text">
                                <h3><a href="detalles.php">Cartas de Yu-Gi-Oh</a></h3>

                                <p class="price">$400</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="detalles.php">
                                <img class="img-responsive" src="admin_area/imagenes_productos/producto-3.jpg" alt="Producto 3">
                            </a>

                            <div class="text">
                                <h3><a href="detalles.php">Cartas de Yu-Gi-Oh</a></h3>

                                <p class="price">$400</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                    
                <div id="resumen-del-pedido" class="box">

                    <div class="box-header">

                        <h3>Resumen del pedido</h3>

                    </div>

                    <p class="text-muted">

                        los costos de envío y adicionales se calculan en función del valor que ha ingresado

                    </p>

                    <div class="table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>

                                    <td> Subtotal de Orden </td>
                                    <td> $6200 </td>

                                </tr>
                                <tr>

                                    <td> Envío y manipulación </td>
                                    <td> $0 </td>

                                </tr>
                                <tr>

                                    <td> Impuestos </td>
                                    <td> $0 </td>

                                </tr>
                                <tr>

                                    <td> Total </td>
                                    <td> $6200 </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div> <!-- Termina #contenido  -->


    <?php

        include("includes/footer.php");

    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 

</body>
</html>