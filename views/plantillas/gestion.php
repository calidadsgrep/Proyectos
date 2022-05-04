<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                            <a  class="nav-link" id="ver">
                                <i class="fas fa-eye"></i> Ver
                                <span class="badge bg-primary float-right">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a   class="nav-link" id="etapas">
                                <i class="fas fa-box"></i></i> Etapas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-envelope"></i> Objetivos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt"></i> Actividades
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-filter"></i> Junk
                                <span class="badge bg-warning float-right">65</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-trash-alt"></i> Trash
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9" id="info" class="info"></div>
</div>
    <!-- /.row -->
</section>
<!-- /.content -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#ver').click(function() {
            $('#info').html("<h5>Cargando Complementos</h5>");
            $.ajax({
                type: "POST",
                url: '?c=plantillas&a=proyecto&pid=<?php echo $_REQUEST['pid']?>',
                //data: 'pid=' + ,
                success: function(resp) {
                    $('#info').html(resp);
                    $('#respuesta').html("");
                }
            });
        });

        $('#etapas').click(function() {
            $('#info').html("<h5>Cargando Complementos</h5>");
            $.ajax({
                type: "POST",
                url: '?c=etapas&a=index&pid=<?php echo $_REQUEST['pid']?>',
                //data: 'pid=' + ,
                success: function(resp) {
                    $('#info').html(resp);
                    $('#respuesta').html("");
                }
            });
        });

    });
</script>