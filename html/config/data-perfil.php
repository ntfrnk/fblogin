<?

// Opciones tratamiento

if(isset($_SESSION['valores']['tratamiento'])) {
    $tratamiento = $_SESSION['valores']['tratamiento'];
} else {
    $tratamiento = $_SESSION['u']['perfil']['tratamiento'];
}

$trat = strtolower($tratamiento);
if(strstr($trat, 'no.') || strstr($trat, 'ninguno') || $trat == 'no'){
    $tratamiento = "";
}


// Opciones medicacion

if(isset($_SESSION['valores']['medicacion'])) {
    $medicacion = $_SESSION['valores']['medicacion'];
} else {
    $medicacion = $_SESSION['u']['perfil']['medicacion'];
}

$med = strtolower($medicacion);
if(strstr($med, 'no.') || strstr($med, 'no,') || strstr($med, 'ninguna') || $med == 'no'){
    $medicacion = "";
}


// Postura frente al aborto

$posturas = array('A favor', 'En contra');

if(isset($_SESSION['valores']['proaborto'])){
    $postura_actual = $_SESSION['valores']['proaborto'];
} else {
    $postura_actual = $_SESSION['u']['perfil']['proaborto'];
}

foreach($posturas as $key => $postura){
    if($postura == $postura_actual){
        $selected = $key;
    }
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
                        <li class="active">Perfil de postulante</li>
                        <li><a href="config/data-referencia/">Personas de referencia</a></li>
                        <li><a href="config/data-documentos/">Documentos importantes</a></li>
                    </ul>
                </div>
                
                <div class="card card-form-new">
                    <div class="card-header b">
                        Perfil del postulante
                    </div>
                    <div class="card-body">
                        <form action="process/user-data-perfil.php" method="POST">
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

                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="religion" class="col-md-10 col-xs-12 marT5">¿Practica alguna religión? ¿Cuál?</label>
                                    <input type="text" name="religion" id="religion" value="<? if(isset($_SESSION['valores']['religion'])) { echo $_SESSION['valores']['religion']; } else { echo $_SESSION['u']['perfil']['religion']; } ?>" class="form-control a-center col-md-8 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="proaborto" class="col-md-10 col-xs-12 marT5">¿Cuál es su postura frente al aborto? (A favor / en contra)</label>
                                    <select name="proaborto" id="proaborto" class="form-control col-md-8 col-xs-12" required>
                                        <option value="" disabled>Elige una opción</option>
                                        <? foreach($posturas as $k => $postura){ ?>
                                            <? if($selected == $k){ $sel = ' selected'; } else { $sel = ''; } ?>
                                            <option value="<?=$postura?>"<?=$sel?>><?=$postura?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="trabajo" class="col-md-10 col-xs-12 marT5">¿Ha trabajado con niños/as? ¿Dónde?</label>
                                    <input type="text" name="trabajo" id="trabajo" value="<? if(isset($_SESSION['valores']['trabajo'])) { echo $_SESSION['valores']['trabajo']; } else { echo $_SESSION['u']['perfil']['trabajo']; } ?>" class="form-control a-center col-md-8 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="razones" class="col-md-10 col-xs-12 marT5">Indique las razones por las que quisiera formarse como Preventor/a<br>del Abuso Sexual Infantil <small class="f12">(Mínimo 200 caracteres)</small></label>
                                    <textarea name="razones" rows="3" id="razones" class="form-control col-md-8 col-xs-12" required><? if(isset($_SESSION['valores']['razones'])) { echo $_SESSION['valores']['razones']; } else { echo $_SESSION['u']['perfil']['razones']; } ?></textarea>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="d-none d-md-block col-md-4 col-xs-12 marT5">&nbsp;</label>
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