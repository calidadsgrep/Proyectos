<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header"><a class="btn btn-default" onclick="Add()" data-toggle="modal" data-target="#modal-default">Nuevo</a></div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Duración</th>                                    
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($plantillas as $plantilla):?>
                                    <tr>                                        
                                        <td><?php echo  $plantilla->nombre ?></td>
                                        <td><?php echo  $plantilla->descripcion ?></td>
                                        <td><?php echo  $plantilla->duracion?></td>
                                        <td>
                                            <a class="" onclick="Edit('<?php echo $plantilla->id ?>')" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></a>
                                            <a href="?c=plantillas&a=gestion&pid=<?php echo $plantilla->id ?>" ><i class="fa fa-address-book"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Duración</th>                                    
                                    <th>Menu</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="index" id="index">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


<script>

    function Add() {
        $.ajax({
            type: "POST",
            url: '?c=plantillas&a=crud',
            success: function(resp) {
                $('#index').html(resp);
                $('#respuesta').html("");
            }
        });
    }

    function Edit(id) {
        $.ajax({
            type: "POST",
            url: '?c=usuarios&a=crud',
            data: {
                id: id
            },
            success: function(resp) {
                $('#index').html(resp);
                $('#respuesta').html("");
            }
        });
    }
    function Seguimiento(id) {
        $.ajax({
            type: "POST",
            url: '?c=seguimientos&a=crud',
            data: {
                clie_id: id
            },
            success: function(resp) {
                $('#index').html(resp);
                $('#respuesta').html("");
            }
        });
    }
</script>