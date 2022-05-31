<section class="content">
    <div class="container-fluid justify-content-center">
        <div class="col-12"><i>Actualizar</i></div>
        <br>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formulario">
                <div class="row">
                    <div class="col-4">
                        <div class="formulario__grupo">
                            <label class="formulario__label" for="tipo">Tipo usuario</label>
                            <div class="formulario__grupo-input">
                                <select name="tipo_usuario" id="tipo_usuario" class="formulario__input">
                                    <option value="">Seleccionar</option>
                                    <?php foreach ($tipoUsuarios as $tipoUsuario) : ?>
                                        <option <?php echo $usuario->tipo_usuario == $tipoUsuario->id ? 'selected' : ''  ?> value="<?php echo $tipoUsuario->id ?>"><?php echo ucwords($tipoUsuario->tipo) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>                    
                   <div class="col-4">
                        <div class="form-group">
                            <label class="formulario__label" for="nombre">Estado</label>
                            <select name="estado" id="estado" class="formulario__input">
                                <option value=""> Seleccionar</option>
                                <option <?php echo $usuario->estado == '1' ? 'selected' : ''  ?> value="1"> Activo</option>
                                <option <?php echo $usuario->estado == '0' ? 'selected' : '' ?> value="0"> Inactivo</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col-4">
                        <div class="formulario__grupo" id="grupo__telefono">
                            <label for="telefono" class="formulario__label">Clave</label>
                            <div class="formulario__grupo-input">
                                <input type="password" class="formulario__input form-control" maxlength="10" name="clave" id="clave" placeholder="clave" required value='<?php echo $usuario->clave ?>'>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>                            
                        </div>
                    </div>                   
                </div>
                <br>
                <input type="hidden" name="id" value='<?php echo $usuario->id ?>'>               
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
        var data = $("#formulario").serialize();
        $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            data: data,
            type: "post",
            url: "?c=usuarios&a=Config0",
            success: function(data) {


                Swal.fire({
                        // position: 'top-end',
                        icon: 'success',
                        title: 'El usuario se ha actualizo con éxito',
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
<style>
    .modal {
        margin-top: 10% !important;
    }
</style>