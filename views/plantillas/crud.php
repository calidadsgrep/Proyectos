<section class="content">
    <div class="container-fluid">
        <div class="col-12"><i>REGISTRAR</i></div>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formulario">
                <div class="row">

                    <div class="col-4">
                        <!-- <div class="form-group ">
                            <label for="nombre">nombre</label>
                            <input type="text" name="nombre" class="form-control" value='<?php echo $plantillas->nombre ?>' required>
                        </div> -->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <label for="nombre" class="formulario__label">Nombre</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" maxlength="20" name="nombre" id="nombre" placeholder="nombre" required value='<?php echo $plantillas->nombre ?>'>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">¡ups! El nombre solo puede contener letras. :(</p>
                        </div>
                    </div>
                    <div class="col-4">
                        
                        <div class="formulario__grupo" id="grupo__descripcion">
                            <label for="descripcion" class="formulario__label">Descripcion</label>
                            <div class="formulario__grupo-input">
                                <!-- <input type="text" class="formulario__input" minlength="20" name="descripcion" id="descripcion" placeholder="ingresa la descripcion del proyecto" required value=''> -->
                                <textarea class="formulario__input" minlength="20" name="descripcion" id="descripcion" placeholder="ingresa la descripcion del proyecto" required value='<?php echo $plantillas->descripcion ?>'></textarea>
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">La descripcion debe tener un minimo de 20 caracteres ! </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label class="formulario__label" for="nombre">Duracion</label>
                            <input type="text" name="duracion" class="formulario__input" value='<?php echo $plantillas->duracion ?>' required>
                        </div>
                    </div>
                </div>
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
        var data = $("#formulario").serialize();
        $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            data: data,
            type: "post",
            url: "?c=plantillas&a=Registrar",
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