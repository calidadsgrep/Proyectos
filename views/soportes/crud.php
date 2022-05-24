<section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <!-- Default box -->
            <form action="?c=soportes&a=guardar" enctype="multipart/form-data" method="post">
                <div class="row">
                    <input type="hidden" name="horario_id" id="horario_id" class="form-control" value='<?php echo $_REQUEST['id'] ?>' required>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="">Soporte</label>
                            <input type="file" name="soporte" id="soporte" class="form-control" >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Enlace</label>
                            <input type="text" name="enlace" id="enlace" class="form-control" >
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default btn-block">Subir Soporte</button>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
</div>