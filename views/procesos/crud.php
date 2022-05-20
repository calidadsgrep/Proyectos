<section class="content">
    <div class="container-fluid">
        <div class="col-12"><i>REGISTRAR</i></div>
        <div class="col-12">
            <!-- Default box -->
            <form action="" method="post" id="formdata">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group ">
                            <label for="nombre">Procesos</label>
                            <input type="text" name="proceso" class="form-control" value='<?php echo $procesos->proceso ?>' required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="nombre">Sigla</label>
                            <input type="text" name="sigla" class="form-control" value='<?php echo $procesos->sigla ?>' required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" class="form-control" value='<?php echo $procesos->id ?>' required>
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
            url: "?c=procesos&a=guardar",
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