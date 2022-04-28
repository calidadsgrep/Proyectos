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
                            <input type="text" name="nombre" class="form-control" value='<?php echo $cliente->nombre ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Nit</label>
                            <input type="text" name="nit" class="form-control" value='<?php echo $cliente->nit ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Ubicación</label>
                            <input type="text" name="ubicacion" class="form-control" value='<?php echo $cliente->ubicacion ?>' required>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Potencial</label>
                            <select name="potencial" id="potencial" class="form-control">
                                <option value=""> Seleccionar</option>
                                <option <?php echo $cliente->potencial == 'Alto' ? 'selected' : ''  ?> value="Alto"> Alto</option>
                                <option <?php echo $cliente->potencial == 'Medio' ? 'selected' : '' ?> value="Medio"> Medio</option>
                                <option <?php echo $cliente->potencial == 'Bajo' ? 'selected' : '' ?> value="Bajo"> Bajo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Enteresado En</label>
                            <input type="text" name="interesado_en" class="form-control" value='<?php echo $cliente->interesado_en ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Como Se Entero</label>
                            <input type="text" name="como_se_entero" class="form-control" value='<?php echo $cliente->como_se_entero ?>' required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="tipo_cliente_id" value='1'>
                <input type="hidden" name="id" value='<?php echo $cliente->id ?>'>
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
            url: "?c=clientes&a=guardar",
            success: function(data) {
                Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'El cliente se creo con exito',
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