<section class="content">
    <div class="container-fluid">
        <div class="col-12"><i>REGISTRAR</i></div>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formdata">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombres" class="form-control" value='<?php echo $equipo->nombres ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value='<?php echo $equipo->apellidos ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Correo</label>
                            <input type="email" name="correo" class="form-control" value='<?php echo $equipo->correo ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">No Contacto</label>
                            <input type="phone" name="contacto" class="form-control" value='<?php echo $equipo->contacto ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Proceso</label>
                            <select name="proceso_id" id="proceso_id" class="form-control">
                                <option value=""> Seleccionar</option>
                                <?php foreach ($procesos as $proceso) : ?>
                                    <option <?php echo $proceso->id == $equipo->proceso_id ? 'selected' : ''  ?> value="<?php echo $proceso->id ?>"> <?php echo $proceso->proceso . '-' . $proceso->sigla ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <?php if ($equipo->id > 0) : ?>
                    <input type="hidden" name="cliente_id" value='<?php echo $equipo->id ?>'>
                <?php else : ?> 
                    <input type="hidden" name="cliente_id" value='<?php echo $_REQUEST['clie_id'] ?>'>
                <?php endif; ?>
                <input type="hidden" name="id" value='<?php echo $equipo->id ?>'>
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
            url: "?c=equipos&a=guardar",
            success: function(data) {
                Swal.fire({

                        icon: 'success',
                        title: 'El registro se creo con exito',
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