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
                                    <th>Apellidos</th>
                                    <th>Identificacion</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <tr>
                                        <td><?php echo  ucwords($usuario->nombres)  ?></td>
                                        <td><?php echo  ucwords($usuario->apellidos) ?></td>
                                        <td><?php echo  $usuario->tipo_identificacion . ' ' . $usuario->num_identificacion ?></td>
                                        <td><?php echo  $usuario->telefono ?></td>
                                        <td><?php echo  $usuario->correo ?></td>
                                        <td><?php echo  $usuario->tipo ?></td>
                                        <td><?php echo  $usuario->estado ? 'Activo' : 'Inactivo'; ?></td>
                                        <td>
                                            <a class="" onclick="Edit('<?php echo $usuario->id_user ?>')" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></a>
                                            <a class="" onclick="Config('<?php echo $usuario->id_user ?>')" data-toggle="modal" data-target="#modal-default" title="Modificar los datos de ingreso y el tipo de usuario"><i class="fa fa-cog"></i></a>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Identificacion</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
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
            url: '?c=usuarios&a=crud',
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

    function Config(id) {
        $.ajax({
            type: "POST",
            url: '?c=usuarios&a=config',
            data: {
                id: id
            },
            success: function(resp) {
                $('#index').html(resp);
                $('#respuesta').html("");
            }
        });
    }
</script>