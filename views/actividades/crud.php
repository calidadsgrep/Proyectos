<div class="card">
    <div class="card-header">
        ::REGISTRO DE ACTIVIDADES::
        <div id="tools"></div>
    </div>
    <form id="form-act" name="form-act">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <button id="addRow" type="button" class="btn btn-default"> <i class='fa fa-plus'></i> Agregar Item</button>
                </div>
                <input type="hidden" name="objetivo_id" value="<?php echo $_REQUEST['oid'] ?>">
                <div class="col-md-4">
                    <label for="">Actividad</label>
                    <input name="actividad[]" id="actividad" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="">Proceso Reponsable</label>
                    <input name="proceso[]" id="proceso" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="">Soporte Esperado</label>
                    <input name="soporte[]" id="soporte" class="form-control" required>
                </div>
                <div id="newRow" class="col-md-12"></div>
            </div>
        </div>
    </form>
    <div class="card-footer">
        <button id="save-act" class="btn btn-danger"><i class="fa fa-save"></i> Guardar </button>
    </div>
</div>

<script type="text/javascript">
    // agregar registro
    $("#addRow").click(function() {
        var html = '';
        html += '<div id="inputFormRow">'
        html += '<div class="col-md-12">';
        html += '<div class="input-group">'
        html += '<div class="col-md-4">';
        html += '<label for="">Actividad</label>';
        html += '<div class="input-group">';
        html += '<input name="actividad[]" id="actividad" class="form-control" >';
        html += '</div>';
        html += '</div>';

        html += '<div class="col-md-4">';
        html += '<label for="">Proceso Reponsable</label>';
        html += '<div class="input-group">';
        html += '<input name="proceso[]" id="proceso" class="form-control" >';
        html += '</div>';
        html += '</div>';

        html += '<div class="col-md-4">';
        html += '<label for="">Soporte Esperado</label>';
        html += '<div class="input-group">';
        html += '<input name="soporte[]" id="soporte" class="form-control" >';
        html += '<span class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger "><i class="fa fa-trash"><i></button>';
        html += '</span>';
        html += '</div>';
        html += '</div>';

        html += '</div>';
        html += '</div>';
        $('#newRow').append(html);
    });

    // borrar registro
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#save-act').click(function() {
            if (($('#actividad').val() != "")) {
                var datos = $('#form-act').serialize();
                $.ajax({
                    async: true,
                    type: "POST",
                    url: "?c=actividades&a=registrar",
                    data: datos,
                    success: function(r) {
                        if (r == 1) {
                            alert("Fallo al agregar");
                        } else {
                            alert("Agregado con éxito!!");
                            window.location.reload();
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