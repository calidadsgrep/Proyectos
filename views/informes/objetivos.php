<div class="col-12 text-center">
    <div class="col-12">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Etapa</th>
                    <th>Objetivo</th>
                    <th>Resumen</th>
                    <th>Avance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($objetivos as $value) : ?>
                    <?php foreach ($objetivos0 as $value0) : ?>
                        <?php if ($value->obj_id == $value0->obj_id) : ?>
                            <tr>
                            <td scope="row"><?php echo $value->notacion ?></td>
                                <td scope="row"><?php echo $value->objetivo ?></td>
                                <td><?php echo $value0->actividades ?> de <?php echo $value->actividades ?></td>
                                <td><?php $porcentaje = ($value0->actividades / $value->actividades) * 100;

                                    ?>
                                    <label><?php echo  number_format($porcentaje, 1) . '%' ?></label>
                                    <progress id="file" value="<?php echo $porcentaje ?>" max="100"> </progress>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>