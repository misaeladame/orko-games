<div class="panel panel-defaault sidebar-menu"> <!-- Empieza panel panel-defaault sidebar-menu -->

    <div class="panel-heading">

        <!--  <center>

            <img src="" alt="">

        </center>  -->

        <h3 align="center" class="panel-title">

            Nombre: Misael Adame

        </h3>

    </div>

    <div class="panel-body">

        <nav class="nav-pills nav-stacked nav">

            <li class="<?php if(isset($_GET['mis_ordenes'])){echo"active";} ?>">

                <a href="mi_cuenta.php?mis_ordenes">

                    <i class="fa fa-list"></i> Mis ordenes

                </a>

            </li>

            <li class="<?php if(isset($_GET['pagar_offline'])){echo"active";} ?>">

                <a href="mi_cuenta.php?pagar_offline">

                    <i class="fa fa-bolt"></i> Pagar offline

                </a>

            </li>

            <li class="<?php if(isset($_GET['editar_cuenta'])){echo"active";} ?>">

                <a href="mi_cuenta.php?editar_cuenta">

                    <i class="fa fa-pencil"></i> Editar cuenta

                </a>

            </li>

            <li class="<?php if(isset($_GET['cambiar_contrasenia'])){echo"active";} ?>">

                <a href="mi_cuenta.php?cambiar_contrasenia">

                    <i class="fa fa-user"></i> Cambiar Contraseña

                </a>

            </li>

            <li class="<?php if(isset($_GET['borrar_cuenta'])){echo"active";} ?>">

                <a href="mi_cuenta.php?borrar_cuenta">

                    <i class="fa fa-trash-o"></i> Borrar cuenta

                </a>

            </li>

            <li>

                <a href="cerrar_sesion.php">

                    <i class="fa fa-sign-out"></i> Cerrar sesión

                </a>

            </li>



        </nav>

    </div>

</div> <!-- Termina panel panel-defaault sidebar-menu -->