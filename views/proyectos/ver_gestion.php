<div class="card card-primary card-outline">
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
                                <th>menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                          
                            foreach ($asignacion as  $value) : ?>
                                <tr>
                                    <td WIDTH="15%"><?php echo $value->objetivo ?></td>
                                    <td WIDTH="40%"> <?php echo $value->actividad ?></td>
                                    <td><?php echo $value->fecha .'  '.$value->hora1.' a '.$value->hora2 ?> <span class="badge float-right"><?php echo ucwords( $value->dia) ?></span></td>
                                    <td>
                                        <a  class="" id="soporte"  data-toggle="modal" data-target="#modelId"  title="soporte"><i class="fa fa-paperclip"></i></a>
                                        <a id="compromisos" title="compromisos"><i class="fa fa-clipboard"></i></a>
                                        <a id="estados" title="estado"> <i class="fa fa-clock"></i></a>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Soporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" id="info_modal"></div>            
        </div>
    </div>
</div>
<script>
$("#soporte").click(function(){
  $("#info_modal").load("?c=soportes&a=crud&id=<?php echo $value->id?>", function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      //alert("External content loaded successfully!");
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });
});
</script>