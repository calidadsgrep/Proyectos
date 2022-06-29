<?php
echo'<pre>';
 print_r($equipo);
 echo'</pre>';
 ?>
<div class="card">
    <div class="card-header">
        ::Actualizar Asignación::
        <div id="tools"></div>
    </div>
    <form id="form-act" name="form-act">
        <div class="card-body">
            <div class="row">                
                <input type="hidden" name="id" value="<?php echo $_REQUEST['act_id'] ?>">
                <div class="col-md-12">
                    <label for="">Responsable</label>
                        <select name="responsable" id="responsable" class="form-control">
                           <?php foreach ($equipo as $value):?> 
                            <option value="<?php echo $value->id ?>"><?php echo $value->nombres." ".$value->apellidos ?> </option>
                            <?php endforeach; ?> 
                        </select>
                </div>
            </div>
    </form>
    <div class="card-footer">
        <button id="save-act" class="btn btn-danger"><i class="fa fa-save"></i> Asignar </button>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#save-act').click(function() {
            if (($('#actividad').val() != "")) {
                var datos = $('#form-act').serialize();
                $.ajax({
                    async: true,
                    type: "POST",
                    url: "?c=actividades&a=ReasignarEdit",
                    data: datos,
                    success: function(r) {
                        if (datos) {
                            Swal.fire({                                   
                                    icon: 'success',
                                    title: 'la Asignación se Actualizo con éxito',
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
                alert('campos vacíos');
            }
            return false;
        });
    });
</script>