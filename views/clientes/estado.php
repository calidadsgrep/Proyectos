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
                            <input type="text" name="nombre" class="form-control" value='<?php echo $cliente->nombre ?>' disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value='<?php echo $cliente->apellidos ?>' disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Correo</label>
                            <input type="email" name="correo" class="form-control" value='<?php echo $cliente->correo ?>' disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Telefono</label>
                            <input type="phone" name="telefono" class="form-control" value='<?php echo $cliente->telefono ?>' disabled>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Nit/Cedula</label>
                            <input type="text" name="nit" class="form-control" value='<?php echo $cliente->nit ?>' disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Ubicación</label>
                            <input type="text" name="ubicacion" class="form-control" value='<?php echo $cliente->ubicacion ?>' disabled>
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Interesado En</label>
                            <input type="text" name="interesado_en" class="form-control" value='<?php echo $cliente->interesado_en ?>' disabled>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Como Se Entero</label>
                            <input type="text" name="como_se_entero" class="form-control" value='<?php echo $cliente->como_se_entero ?>' disabled>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Modificar Estado</label>
                            <select name="tipo_cliente_id" id="tipo_cliente_id" class="form-control">
                                <option value=""> Seleccionar</option>
                                <option <?php echo $cliente->tipo_cliente_id == '1' ? 'selected' : ''  ?> value="1"> Interesado</option>
                                <option <?php echo $cliente->tipo_cliente_id == '2' ? 'selected' : '' ?> value="2"> Prospecto</option>
                                <option <?php echo $cliente->tipo_cliente_id == '3' ? 'selected' : '' ?> value="3"> Cliente</option>
                            </select>
                        </div>
                    </div>
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
            url: "?c=clientes&a=guardarE",
            success: function(data) {
                Swal.fire({
                        
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
<style>
    .modal {
        margin-top: 10% !important;
    }
</style>