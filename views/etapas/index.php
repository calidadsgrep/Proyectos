<div class="card card-primary card-outline">
  <div class="card-header">
    <span class="badge badge-primary float-right" id="add_etapa"><i class="fa fa-plus"></i></span>
  </div>
  <div class="card-body p-0">
    <div class="mailbox-read-info">
      <table id="" class="table table-bordered">
        <thead>
          <tr>
            <th>Notacion</th>
            <th>menu</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($etapas as $etapa):?>
          <tr>
            <td><?php echo $etapa->notacion?></td>
            <td>
            <a class="btn btn-default bg-red" id="obj" onclick="Obj('<?php echo $etapa->id ?>')" ><i class="fa fa-edit"></i></a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
        <tfoot>
          <tr>
            <th>Notacion</th>
            <th>menu</th>
          </tr>
        </tfoot>
      </table>
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

function Obj(val){
  $.ajax({
        async: true,
        type: "POST",
        url: '?c=objetivos&a=crud',
        data: 'eid=' + val ,
        success: function(resp) {
          $('#info').html(resp);
          $('#respuesta').html("");
        }
      });
}
</script>
