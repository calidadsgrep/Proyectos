    <div class="responsive">
        <table id="ejemplo1" class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="4" class="bg-success">Actividades Por Realizar</th>
                </tr>
                <tr>
                    <th>Etapa</th>
                    <th>Actividad</th>
                    <th>Planeado</th>
                    <th>Responsable</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                $i=0;
                foreach ($reporte as $value) : ?>
                    <tr>
                        <td><?php echo $value->notacion ?></td>
                        <td><?php echo $value->actividad ?></td>
                        <td><?php echo $value->fecha ?></td>
                        <td><?php echo $value->fullName ?></td>
                    </tr>
                <?php $i++; endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Etapa</th>
                    <th>Actividad</th>
                    <th>Ejecución</th>
                    <th>Responsable</th>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
    