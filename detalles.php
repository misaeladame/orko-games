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
                        <li class="active">
                            <a href="tienda.php">Tienda</a>
                        </li>
                        <li>
                            <a href="checkout.php">Mi cuenta</a>
                        </li>
                        <li>
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
                        Tienda
                    </li>
                
                </ul>

            </div>

            <div class="col-md-3">

                <?php

                    include("includes/sidebar.php");

                ?>

            </div>

            <div class="col-md-9">
                <div id="productoPrincipal" class="row">
                    <div class="col-sm-6">
                        <div id="imagenPrincipal">
                            <div id="miCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#miCarousel" data-slide-to="1"></li>
                                    <li data-target="#miCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/imagenes_productos/producto-1.jpg" alt="Producto 1-a"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/imagenes_productos/producto-2.jpg"" alt="Producto 1-b"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/imagenes_productos/producto-3.jpg"" alt="Prodcuto 1-c"></center>
                                    </div>
                                </div>

                                <a href="#miCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>

                                <a href="#miCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Siguiente</span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">Cartas de No Game No Life</h1>

                            <form action="detalles.php" class="form-horizontal" method="post">
                                <div class="form-group">

                                    <label for="" class="col-md-5 control-label">Cantidad:</label>
                                
                                    <div class="col-md-7">
                                        <select name="cantidad_producto" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-5 control-label">Tamaño:</label>

                                    <div class="col-md-7">
                                        <select name="tamanio_producto" class="form-control">
                                            <option>Selecciona una talla</option>
                                            <option>Small</option>
                                            <option>Mediana</option>
                                            <option>Grande</option>
                                            <option>Extra grande</option>
                                       
                                        </select>

                                    </div>
                                </div>

                                <p class="price">$500</p>

                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Agregar al carrito</button></p>
                            </form>
                        </div>

                        <div class="row" id="thumbs">

                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/imagenes_productos/producto-1.jpg" alt="Producto 1" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/imagenes_productos/producto-2.jpg" alt="Producto 2" class="img-responsive">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="#" class="thumb">
                                    <img src="admin_area/imagenes_productos/producto-3.jpg" alt="Producto 3" class="img-responsive">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="box" id="detalles">
                    <h4>Detalles del producto</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam,
                    </p>

                    <h4>Tamaño</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>

                    <hr>

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
            
        </div>

    </div> <!-- Termina #contenido  -->


    <?php

        include("includes/footer.php");

    ?>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 

</body>
</html>