<?php
/*
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/transfers?team=33",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
		"X-RapidAPI-Key: a7c35fe285msh8f8646b7314d98bp16db00jsnf180dbe02805"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
  //echo $response;
  //$res = json_encode($response);
   $objeto = json_decode($response);

  //print_r($objeto);
  $get= $objeto->get;
  $parameters= $objeto->parameters;
  $parameters= $objeto->parameters->team;
  $results= $objeto->results;
  $response= $objeto->response;
  echo '<pre>';
  print_r($response);
  echo '</pre>';
 // print_r($objetos[0]->player);
} 

/*while ($response) {
    # code...
    echo $response->player;
}*/

?>
<!--
 <table>
     <tr>
         <th></th>
     </tr>
     <?php foreach($response as $value):?>
     <tr>
         <td><?php echo $value->name ?> </td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
     </tr>
     <?php endforeach;?>
 </table>
     -->


<section>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">CRM</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool float-right" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($clientes as $value) : ?>
                                <?php echo $value->tipo_cliente . 's:' ?>
                                <spam class="badge badge-success float-right"><?php echo $value->cantidad ?></spam><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-primary collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">Proyectos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool float-right" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php foreach ($proyectos as $value0) : ?>
                                <?php echo $value0->nombre ?>
                                <spam class="badge badge-success float-right"><?php echo $value0->cantidad ?></spam><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-secondary  collapsed-card">
                        <div class="card-header"> <i class="far fa-handshake"> </i> Compromisos pendientes
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div  class="table-responsive">
                                <table id="example1" class="table table-bordered table-sm" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Actividad</th>
                                            <th>Descripcion</th>
                                            <th>Fecha</th>
                                            <th>Proyecto/Cliente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($compromisos as $valuec) : ?>
                                            <tr>
                                                <td><?php echo $valuec->actividad ?><spam class="badge badge-success float-right"><?php echo $valuec->cantidad ?></spam><br> <span class="float-right"><?php echo $valuec->fecha ?></span> </td>
                                                <td><?php echo $valuec->descripcion ?></td>
                                                <td><?php echo $valuec->comp_fecha ?></td>
                                                <td><?php echo $valuec->pro ?><br><?php echo $valuec->nombre ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Actividad</th>
                                            <th>Descripcion</th>
                                            <th>Fecha</th>
                                            <th>Proyecto/Cliente</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-info collapsed-card">
                        <div class="card-header"> <i class="fas fa-users"> </i> Progreso x Funcionario
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <?php foreach ($funcionarios as $value1) : ?>
                                <div class="progress-group">
                                    <?php echo $value1->fullName ?>
                                    <?php foreach ($funci_cumplidas as $value3) :
                                        if ($value3->user_id == $value1->user_id) : ?>
                                            <?php $porcentaje = ($value3->amount / $value1->amount) * 100;

                                            if (($porcentaje >= 0) && ($porcentaje < 50)) {
                                                $bg = 'bg-danger';
                                            }
                                            if (($porcentaje > 50) && ($porcentaje <= 100)) {
                                                $bg = 'bg-success';
                                            }
                                            ?>
                                            <label><?php echo  number_format($porcentaje, 1) . '%' ?></label>
                                            <span class="float-right"><b><?php echo $value3->amount ?></b>/<?php echo $value1->amount ?></span>
                                            <div class="progress progress-sm">

                                                <div class="progress-bar <?php echo $bg ?>" style="width: <?php echo  number_format($porcentaje, 1) . '%' ?>"></div>
                                            </div>
                                    <?php
                                        endif;
                                    endforeach; ?>
                                </div>
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
                        <div class="card card-danger collapsed-card">
                            <div class="card-header small " style="color:whitesmoke"><i class=" fas fa-tasks "> </i>  <?php echo  $value3->cli_nom ?>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
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
                                                echo 'Total:  ' . $i = $intvl->days . " dias ";
                                                ?></li>
                                        </ul>
                                    </li>
                                    <?php
                                    $fini_act = $cliente->Info_fechamin($value3->p_id);
                                    $ffin_act = $cliente->Info_fechamax($value3->p_id);
                                    // print_r($fini_act);
                                    ?>
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
                                            echo 'Total:  ' . $f = $intvl->days . " dias ";
                                            ?>
                                        </li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer ">
                                <span>Avance: </span>
                                <div class="btn-group float-right" role="group" aria-label="Basic example">
                                    <button type="button" onclick="Etapa('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-warning">Etapa</button>
                                    <button type="button" onclick="Obj('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-warning">Objetivo</button>
                                    <button type="button" onclick="Act('<?php echo $value3->p_id; ?>')" data-toggle="modal" data-target="#modelId" class="btn btn-warning">Actividades</button>
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
    function Etapa(val) {
        var p_id = val;
        $.ajax({
            type: "POST",
            url: '?c=informes&a=etapas',
            data: 'pid=' + p_id,
            success: function(resp) {
                $('#informe').html(resp);
                $('#respuesta').html("");
            }
        });
    }

    function Obj(val) {
        var p_id = val;
        $.ajax({
            type: "POST",
            url: '?c=informes&a=objetivos',
            data: 'pid=' + p_id,
            success: function(resp) {
                $('#informe').html(resp);
                $('#respuesta').html("");
            }
        });
    }

    function Act() {
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