<div class="card card-primary card-outline">
    <div class="card-header">VERIFICACIÓN
        <button class="btn btn-success float-right" id="guardar"><i class="fa fa-save"></i> Validar</button>
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
                            /*  echo'<pre>';
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
                                                    echo '<input name="fecha[' . $value->act_id . ']" id="fecha" class="form-control" value="'  . $hora->fecha .  '">';
                                                    echo '</div>';
                                                    echo '<div class="col-6">';
                                                    echo '<label>Dia</label>';
                                                    echo '<input name="dia[' . $value->act_id . ']" id="dia" class="form-control" value="'  . $hora->dia . '">';
                                                    echo '</div>';
                                                    echo '<div class="col-6">';
                                                    echo '<label>hInicio</label>';
                                                    echo '<input name="hora1[' . $value->act_id . ']" id="hora1" class="form-control" value="'  . $hora->hora1 . '">';
                                                    echo '</div>';
                                                    echo '<div class="col-6">';
                                                    echo '<label>hFin</label>';
                                                    echo '<input name="hora2[' . $value->act_id . ']" id="hora2" class="form-control" value="' . $hora->hora2 . '">';
                                                    echo '<input type="hidden" name="actividad_id[' . $value->act_id . ']" id="actividad_id" class="form-control" value="' . $value->act_id . '">';
                                                    echo '<input type="hidden" name="etapa_plantilla_id" id="etapa_plantilla_id" class="form-control" value="' . $value->et_id . '">';
                                                    echo '<input type="hidden" name="proyecto_id" id="proyecto_id" class="form-control" value="' . $_REQUEST['val01'] . '">';
                                                    echo '</div>';
                                                    echo '</div>';

                                                endif;

                                                ?>

                                        <?php $key2++;
                                            endforeach;
                                        endif; ?>
                                        </td>
                                        <td>

                                            <div class="col-12  text-center">
                                                <input type="checkbox" class="form-check-input" name="check['<?php echo $value->act_id ?>']" id="check" value="<?php echo $value->act_id ?>" checked>
                                            </div>

                                        </td>
                                    <?php //endif;
                                    echo '</tr>';
                                    $key++;
                                endforeach; ?>
                        </tbody>
                    </table>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    $(document).on('click', '#guardar', function(e) {
        var data = $("#form_horario").serialize();
        // $("#index").modal('hide'); //ocultamos el modal
        $.ajax({
            url: "?c=proyectos&a=horario",
            data: data,
            type: "post",

            success: function(data) {
                Swal.fire({
                        // position: 'top-end',
                        icon: 'success',
                        title: 'la información se registro con exito',
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