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
                                    <th>Fecha Control</th>
                                    <th>Propuesta</th>
                                    <th>m_envio</th>
                                    <th>info1</th>
                                    <th>info2</th>
                                    <th>registro</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($seguimientos as $seguimiento) : ?>
                                    <tr>
                                        <td><?php echo  $seguimiento->fecha_control;  ?></td>
                                        <td><?php echo  $seguimiento->propuesta ?></td>
                                        <td><?php echo  $seguimiento->m_envio ?></td>                                       
                                        <td><?php echo  $seguimiento->info1 ?></td>
                                        <td><?php echo  $seguimiento->info2 ?></td>
                                        <td><?php echo  $seguimiento->creacion ?></td>
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