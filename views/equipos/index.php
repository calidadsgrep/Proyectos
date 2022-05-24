<section class="content">
    <div class="col-12">
        <div class="row">
            <?php foreach ($equipos as $value) : ?>
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $value->nombres . ' ' . $value->apellidos ?></h4>
                            <p class="card-text"> <i class="fa fa-envelope"> </i> <?php echo $value->correo . '<br><i class="fa fa-phone"> </i> ' . $value->contacto. '<br><i class="fa fa-cog"> </i> ' . $value->proceso ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" onclick="Editar('<?php echo $value->id ?>')" data-toggle="modal" data-target="#modal-default" class="btn btn-primary"> <i class="fa fa-edit"> </i> Editar</button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-trash"> </i> Quitar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="index" id="info">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<script>
    function Editar(val){
        var id= val;
$.ajax({
      async: true,
      type: "POST",
      url: '?c=equipos&a=crud',
      data: 'id=' + val,
      success: function(resp) {
        $('#info').html(resp);
        $('#respuesta').html("");
      }
    });

    }
    
</script>
