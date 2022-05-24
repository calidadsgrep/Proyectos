<!--<div class="card card-primary card-outline">
    <div class="card-header">Gestión</div>
    <div class="card-body p-0">
        <div class="container">
            <div class="mailbox-read-info">
            </div>
            <form name="form_horario" id="form_horario">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Objetivo</th>
                                <th>Actividad</th>
                                <th>Horario</th>
                                <th>Soportes</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //echo'<pre>';  print_r($asignacion); echo'</pre>';
                            foreach ($asignacion as  $value) : ?>
                                <tr>
                                    <td WIDTH="10%"><?php echo $value->objetivo ?></td>
                                    <td WIDTH="45%"> <?php echo $value->actividad ?>
                                        <?php
                                        echo $value->estado == 1 ? '<span class="badge badge-success float-right">Cumple</span>' : '<span class="badge badge-danger float-right">Aun no Cumple</span>';
                                        ?> </td>
                                    <td><?php echo $value->fecha . '  ' . $value->hora1 . ' a ' . $value->hora2 ?> <span class="badge float-right"><?php echo ucwords($value->dia) ?></span></td>
                                    <td><a class="" id="soporteVer" onclick="soporteVer('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="soporte"><i class="fa fa-paperclip"></i></a>
                                        <a class="" id="compromisosVer" onclick="compromisosVer('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="Compromisos"><i class="fa fa-clipboard"></i></a>
                                    </td>
                                    <td>
                                        <a class="" id="soporte" onclick="soporte('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="soporte"><i class="fa fa-paperclip"></i></a>
                                        <a id="compromisos" onclick="compromisos('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="compromisos"><i class="fa fa-clipboard"></i></a>
                                        <a id="estados" onclick="Estado('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="estado"> <i class="fa fa-clock"></i></a>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
            </form>
        </div>
    </div>
</div>-->
<div class="col-md-12">
    <h3 class="text-center">
        
    <?php
    if(!empty($asignacion))
       echo $asignacion[0]->objetivo;
     else
     echo '<h4 class="text-center">No hay actividades programadas</h4>';
     ?>
</h3>
</div>
<div class="col-md-12">

    <div class="row">
        <?php foreach ($asignacion as  $value) : ?>
            <div class="col-md-4">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="card-header bg-info">
                        <?php echo $value->estado == 1 ? '<span class="badge badge-success float-right">Cumple</span>' : '<span class="badge badge-danger float-right">Aun no Cumple</span>';
                        ?>
                        <!-- /.widget-user-image -->
                        <h5 class="widget"><?php echo $value->actividad ?></h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Fecha <span class="float-right badge bg-primary"><?php echo $value->fecha ?></span>
                                </a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">
                                    Dia <span class="float-right badge bg-success"><span class="badge float-right"><?php echo ucwords($value->dia) ?></span></span>
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Horario <span class="float-right badge bg-info"><?php echo  $value->hora1 . ' a ' . $value->hora2 ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-default" id="soporteVer" onclick="soporteVer('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="ver soportes"><i class="far fa-file"></i> </button>
                                <button type="button" class="btn btn-default" id="compromisosVer" onclick="compromisosVer('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="Ver compromisos" ><i class="fas fa-calendar-plus"></i> </button>
                            </div>
                            <button type="button" class="btn btn-default" id="soporte" onclick="soporte('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="registro de soportes"><i class="fas fa-paperclip"></i> </button>
                            <button type="button" class="btn btn-default" id="compromisos" onclick="compromisos('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="registro de compromisos"><i class="fas fa-clipboard"></i> </button>
                            <button type="button" class="btn btn-default" id="estados" onclick="Estado('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modelId" title="cambio de estado"><i class="far fa-clock"></i> </button>
                        </div>
                    </div>
                </div>
                <!-- /.widget-user -->

            </div><?php endforeach; ?>
    </div>
    <!-- /.col -->






</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">:AGREGAR:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="info_modal"></div>
        </div>
    </div>
</div>
<script>
    function soporte(val) {
        var id = val
        $("#info_modal").load("?c=soportes&a=crud&id=" + id, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    }

    function soporteVer(val) {
        var id = val
        $("#info_modal").load("?c=soportes&a=obtener&id=" + id, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });

    }

    function compromisos(val) {
        var hid = val
        $("#info_modal").load("?c=compromisos&a=crud&hid=" + hid, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });

    }

    function compromisosVer(val) {
        var hid = val
        $("#info_modal").load("?c=compromisos&a=index&hid=" + hid, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });

    }

    function Estado(val) {
        var hid = val
        $("#info_modal").load("?c=horarios&a=estado&hid=" + hid, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "success")
                //alert("External content loaded successfully!");
                if (statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
        });

    }
</script>