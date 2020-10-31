<h1 align="center"> Cambiar contraseña </h1>

<form action="" method="POST">

    <div class="form-group">

        <label> Contraseña actual: </label>

        <input type="password" name="contrasenia_actual" class="form-control">

    </div>
    <div class="form-group">

        <label> Contraseña nueva: </label>

        <input type="password" class="form-control" name="contrasenia_nueva" required>
    </div>
    <div class="form-group">

        <label> Confirmar Contraseña nueva: </label>

        <input type="password" class="form-control" name="confirmar_contrasenia_nueva" required>
    </div>
    <div class="text-center">

        <button type="submit" name="enviar" class="btn btn-primary">

            <i class="fa fa-user-md"></i> Actualizar ahora

        </button>
        
    </div>

</form>