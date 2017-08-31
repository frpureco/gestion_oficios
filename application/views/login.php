    <div class="container">
        <div class="row">        
            <div class="col-md-4 col-xs-3">
            </div>                
                <!-- <form action="" method="post" role"form" class="form-horizontal">       -->
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <strong>Inicia sesion</strong>
                    </div>
                        <div class="panel-body">
                            <div class="alert alert-danger" id="no_login">
                                <strong>¡ Usuario / Contraseña incorrectos ! </strong>Verifica los datos que ingresaste
                            </div>
                            <div class="alert alert-danger" id="validando">
                                <strong> Datos sin completar</strong>
                                <div class="lista_errores"></div>
                            </div>
                            <?= form_open("superu/ingresar","class=form-horizontal id=login_form role=form ")?>                                            
                                <div class="form-group">
                                    <label for="usuario" class="text-center">Usuario</label>
                                    <input type="text" name ="user"class="form-control" placeholder="Nombre de usuario">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña" class="text-center">Contraseña</label>
                                    <input type="password"  name = "pass"class="form-control" placeholder="Introduce la contraseña">
                                </div>                
                                    <div class="form-group">
                                        <button id="iniciar_sesion" class=" center-block btn btn-primary">
                                            Ingresar
                                        </button>
                                    </div>                                                                                                                                                        
                            </form>
                        </div>
                    </div>
                </div>                              
            </div>       
        </div>                          
    </div>

     