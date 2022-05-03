<section class="content">
    <div class="container-fluid">
        <div class="col-12"><i>REGISTRAR</i></div>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formdata">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Tipo usuario</label>
                            <select name="tipo" id="tipo" class="form-control">
                            <option  value="">Seleccionar</option>                            
                                <?php foreach ($tipoUsuarios as $tipoUsuario) : ?>
                                    <option  <?php echo $usuario->tipo_usuario == $tipoUsuario->id ? 'selected' : ''  ?> value="<?php echo $tipoUsuario->id ?>"><?php echo ucwords($tipoUsuario->tipo) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Tipo Identificacion</label>
                            <select name="tipo_identificacion" id="tipo_identificacion" class="form-control">
                            <option  value="">Seleccionar</option>                            
                                <option  <?php echo $usuario->tipo_identificacion == 'CC' ? 'selected' : ''  ?> value="CC">Cedula</option>
                                <option  <?php echo $usuario->tipo_identificacion == 'TI' ? 'selected' : ''  ?> value="TI">Tarjeta Identidad</option>
                                <option  <?php echo $usuario->tipo_identificacion == 'CE' ? 'selected' : ''  ?> value="CE">Cedula extranjeria</option>
                                <option  <?php echo $usuario->tipo_identificacion == 'P' ? 'selected' : ''  ?> value="P">Pasaporte</option>
                            
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Identificación</label>
                            <input type="text" name="num_identificacion" class="form-control" value='<?php echo $usuario->num_identificacion ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombres" class="form-control" value='<?php echo $usuario->nombres ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value='<?php echo $usuario->apellidos ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Correo</label>
                            <input type="email" name="correo" class="form-control" value='<?php echo $usuario->correo ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Telefono</label>
                            <input type="phone" name="telefono" class="form-control" value='<?php echo $usuario->telefono ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group"> 
                            <label for="nombre">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value=""> Seleccionar</option>
                                <option <?php echo $usuario->estado == '1' ? 'selected' : ''  ?> value="1"> Activo</option>
                                <option <?php echo $usuario->estado == '0' ? 'selected' : '' ?> value="0"> Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <input type="hidden" name="id" value='<?php echo $usuario->id ?>'>
                <input type="hidden" name="created" value='<?php echo date('Y-m-d') ?>'>
                <input type="hidden" name="modified" value='<?php echo date('Y-m-d') ?>'>
                <input type="button" id="guardar" class="btn btn-default btn-block" value="Enviar">

            </form>

        </div>
    </div>
</section>
<!-- /.content -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="index" id="index">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<script>
    $(document).on('click', '#guardar', function(e) {
        var data = $("#formdata").serialize();
        $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            data: data,
            type: "post",
            url: "?c=usuarios&a=Registrar",
            success: function(data) {
                Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'El usuario se creo con exito',
                        showConfirmButton: false,
                        timer: 1500
                    },
                    setTimeout(function() {
                        window.location.reload(1);
                    }, 1500)
                )
            }
        });
    });
</script>