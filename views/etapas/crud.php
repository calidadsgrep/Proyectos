<div class="card">
    <div class="card-header">
        Crear Etapa
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <form action="" name="form-etapa" id="form-etapa">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        
                            <label for="">notacion</label>
                            <input type="text" id="notacion" name="notacion" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Etapa Numero</label>
                            <input type="text" id="proyecto_id" name="proyecto_id" value="<?php echo $_REQUEST['pid']?>" class="form-control" >
                        </div>
                    </div>
                    
                    <button id="save-etapa" class=" btn btn-default btn-block">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
      $(document).ready(function(){
         $('#save-etapa').click(function(){
            if(($('#etapa').val() !="")){
               var datos=$('#form-etapa').serialize();
               $.ajax({
                  type:"POST",
                  url:"?c=etapas&a=registrar",
                  data:datos,
                  success:function(r){
                     if(r==1){
                        alert("Fallo al agregar");
                     }else{
                        alert("Agregado con éxito!!");
                        window.location = '?c=plantillas&a=gestion&pid=<?php echo $_REQUEST['pid']?>';
                     }
                  }
               });
            } else {
               alert('campos vacíos');
            }
            return false;
         });
      });
   </script>