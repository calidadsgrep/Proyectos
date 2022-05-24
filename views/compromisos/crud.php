<section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <!-- Default box -->
            <form name="form_compro" id="form_compro" method="post">
                <div class="row">
                    <input type="hidden" name="id" id="id" class="form-control" value='<?php echo $compromiso->id ?>' required>
                   <div class="col-8">
                        <div class="form-group">
                            <label for="">Descripción Compromiso</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" required> <?php echo $compromiso->descripcion ?> </textarea>
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Fecha Ejecucion</label>
                            <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo date('Y-m-d') ?>" required>
                        </div>
                    </div>
                    <?php if ($compromiso->id > 0) : ?>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <select name="estado" id="estado" class="form-control" required >                                    
                                    <option value="0" <?php $compromiso->estado=0 ? 'selected' : '' ?> >Aun no cumple</option>
                                    <option value="1" <?php $compromiso->estado=1 ? 'selected' : '' ?>>Cumple</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="horario_id" id="horario_id" class="form-control" value='<?php echo $compromiso->horario_id ?>' required>
                  
                    <?php else : ?>
                        <input type="hidden" name="estado" id="estado" class="form-control" value="0" >
                        <input type="hidden" name="horario_id" id="horario_id" class="form-control" value='<?php echo $_REQUEST['hid'] ?>' required>
                  
                    <?php endif; ?>
                    <div class="col-12" id="vacio"></div>
                </div>
                <button name="guardar" id="guardar" class="btn btn-default btn-block">Crear Compromiso</button>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#guardar').click(function() {
            if (($('#descripcion').val() != "") && ($('#fecha').val() != "")) {
                var datos = $('#form_compro').serialize();
                $.ajax({
                    type: "POST",
                    url: "?c=compromisos&a=guardar",
                    data: datos,
                    success: function(r) {
                        if (r == 1) {
                            Swal.fire({
                                // position: 'top-end',
                                icon: 'success',
                                title: 'El registro no se creo con exito',
                                showConfirmButton: false,
                                timer: 1500
                            }, )
                        } else {
                            Swal.fire({
                                    //position: 'top-end',
                                    icon: 'success',
                                    title: 'El registro se creo con exito',
                                    showConfirmButton: false,
                                    timer: 1500
                                },
                                setTimeout(function() {
                                   // window.location.reload(1);
                                }, 1500)
                            )
                        }
                    }
                });
            } else {
                $('#vacio').html(r);
                //alert('campos vacíos');

            }
            return false;
        });
    });
</script>