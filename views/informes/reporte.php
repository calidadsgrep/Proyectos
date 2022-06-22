<div class="col-md-12 text-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Cliente</label>
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="">Seleccionar</option>
                            <?php foreach ($clientes as $value) : ?>
                                <option value="<?php echo $value->cli_id ?>"><?php echo $value->nombre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4" id="proyectos">
                        <label for="">Proyectos</label>
                        <select name="" id="" class="form-control">
                            <option value="">Seleccionar</option>
                        </select>
                    </div>

                    <div class="col-md-4" id="">
                        <button id="buscar" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
                        <br> <br> <br> <br>
                    </div>
                </div>

                <div class="col-md-12" id="result">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $("#cliente").change(function() {
            $('#index').html("<h5>Cargando Complementos</h5>");
            $.get("?c=informes&a=proyectos", "cliente=" + $("#cliente").val(),
                function(data) {
                    $("#proyectos").html(data);
                    console.log(data);
                });
        });

        $("#buscar").click(function() {
            $('#index').html("<h5>Cargando Complementos</h5>");
            $.get("?c=informes&a=resultado", "proyecto_id=" + $("#proyecto_id").val(),
                function(data) {
                    $("#result").html(data);
                    console.log(data);
                });
        });
    });
</script>