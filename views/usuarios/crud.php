
    <section class="content">
        <div class="container-fluid justify-content-center">
            <div class="col-12"><i>REGISTRAR</i></div>
            <br>
            <div class="col-12">
                <!-- Default box -->
                <form action="" method="post" id="formulario">
                    <div class="row">

                        <div class="col-4">
                            <div class="formulario__grupo">
                                <label class="formulario__label" for="tipo">Tipo usuario</label>
                                <div class="formulario__grupo-input">
                                    <select name="tipo" id="tipo" class="formulario__input">
                                        <option value="">Seleccionar</option>
                                        <?php foreach ($tipoUsuarios as $tipoUsuario) : ?>
                                            <option <?php echo $usuario->tipo_usuario == $tipoUsuario->id ? 'selected' : ''  ?> value="<?php echo $tipoUsuario->id ?>"><?php echo ucwords($tipoUsuario->tipo) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="formulario__grupo">
                                <label class="formulario__label" for="tipo_identificacion">Tipo Identificacion</label>
                                <div class="formulario__grupo-input">
                                    <select name="tipo_identificacion" id="tipo_identificacion" class="formulario__input" required>
                                        <option value="">Seleccionar</option>
                                        <option <?php echo $usuario->tipo_identificacion == 'CC' ? 'selected' : ''  ?> value="CC">Cedula</option>
                                        <option <?php echo $usuario->tipo_identificacion == 'TI' ? 'selected' : ''  ?> value="TI">Tarjeta Identidad</option>
                                        <option <?php echo $usuario->tipo_identificacion == 'CE' ? 'selected' : ''  ?> value="CE">Cedula extranjeria</option>
                                        <option <?php echo $usuario->tipo_identificacion == 'P' ? 'selected' : ''  ?> value="P">Pasaporte</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="formulario__grupo" id="grupo__num_identificacion">
                                <label for="num_identificacion" class="formulario__label">Identificación</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" maxlength="12" name="num_identificacion" id="num_identificacion"  required placeholder="num_identificacion" value='<?php echo $usuario->num_identificacion ?>'>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">La Identificacion debe contener minimo 6 y maximo 12 digitos.</p>
                            </div>
                        </div>



                        <div class="col-4">
                            <div class="formulario__grupo" id="grupo__nombres">
                                <label for="nombres" class="formulario__label">Nombre</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" maxlength="20" name="nombres" id="nombres" placeholder="nombres" required value='<?php echo $usuario->nombres ?>'>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Los nombres solo puede contener letras.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="formulario__grupo" id="grupo__apellidos">
                                <label for="apellidos" class="formulario__label">Apellidos</label>
                                <div class="formulario__grupo-input">
                                    <input type="text" class="formulario__input" maxlength="20" name="apellidos" id="apellidos" placeholder="apellidos" required value='<?php echo $usuario->apellidos ?>'>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Los apellidos solo puede contener letras.</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="formulario__grupo" id="grupo__correo">
                                <label for="correo" class="formulario__label">Correo</label>
                                <div class="formulario__grupo-input">
                                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo" required value='<?php echo $usuario->correo ?>'>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Ingresa un correo valido</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="formulario__grupo" id="grupo__telefono">
                                <label for="telefono" class="formulario__label">Telefono</label>
                                <div class="formulario__grupo-input">
                                    <input type="tel" class="formulario__input" maxlength="10" name="telefono" id="telefono" placeholder="telefono" required value='<?php echo $usuario->telefono ?>'>
                                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                </div>
                                <p class="formulario__input-error">Un telefono valido !</p>
                            </div>
                        </div>



                        <div class="col-4">
                            <div class="form-group">
                                <label class="formulario__label" for="nombre">Estado</label>
                                <select name="estado" id="estado" class="formulario__input">
                                    <option value=""> Seleccionar</option>
                                    <option <?php echo $usuario->estado == '1' ? 'selected' : ''  ?> value="1"> Activo</option>
                                    <option <?php echo $usuario->estado == '0' ? 'selected' : '' ?> value="0"> Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>

                    <input type="hidden" name="id" value='<?php echo $usuario->id ?>'>
                    <input type="hidden" name="created" value='<?php echo date('Y-m-d') ?>'>
                    <input type="hidden" name="modified" value='<?php echo date('Y-m-d') ?>'>
                    <input type="button" id="guardar" class="btn btn-default btn-block" value="Enviar">

                </form>

            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="index" id="index">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

    <script>
        $(document).on('click', '#guardar', function(e) {
            var data = $("#formulario").serialize();
            $("#index").modal('hide'); //ocultamos el modal
            $.ajax({
                data: data,
                type: "post",
                url: "?c=usuarios&a=Registrar",
                success: function(data) {


                    Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: 'El usuario se ha creado con exito',
                            showConfirmButton: false,
                            timer: 1500
                        },
                        setTimeout(function() {
                            window.location.reload(1);
                        }, 1500)
                    )
                }
            });
        });
    </script>
    <style>
        .modal {
            margin-top: 10% !important;
        }
    </style>
    
