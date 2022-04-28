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
                                    <th>Nit</th>
                                    <th>Ubicacion</th>
                                    <th>Tipo</th>
                                    <th>Potencial</th>
                                    <th>Estado</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clientes as $cliente) : ?>
                                    <tr>
                                        <td><?php echo  $cliente->nombre ?></td>
                                        <td><?php echo  $cliente->nit ?></td>
                                        <td><?php echo  $cliente->ubicacion ?></td>
                                        <td><?php echo  $cliente->tipo_cliente ?></td>
                                        <td><?php echo  $cliente->potencial ?></td>
                                        <td><?php echo  $cliente->estado_id ? 'Activo' : 'Inactivo'; ?></td>
                                        <td>
                                            <a class="" onclick="Edit('<?php echo $cliente->cli_id ?>')" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i> </a>
                                            <a class="" onclick="Seguimiento('<?php echo $cliente->cli_id ?>')" data-toggle="modal" data-target="#modal-default"><i class="fa fa-address-book"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Nit</th>
                                    <th>Ubicacion</th>
                                    <th>Tipo</th>
                                    <th>Potencial</th>
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
            url: '?c=clientes&a=crud',
            success: function(resp) {
                $('#index').html(resp);
                $('#respuesta').html("");
            }
        });
    }

    function Edit(id) {
        $.ajax({
            type: "POST",
            url: '?c=clientes&a=crud',
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