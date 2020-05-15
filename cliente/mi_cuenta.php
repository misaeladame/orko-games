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
                        <a href="../registro_cliente.php">Registro</a>
                    </li>
                    <li>
                        <a href="../checkout.php">Mi cuenta</a>
                    </li>
                    <li>
                        <a href="../carrito.php">Ir al carrito</a>
                    </li>
                    <li>
                        <a href="../checkout.php">Iniciar sesión</a>
                    </li>

                </ul> <!-- Termina menú -->

            </div> <!-- Termina col-md-6  -->

        </div> <!-- Termina container  -->

    </div> <!-- Termina Top  -->

    <div id="navbar" class="navbar navbar-default"> <!-- Inicia navbar navbar-default  -->

        <div class="container"> <!-- Inicia container -->

            <div class="navbar-header"> <!-- Inicia navbar-header -->
                <a href="../index.php" class="navbar-brand home">

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
                            <a href="../index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="../tienda.php">Tienda</a>
                        </li>
                        <li class="active">
                            <a href="mi_cuenta.php">Mi cuenta</a>
                        </li>
                        <li>
                            <a href="../carrito.php">Carrito de compras</a>
                        </li>
                        <li>
                            <a href="../contacto.php">Contactanos</a>
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
                        Mi cuenta
                    </li>
                
                </ul>

            </div>

            <div class="col-md-3">

                <?php

                    include("includes/sidebar.php");

                ?>

            </div>

            <div class="col-md-9">
                <div class="box">
                    <?php   
                    if (isset($_GET['mis_ordenes'])) {
                        include("mis_ordenes.php");
                    }
                    ?>

                    <?php   

                    if (isset($_GET['pagar_offline'])) {
                        include("pagar_offline.php");
                    }

                    ?>

                    <?php   

                    if (isset($_GET['editar_cuenta'])) {
                        include("editar_cuenta.php");
                    }

                    ?>

                    <?php   

                    if (isset($_GET['cambiar_contrasenia'])) {
                        include("cambiar_contrasenia.php");
                    }

                    ?>

                    <?php   

                    if (isset($_GET['borrar_cuenta'])) {
                        include("borrar_cuenta.php");
                    }

                    ?>

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