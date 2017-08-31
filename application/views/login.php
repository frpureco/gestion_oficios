    <div class="container">
        <div class="row">                                    
                <!-- <form action="" method="post" role"form" class="form-horizontal">       -->
            <div class="col-md-3 col-xs-12">
                
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <strong>Inicia sesion</strong>
                    </div>
                        <div class="panel-body">
                            <?= form_open("superu/ingresar")?>                                            
                                <div class="form-group">
                                    <label for="usuario" class="text-center">Usuario</label>
                                    <input type="text" name ="user"class="form-control" placeholder="Nombre de usuario">
                                </div>
                                <div class="form-group">
                                    <label for="contraseña" class="text-center">Contraseña</label>
                                    <input type="password"  name = "pass"class="form-control" placeholder="Introduce la contraseña">
                                </div>                
                                    <div class="form-group">
                                        <input type="submit" value="Ingresar" class=" center-block btn btn-primary">
                                    </div>                                                                                                                        
                            </form>
                        </div>
                    </div>
                </div>                              
            </div>       
        </div>                          
    </div>

     