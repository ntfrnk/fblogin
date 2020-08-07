<?

if($_SESSION['u']['perfil']['referencia1_celular']){
    $ref1_celular = $_SESSION['u']['perfil']['referencia1_celular'];
} elseif($_SESSION['valores']['referencia1_celular']) {
    $ref1_celular = $_SESSION['valores']['referencia1_celular'];
} else {
    $ref1_celular = '';
}

$r1_celular = explode(" ", $ref1_celular);

if(count($r1_celular)<3){
    $r1_celular[0] = '';
    $r1_celular[1] = '';
    $r1_celular[2] = $ref1_celular;
}



if($_SESSION['u']['perfil']['referencia2_celular']){
    $ref2_celular = $_SESSION['u']['perfil']['referencia2_celular'];
} elseif($_SESSION['valores']['referencia2_celular']) {
    $ref2_celular = $_SESSION['valores']['referencia2_celular'];
} else {
    $ref2_celular = '';
}

$r2_celular = explode(" ", $ref2_celular);

if(count($r2_celular)<3){
    $r2_celular[0] = '';
    $r2_celular[1] = '';
    $r2_celular[2] = $ref2_celular;
}

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-12">
                
                <h1>Gestionar mis datos</h1>

                <p class="f18">En este espacio puedes gestionar todos tus datos. Te recomendamos mantenerlos siempre completos y actualizados.</p>

                <div class="menu-datos">
                    <ul>
                        <li><a href="config/data-personal/">Datos personales</a></li>
                        <li><a href="config/data-contacto/">Datos de contacto</a></li>
                        <li><a href="config/data-perfil/">Perfil de postulante</a></li>
                        <li class="active">Personas de referencia</li>
                        <li><a href="config/data-documentos/">Documentos importantes</a></li>
                    </ul>
                </div>
                
                <div class="card card-form-new">
                    <div class="card-header b">
                        Personas de referencia
                    </div>
                    <div class="card-body">
                        <form action="process/user-data-referencia.php" method="POST">
                            <div class="form-new">

                                <div class="form-group row justify-content-center row-form-new">    
                                    <? if($_SESSION['resp']=="ok"): ?>
                                        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                            <strong>¡Perfecto!</strong> Los cambios se guardaron correctamente.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <? unset($_SESSION['resp']) ?>
                                    <? elseif($_SESSION['resp']=='error'): ?>
                                        <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                            <strong>¡Ups!</strong> No se pudieron guardar los cambios.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <? unset($_SESSION['resp']) ?>
                                    <? endif; ?>
                                </div>

                                <div class="form-group row justify-content-center row-form-new">
                                    <div class="col-12 b a-center uppercase f17">
                                        Contacto de referencia Nº 1
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="referencia1_nombre" class="col-md-3 col-xs-12 marT5">Nombre completo:</label>
                                    <input type="text" name="referencia1_nombre" id="referencia1_nombre" value="<? if(isset($_SESSION['valores']['referencia1_nombre'])) { echo $_SESSION['valores']['referencia1_nombre']; } else { echo $_SESSION['u']['perfil']['referencia1_nombre']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Ej: 0054 (011) 1234-5678 " autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="referencia1_email" class="col-md-3 col-xs-12 marT5">Correo electrónico:</label>
                                    <input type="email" name="referencia1_email" id="referencia1_email" value="<? if(isset($_SESSION['valores']['referencia1_email'])) { echo $_SESSION['valores']['referencia1_email']; } else { echo $_SESSION['u']['perfil']['referencia1_email']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="celular" class="col-md-3 col-xs-12 marT5">Nº de celular:</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-3 padL0">
                                                <input type="text" name="ref1_celular_nac" value="<?=$r1_celular[0]?>" class="form-control" placeholder="+54" autocomplete="off" pattern="[0-9+]{2,5}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="ref1_celular_prov" value="<?=$r1_celular[1]?>" class="form-control" placeholder="11" autocomplete="off" pattern="[0-9]{2,5}">
                                            </div>
                                            <div class="col-6 padR0">
                                                <input type="text" name="ref1_celular_num" value="<?=$r1_celular[2]?>" class="form-control" placeholder="1234-5678" autocomplete="off" pattern="[0-9-]{5,20}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <div class="col-12 b a-center uppercase f17 marT20">
                                        Contacto de referencia Nº 2
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="referencia2_nombre" class="col-md-3 col-xs-12 marT5">Nombre completo:</label>
                                    <input type="text" name="referencia2_nombre" id="referencia2_nombre" value="<? if(isset($_SESSION['valores']['referencia2_nombre'])) { echo $_SESSION['valores']['referencia2_nombre']; } else { echo $_SESSION['u']['perfil']['referencia2_nombre']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Ej: 0054 (011) 1234-5678 " autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="referencia2_email" class="col-md-3 col-xs-12 marT5">Correo electrónico:</label>
                                    <input type="email" name="referencia2_email" id="referencia2_email" value="<? if(isset($_SESSION['valores']['referencia2_email'])) { echo $_SESSION['valores']['referencia2_email']; } else { echo $_SESSION['u']['perfil']['referencia2_email']; } ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="celular" class="col-md-3 col-xs-12 marT5">Nº de celular:</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-3 padL0">
                                                <input type="text" name="ref2_celular_nac" value="<?=$r2_celular[0]?>" class="form-control" placeholder="+54" autocomplete="off" pattern="[0-9+]{2,5}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="ref2_celular_prov" value="<?=$r2_celular[1]?>" class="form-control" placeholder="11" autocomplete="off" pattern="[0-9]{2,5}">
                                            </div>
                                            <div class="col-6 padR0">
                                                <input type="text" name="ref2_celular_num" value="<?=$r2_celular[2]?>" class="form-control" placeholder="1234-5678" autocomplete="off" pattern="[0-9-]{5,20}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="d-none d-md-block col-md-3 col-xs-12 marT5">&nbsp;</label>
                                    <div class="col-xs-12 col-md-6 padLR0">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
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