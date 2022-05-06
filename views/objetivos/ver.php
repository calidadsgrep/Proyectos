<div class="card card-primary card-outline">
    <div class="card-header">
        <span class="badge badge-primary float-right" id="add_etapa"><i class="fa fa-plus"></i></span>
    </div>
    <div class="card-body p-0">
        <div class="mailbox-read-info">
            <table id="example1" class="table table-bordered example1">
                <thead>
                    <tr>
                        <th>Etapas</th>
                        <th>Objetivos</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($objindex as $objindexs) : ?>
                        <tr>
                            <td><?php echo ucwords($objindexs->notacion) ?></td>
                            <td><?php echo ucwords($objindexs->obj) ?></td>
                            <td> <a id="obj" onclick="Act('<?php echo $objindexs->obj_id ?>')"> <i class="fa fa-calendar-week"></i></a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfooter>
                    <tr>
                        <th>Etapas</th>
                        <th>Objetivos</th>
                        <th>Actividad</th>
                    </tr>
                </tfooter>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function Act(val) {
        $.ajax({
            async: true,
            type: "POST",
            url: '?c=actividades&a=crud&oid='+ val,
            //data: 'pid=' + ,
            success: function(resp) {
                $('#info').html(resp);
                $('#respuesta').html("");
            }
        });
    };
</script>