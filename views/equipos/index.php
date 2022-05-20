<section class="content">
    <div class="col-12">
        <div class="row">
            <?php foreach ($equipos as $value) : ?>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $value->nombres . ' ' . $value->apellidos ?></h4>
                            <p class="card-text"> <i class="fa fa-envelope"> </i> <?php echo $value->correo . '<br><i class="fa fa-phone"> </i> ' . $value->contacto ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-primary"> <i class="fa fa-edit"> </i> Editar</button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-trash"> </i> Quitar</button>
                               
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
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