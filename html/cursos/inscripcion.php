<?

$registro = listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and estado in ('0','1')", "1,0", "rand()");

if(count($registro) != 0){

    foreach($registro as $reg);

    if(!isset($_SESSION['inscripcion']) || empty($_SESSION['inscripcion'])){
        $_SESSION['inscripcion'] = $reg['Id'];
    }

} else {

    $_SESSION['inscripcion'] = $pow_get['Id'];

}

$paises = array('Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Antigua y Barbuda', 'Arabia Saudita', 'Argelia', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaiyán', 'Bahamas', 'Bangladés', 'Barbados', 'Baréin', 'Bélgica', 'Belice', 'Benín', 'Bielorrusia', 'Birmania/Myanmar', 'Bolivia', 'Bosnia y Herzegovina', 'Botsuana', 'Brasil', 'Brunéi', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután', 'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Catar', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad del Vaticano', 'Colombia', 'Comoras', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Dinamarca', 'Dominica', 'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos', 'Estonia', 'Etiopía', 'Filipinas', 'Finlandia', 'Fiyi', 'Francia', 'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guyana', 'Guinea', 'Guinea ecuatorial', 'Guinea-Bisáu', 'Haití', 'Honduras', 'Hungría', 'India', 'Indonesia', 'Irak', 'Irán', 'Irlanda', 'Islandia', 'Islas Marshall', 'Islas Salomón', 'Israel', 'Italia', 'Jamaica', 'Japón', 'Jordania', 'Kazajistán', 'Kenia', 'Kirguistán', 'Kiribati', 'Kuwait', 'Laos', 'Lesoto', 'Letonia', 'Líbano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macedonia del Norte', 'Madagascar', 'Malasia', 'Malaui', 'Maldivas', 'Malí', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'México', 'Micronesia', 'Moldavia', 'Mónaco', 'Mongolia', 'Montenegro', 'Mozambique', 'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Níger', 'Nigeria', 'Noruega', 'Nueva Zelanda', 'Omán', 'Países Bajos', 'Pakistán', 'Palaos', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Perú', 'Polonia', 'Portugal', 'Reino Unido', 'República Centroafricana', 'República Checa', 'República del Congo', 'República Democrática del Congo', 'República Dominicana', 'República Sudafricana', 'Ruanda', 'Rumanía', 'Rusia', 'Samoa', 'San Cristóbal y Nieves', 'San Marino', 'San Vicente y las Granadinas', 'Santa Lucía', 'Santo Tomé y Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudán', 'Sudán del Sur', 'Suecia', 'Suiza', 'Surinam', 'Tailandia', 'Tanzania', 'Tayikistán', 'Timor Oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Túnez', 'Turkmenistán', 'Turquía', 'Tuvalu', 'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán', 'Vanuatu', 'Venezuela', 'Vietnam', 'Yemen', 'Yibuti', 'Zambia', 'Zimbabue');

$estados_civiles = array(
    'Soltero/a', 
    'Casado/a', 
    'Divorciado/a', 
    'Viudo/a'
);

foreach($estados_civiles as $key => $estado){
    if(isset($_SESSION['valores']['estado_civil'])){
        if($estado == $_SESSION['valores']['estado_civil']){
            $sel = $key;
        }
    } else {
        if($estado == $_SESSION['u']['perfil']['estado_civil']){
            $sel = $key;
        }
    }
}


if($_SESSION['valores']['nacionalidad']){
    $nacionalidad =  $_SESSION['valores']['nacionalidad'];
} else {
    if(!empty($_SESSION['u']['perfil']['nacionalidad'])){
        $nacionalidad =  $_SESSION['u']['perfil']['nacionalidad'];
    } else {
        $nacionalidad = "Argentina";
    }
}

$anio = date('Y') - 18;

$fecha_max = $anio.'-'.date('m-d');

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>

                <div class="pasos">
                    <ul>
                        <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-header b">
                        Datos personales
                    </div>
                    <div class="card-body">
                        <form action="process/user-inscription-first.php" method="POST">
                            <div class="padLR30 padTB20">
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nombre" class="col-md-4 col-xs-12 marT5">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" value="<? if(isset($_SESSION['valores']['nombre'])) { echo $_SESSION['valores']['nombre']; } else { echo $_SESSION['u']['perfil']['nombre']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Nombre" autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="apellido" class="col-md-4 col-xs-12 marT5">Apellido:</label>
                                    <input type="text" name="apellido" id="apellido" value="<? if($_SESSION['valores']['apellido']){ echo $_SESSION['valores']['apellido']; }else{ echo $_SESSION['u']['perfil']['apellido']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Apellido" autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nacimiento" class="col-md-4 col-xs-12 marT5">Fecha de nacimiento:</label>
                                    <input type="date" name="nacimiento" id="nacimiento" value="<? if($_SESSION['valores']['nacimiento']){ echo $_SESSION['valores']['nacimiento'];}else{ echo $_SESSION['u']['perfil']['nacimiento'];} ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}"  max="<?=$fecha_max?>" min='1940-01-01' required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="dni" class="col-md-4 col-xs-12 marT5">Nº documento de identidad:</label>
                                    <input type="number" name="dni" id="dni" value="<? if($_SESSION['valores']['dni']){ echo $_SESSION['valores']['dni'];}else{ echo $_SESSION['u']['perfil']['dni'];} ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[0-9\.-]{5,20}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nacionalidad" class="col-md-4 col-xs-12 marT5">Nacionalidad:</label>
                                    <select name="nacionalidad" class="form-control col-md-6 col-xs-12" required>
                                        <? foreach($paises as $pais): ?>
                                            <? if($nacionalidad == $pais){ $selnac = ' selected'; } else { $selnac = ''; } ?>
                                            <option value="<?=$pais?>"<?=$selnac?>><?=$pais?></option>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="estado_civil" class="col-md-4 col-xs-12 marT5">Estado civil:</label>
                                    <select name="estado_civil" id="estado_civil" class="form-control col-md-6 col-xs-12" required>
                                        <? foreach($estados_civiles as $k => $estado_civil): ?>
                                            <option value="<?=$estado_civil?>"<? if($k == $sel){ echo ' selected'; } else { echo ''; } ?>><?=$estado_civil?></option>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="ocupacion" class="col-md-4 col-xs-12 marT5">Ocupación:</label>
                                    <input type="input" name="ocupacion" id="ocupacion" value="<? if($_SESSION['valores']['ocupacion']){ echo $_SESSION['valores']['ocupacion'];}else{ echo $_SESSION['u']['perfil']['ocupacion'];} ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="col-md-4 col-xs-12 marT5">&nbsp;</label>
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