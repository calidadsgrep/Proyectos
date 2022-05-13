<div class="card card-primary card-outline">
    <div class="card-header">VERIFICACIÓN
        <span class="badge badge-primary float-right" id="guardar"> validar</span>
    </div>
    <div class="card-body p-0">
        <div class="container">
            <div class="mailbox-read-info">

            </div>
          <form name="form_horario" id="form_horario">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>objetivo</th>
                            <th>actividad</th>
                            <th>horario</th>
                            <th>check</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $key = 1;
                        /* echo'<pre>';
                        print_r($act_pro);
                        echo'</pre>';*/
                        foreach ($act_pro as  $value) : ?>

                            <tr>
                                <?php if ($value->et_id == $_REQUEST['val02']) : ?>

                                    <td WIDTH="15%"><?php
                                                    echo $value->obj ?></td>
                                    <td WIDTH="40%">
                                        <?php echo $value->act ?></td>
                                    <td>
                                        <?php $key2 = 1;
                                        foreach ($horarios as $hora) : ?>

                                            <?php
                                            if ($key2 == $key) :
                                               
                                                echo '<div class="row">';
                                                echo '<div class="col-6">';
                                                echo '<label>Fecha</label>';
                                                echo '<input name="fecha[]" id="fecha" class="form-control" value="'  . $hora->fecha .  '">';
                                                echo '</div>';
                                                echo '<div class="col-6">';
                                                echo '<label>Dia</label>';
                                                echo '<input name="dia[]" id="dia" class="form-control" value="'  . $hora->dia . '">';
                                                echo '</div>';
                                                echo '<div class="col-6">';
                                                echo '<label>hInicio</label>';
                                                echo '<input name="hora1[]" id="hora1" class="form-control" value="'  . $hora->hora1 . '">';
                                                echo '</div>';
                                                echo '<div class="col-6">';
                                                echo '<label>hFin</label>';
                                                echo '<input name="hora2[]" id="hora2" class="form-control" value="' . $hora->hora2 . '">';
                                                echo '<input type="hidden" name="actividad_id[]" id="actividad_id" class="form-control" value="' . $value->act_id . '">';
                                                echo '<input type="hidden" name="etapa_plantilla_id[]" id="etapa_plantilla_id" class="form-control" value="' . $hora->id . '">';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</form>';
                                            endif;

                                            ?>

                                    <?php $key2++;
                                        endforeach;
                                    endif; ?>
                                    </td>
                                    <td>
                                    <form name="form_horario" id="form_horario">
                                       <div class="col-12  text-center">
                                                <input type="checkbox" class="form-check-input" name="c[]" id="check" value="checkedValue" checked>
                                             </div>   
                                                                        
                                    </td>
                                <?php //endif;
                                echo '</tr>';
                                $key++;
                            endforeach; ?>
                    </tbody>
                </table></form>  
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('click', '#guardar', function(e) {
        var data = $("#form_horario").serialize();
       // $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            data: data,
            type: "post",
            url: "?c=proyectos&a=horario",
            success: function(data) {
                Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'El usuario se creo con exito',
                        showConfirmButton: false,
                        timer: 1500
                    },
                    setTimeout(function() {
                      // window.location.reload(1);
                    }, 1500)
                )
            }
        });
    });

</script>