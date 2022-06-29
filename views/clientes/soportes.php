<section class="content">
    <div class="container-fluid">
        <div class="col-12"><i>Soportes</i></div>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formsoporte">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group ">
                            <label for="nombre">Ruta a Soportes</label>
                            <input type="hidden" name="id" class="form-control" value='<?php echo $soporte->id ?>' required>
                            <input type="text" name="link" class="form-control" value='<?php echo $soporte->link ?>' required>
                            <input type="hidden" name="cliente_id" class="form-control" value='<?php echo   $_REQUEST['clie_id']; ?>'>
                        </div>
                    </div>                    
                <input type="button" id="guardarSoporte" class="btn btn-default btn-block" value="Enviar">
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<script>
    $(document).on('click', '#guardarSoporte', function(e) {
        var data = $("#formsoporte").serialize();
        $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            data: data,
            type: "post",
            url: "?c=clientes&a=SoporteCrud",
            success: function(data) {
                Swal.fire({
                        icon: 'success',
                        title: 'El link se registro con exito',
                        showConfirmButton: false,
                        timer: 1500
                    },
                    setTimeout(function() {
                      //  window.location.reload(1);
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