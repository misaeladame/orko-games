<h1 align="center"> Edita tu cuenta </h1>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">

        <label> Nombre del cliente: </label>

        <input type="text" name="c_nombre" class="form-control">

    </div>
    <div class="form-group">

        <label>Email</label>

        <input type="text" class="form-control" name="c_email" required>
    </div>
    <div class="form-group">

        <label>Estado</label>

        <input type="text" class="form-control" name="c_estado" required>
    </div>
    <div class="form-group">

        <label>Municipio</label>

        <input type="text" class="form-control" name="c_municipio" required>
    </div>
    <div class="form-group">

        <label>Codigo Postal</label>

        <input type="text" class="form-control" name="c_cp" required>
    </div>
    <div class="form-group">

        <label>Colonia o Localidad</label>

        <input type="text" class="form-control" name="c_colonia" required>
    </div>
    <div class="form-group">

        <label>Calle y Numero</label>

        <input type="text" class="form-control" name="c_calle_numero" required>
    </div>
    <div class="text-center">

        <button name="actualizar" class="btn btn-primary">

            <i class="fa fa-user-md"></i> Actualizar ahora

        </button>
        
    </div>

</form>