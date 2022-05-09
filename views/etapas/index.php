<div class="card card-primary card-outline">
  <div class="card-header ">
    <h2>ETAPAS
      <button class="btn btn-primary float-right" id="add_etapa">Crear Nueva</button>
    </h2>
  </div>
  <div class="card-body p-0">
    <div class="mailbox-read-info">
      <div class="col-md-12">
        <div class="row">
          <?php foreach ($etapas as $etapa) : ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <div class="card-title"><?php echo $etapa->notacion ?></div>
                </div>
                <div class="card-body"> <a class="btn btn-default btn-block" id="obj" onclick="Obj('<?php echo $etapa->id ?>')"><i class="fa fa-edit"></i> Agregar objetivos</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(document).ready(function() {
    $('#add_etapa').click(function() {
      $('#info').html("<h5>Cargando Complementos</h5>");
      $.ajax({
        async: true,
        type: "POST",
        url: '?c=etapas&a=crud&pid=<?php echo $_REQUEST['pid'] ?>',
        //data: 'pid=' + ,
        success: function(resp) {
          $('#info').html(resp);
          $('#respuesta').html("");
        }
      });
    });
  });

  function Obj(val) {
    $.ajax({
      async: true,
      type: "POST",
      url: '?c=objetivos&a=crud',
      data: 'eid=' + val,
      success: function(resp) {
        $('#info').html(resp);
        $('#respuesta').html("");
      }
    });
  }
</script>