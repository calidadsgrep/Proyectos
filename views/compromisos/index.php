<section>
    <div class="card card-info" id="compro">
        <div class="card-header">
            <h3 class="card-title">Compromisos</h3>
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
                        <th>Compromiso</th>
                        <th>Ejecutar</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($compromisos as $value) : ?>
                        <tr>
                            <td><?php echo $value->descripcion ?>
                                
                            <td>
                                <?php echo $value->fecha ?>
                            </td>
                            <td>
                                <?php echo  $value->estado==0 ? 'Aun no cumple' : 'Cumple' ;
                                ?>
                            </td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a onclick="compromisosVer0('<?php echo $value->id ?>')"  class="btn btn-info" target="_blank"><i class="fas fa-eye"></i></a>
                                    <a href="?c=compromisos&a=eliminar&id=<?php echo $value->id ?>" onclick="return confirm('Estás seguro que deseas eliminar el soporte?');" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<script>
function compromisosVer0(val) {
        var id = val
        $("#compro").load("?c=compromisos&a=crud&id=" + id, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });

    }
</script>