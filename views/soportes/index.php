<section>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Soportes</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre Archivo</th>
                        <th>Enlace</th>
                        <th>Tamaño</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($soportes as $value) : ?>
                        <tr>
                            <td><?php
                                $filepath = $value->ruta_soporte;
                                $filename = preg_replace('/^.+[\\\\\\/]/', '', $filepath);  // filename.jpg
                                echo $filename ?></td>
                            <td>
                            <td><?php $value->enlace; ?>
                               </td>
                            <td>
                                <?php echo filesize($filepath) . ' kb'; ?>
                            </td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="<?php echo $value->ruta_soporte ?>" class="btn btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                                    <a href="?c=soportes&a=eliminar&id=<?php echo $value->id ?>&path=<?php echo $value->ruta_soporte ?>" onclick="return confirm('Estás seguro que deseas eliminar el soporte?');" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>