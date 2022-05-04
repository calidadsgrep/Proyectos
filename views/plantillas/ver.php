<div class="card card-primary card-outline">
    <div class="card-header"><?php echo $proyecto->nombre; ?>
        <span class="badge badge-primary float-right">Creación: <?php echo $proyecto->created; ?></span>
    </div>
    <div class="card-body p-0">
        <div class="mailbox-read-info">
           <h6>   <span class="badge badge-secondary float-right">Duración: <?php echo $proyecto->duracion; ?></span></h6>
          <p class="text-justify"> <strong>Descripción: </strong> <?php echo $proyecto->descripcion; ?></p>
        </div>
    </div>
</div>