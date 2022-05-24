<section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <!-- Default box -->
            <form action="?c=soportes&a=contrato0" enctype="multipart/form-data" method="post">
                <div class="row">
                    <input type="hidden" name="p_id" id="p_id" class="form-control" value='<?php echo $_REQUEST['id'] ?>' required>
                    <div class="col-12">
                        <div class="form-group">
                        <label for="">Contrato</label>
                            <input type="file" name="soporte" id="soporte" class="form-control" >
                        </div>
                    </div>                    
                </div>
                <button type="submit" class="btn btn-default btn-block">Subir Contrato</button>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
</div>