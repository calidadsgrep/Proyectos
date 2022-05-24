<section>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">CRM</div>
                        <div class="card-body">
                            <?php foreach ($clientes as $value) : ?>
                                <?php echo $value->tipo_cliente . 's:' ?>
                                <spam class="badge badge-success float-right"><?php echo $value->cantidad ?></spam><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">Proyectos</div>
                        <div class="card-body">
                            <?php foreach ($proyectos as $value0) : ?>
                                <?php echo $value0->nombre ?>
                                <spam class="badge badge-success float-right"><?php echo $value0->cantidad ?></spam><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <?php foreach ($planear as $value3) : ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header"><?php echo  $value3->cli_nom ?></div>
                            <div class="card-body">
                                <ul>
                                    <li><?php echo  $value3->nombre ?></li>
                                    <li><?php echo  $value3->fecha_inicio, ' Hasta ' . $value3->fecha_cierre ?></li>
                                    <li>Duración Estimada:
                                        <ul>
                                            <li><?php
                                                $firstDate  = new DateTime($value3->fecha_inicio);
                                                $secondDate = new DateTime($value3->fecha_cierre);
                                                $intvl = $firstDate->diff($secondDate);
                                                echo $intvl->y . " Años, " . $intvl->m . " meses y " . $intvl->d . " dias";
                                                echo "\n"; ?></li>
                                            <li><?php    // Total amount of days                                  
                                                echo 'Total:  ' . $intvl->days . " dias ";
                                                ?></li>
                                        </ul>
                                    </li>

                                    <li>Duración Programada:
                                    <li><?php echo  $fini_act->finicio . ' Hasta ' . $ffin_act->ffin ?></li>
                                    <ul>
                                        <li><?php
                                            $firstDate0  = new DateTime($fini_act->finicio);
                                            $secondDate0 = new DateTime($ffin_act->ffin);
                                            $intvl = $firstDate0->diff($secondDate0);
                                            echo $intvl->y . " Años, " . $intvl->m . " meses y " . $intvl->d . " dias";
                                            echo "\n"; ?></li>
                                        <li><?php    // Total amount of days                                  
                                            echo 'Total:  ' . $intvl->days . " dias ";
                                            ?></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-header ">
                                <span>Avance: </span>
                                <div class="btn-group float-right " role="group" aria-label="Basic example">
                                    <button type="button" onclick="Etapa('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-primary">Etapa</button>
                                    <button type="button" onclick="Obj('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-primary">Objetivo</button>
                                    <button type="button" onclick="Act('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-primary">Actividades</button>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid" id="informe">
                   
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>               
            </div>
        </div>
    </div>
</div>

<script>
    function Etapa(val){
    var p_id=val;
        $.ajax({
        type: "POST",
        url: '?c=informes&a=crud',
        data: 'pid='+ p_id,
        success: function(resp) {
          $('#informe').html(resp);
          $('#respuesta').html("");
        }
      });
    }
    function Obj(){
        $.ajax({
        type: "POST",
        url: '?c=objetivos&a=crud&pid',
        //data: 'pid=' + ,
        success: function(resp) {
          $('#info').html(resp);
          $('#respuesta').html("");
        }
      });
    }
    function Act(){
        $.ajax({
        type: "POST",
        url: '?c=objetivos&a=crud&pid',
        //data: 'pid=' + ,
        success: function(resp) {
          $('#info').html(resp);
          $('#respuesta').html("");
        }
      });
    }

</script>

