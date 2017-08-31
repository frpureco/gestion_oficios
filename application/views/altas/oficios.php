<div class="container">
        <div class="row">        
            <div class="col-sm-2 col-md-2">
            </div>                
                <!-- <form action="" method="post" role"form" class="form-horizontal">       -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-primary">
                    <div class="text-center panel-heading">
                            <strong>Registra un nuevo Oficio</strong>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 col-sm-8 col-xs-12"> 
                                <div class="alert alert-success" id="correcto">
                                    <strong>¡Correcto! </strong>Datos insertados correctamente
                                </div>                                
                                <?= form_open("superu/registrarOficios"," id=form class=form-horizontal role=form enctype=multipart/form-data")?>    

                                   <!-- <form class="form-horizontal" id="form" role="form" enctype="multipart/form-data">  -->
                                        <div class="form-group">
                                            <strong>Quien lo envia</strong>
                                            <select class="form-control" disabled>                                    
                                                <option value="Remitente">Remitente 1</option>
                                                <option value="Remitente">Remitente 2</option>
                                                <option value="Remitente">Remitente 3</option>
                                                <option value="Remitente">Remitente 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <strong>A quien es dirigido</strong>
                                            <select class="form-control" disabled>
                                                <option value="Dirigido a">Dirigido a</option>
                                                <option value="Dirigido a">Dirigido a</option>
                                                <option value="Dirigido a">Dirigido a</option>
                                                <option value="Dirigido a">Dirigido a</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <strong>Asunto del oficio </strong>
                                            <textarea name="asunto" id="asunto" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                           <strong>Fecha del oficio </strong>
                                            <input type="date"name="f_oficio" value ="<?echo date("Y-m-d")?>" min="2010-01-10" step="1">
                                        </div>
                                        <!-- este campo será llenado desde la base de datos -->
                                        <!-- <div class="form-group">
                                            <strong>Fecha en la que se registra el oficio</strong>
                                            <input type="date"name="f_oficio" value ="<?echo date("Y-m-d")?>" min="2010-01-10" step="1">
                                        </div> -->
                                        <div class="form-group">
                                            <strong>Dependencia </strong>
                                            <select class="form-control" disabled>
                                                <option value="Dependencia x">Dependencia x</option>
                                                <option value="Dependencia x">Dependencia x</option>
                                                <option value="Dependencia x">Dependencia x</option>
                                                <option value="Dependencia x">Dependencia x</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                             
                                            <div>
                                                <!-- el label y el input deben tener el mismo valor en el atributo for y 
                                            Id respectivamente -->
                                            <label for="archivo" class="btn btn-warning">Subir archivo</label>                                            
                                            <input id= "archivo" class="" type="file" name="pdf" style="display:none"/>
                                            </div>                                                                                       
                                            <p class="help-blok form-text text-muted">
                                                Porfavor Sube el Archivo Escaneado en Formato PDF
                                            </p>                                            
                                        </div>
                                        <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="">
                                            Hay complementos
                                        </label>
                                        </div>
                                        <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="">
                                            Hay evento en el oficio
                                        </label>
                                        </div>
                                        <div class="form-group">
                                            <button  class="btn btn-danger" id="subir_oficio"> Registrar</button>
                                        </div>
                                                              
                                    </form>
                                                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                              
            </div>       
        </div>                          
    </div>