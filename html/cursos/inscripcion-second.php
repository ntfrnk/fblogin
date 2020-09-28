<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>

                <div class="pasos">
                    <ul>
                        <li>1</li>
                        <li class="active">2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-header b">
                        Datos de contacto
                    </div>
                    <div class="card-body">
                        <form action="process/user-inscription-second.php" method="POST">
                            <div class="padLR30 padTB20">
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="fijo" class="col-md-3 col-xs-12 marT5">Nº telefónico fijo:</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-3 padL0">
                                                <input type="text" name="fijo_nac" value="<?=$fijo[0]?>" class="form-control" placeholder="0054" autocomplete="off" pattern="[0-9]{2,6}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="fijo_prov" value="<?=$fijo[1]?>" class="form-control" placeholder="011" autocomplete="off" pattern="[0-9]{2,5}">
                                            </div>
                                            <div class="col-6 padR0">
                                                <input type="text" name="fijo_num" value="<?=$fijo[2]?>" class="form-control" placeholder="1234-5678" autocomplete="off" pattern="[0-9-]{5,20}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="celular" class="col-md-3 col-xs-12 marT5">Nº de celular:</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-3 padL0">
                                                <input type="text" name="celular_nac" value="<?=$celular[0]?>" class="form-control" placeholder="+54" autocomplete="off" pattern="[0-9+]{2,5}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="celular_prov" value="<?=$celular[1]?>" class="form-control" placeholder="11" autocomplete="off" pattern="[0-9]{2,5}">
                                            </div>
                                            <div class="col-6 padR0">
                                                <input type="text" name="celular_num" value="<?=$celular[2]?>" class="form-control" placeholder="1234-5678" autocomplete="off" pattern="[0-9-]{5,20}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="direccion" class="col-md-3 col-xs-12 marT5">Dirección postal:</label>
                                    <input type="text" name="direccion" id="direccion" value="<? if(isset($_SESSION['valores']['direccion'])) { echo $_SESSION['valores']['direccion']; } else { echo $_SESSION['u']['perfil']['direccion']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[a-zA-Z0-9-+ áéíóúÑÁÉÍÓÚÑ\.\,\(\)]{6,50}">
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="cp" class="col-md-3 col-xs-12 marT5">Código postal:</label>
                                    <input type="text" name="cp" id="cp" value="<? if(isset($_SESSION['valores']['cp'])) { echo $_SESSION['valores']['cp']; } else { echo $_SESSION['u']['perfil']['cp']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[a-zA-Z0-9]{2,15}">
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="ciudad" class="col-md-3 col-xs-12 marT5">Ciudad:</label>
                                    <input type="text" name="ciudad" id="ciudad" value="<? if(isset($_SESSION['valores']['ciudad'])) { echo $_SESSION['valores']['ciudad']; } else { echo $_SESSION['u']['perfil']['ciudad']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[a-zA-Z áéíóúÑÁÉÍÓÚÑ]{3,50}">
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="provincia" class="col-md-3 col-xs-12 marT5">Provincia / Estado:</label>
                                    <input type="text" name="provincia" id="provincia" value="<? if(isset($_SESSION['valores']['provincia'])) { echo $_SESSION['valores']['provincia']; } else { echo $_SESSION['u']['perfil']['provincia']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[a-zA-Z áéíóúÑÁÉÍÓÚÑ]{3,50}">
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="pais" class="col-md-3 col-xs-12 marT5">País:</label>
                                    <select name="pais" class="form-control col-md-6 col-xs-12" required>
                                        <? foreach($paises as $pais): ?>
                                            <? if($nacionalidad == $pais){ $selnac = ' selected'; } else { $selnac = ''; } ?>
                                            <option value="<?=$pais?>"<?=$selnac?>><?=$pais?></option>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="col-md-3 col-xs-12 marT5">&nbsp;</label>
                                    <div class="col-md-6 padL0">
                                        <button type="submit" class="btn btn-primary">Continuar al paso siguiente »</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>