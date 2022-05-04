<div class="card card-primary card-outline">
    <div class="card-header">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>
        <span class="badge badge-primary float-right" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i></span>
    </div>
    <div class="card-body p-0">
        <div class="mailbox-read-info">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>notacion</th>
                    </tr>
                </thead>
                <tbody>
                    <td>Etapa 1</td>
                </tbody>
                <tfoot>
                    <tr>
                        <th>notacion</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
<script type="text/javascript">
    $(document).ready(function() {
      $('#ver').click(function() {
            $('#info').html("<h5>Cargando Complementos</h5>");
            $.ajax({
                type: "POST",
                url: '?c=etapas&a=crud&pid=<?php echo $_REQUEST['pid']?>',
                //data: 'pid=' + ,
                success: function(resp) {
                    $('#info').html(resp);
                    $('#respuesta').html("");
                }
            });
        });
    });
</script>
