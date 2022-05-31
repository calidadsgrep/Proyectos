<div class="col-12 text-center">
    <div class="col-12">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Etapas</th>
                    <th>Actividades</th>                    
                    <th>Avance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etapas as $value) : ?>
                    <tr>
                        <td scope="row"><?php echo $value->notacion ?></td>
                        <td><?php echo $value->total_Act; ?></td>

                        
                        <?php 
                        if(!empty($etapas0)):
                        foreach ($etapas0 as $value0) : ?>
                        <?php if ($value->etapa_plantilla_id == $value0->etapa_plantilla_id) : ?>
                            <td>
                                <?php $porcentaje = ($value0->total_Act / $value->total_Act) * 100; ?>
                                    <label><?php echo  number_format($porcentaje, 1) . '%' ?></label>
                                    <progress id="file" value="<?php echo $porcentaje ?>" max="100"> </progress>
                               
                            </td> <?php endif; ?>
                        <?php endforeach;?>

                        <?php else:?>
 <td> Sin datos</td>
 <td> Sin datos</td>
                            <?php endif;?>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>