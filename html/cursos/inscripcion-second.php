<?

$registro = listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and estado in ('0','1')", "1,0", "rand()");

if(count($registro) != 0){

    foreach($registro as $reg);

    if(!isset($_SESSION['inscripcion']) || empty($_SESSION['inscripcion'])){
        $_SESSION['inscripcion'] = $reg['cursoID'];
    }

} else {

    header("Location: ".$pow_base."cursos/all/");

}

$paises = array('Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Antigua y Barbuda', 'Arabia Saudita', 'Argelia', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaiyán', 'Bahamas', 'Bangladés', 'Barbados', 'Baréin', 'Bélgica', 'Belice', 'Benín', 'Bielorrusia', 'Birmania/Myanmar', 'Bolivia', 'Bosnia y Herzegovina', 'Botsuana', 'Brasil', 'Brunéi', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután', 'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Catar', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad del Vaticano', 'Colombia', 'Comoras', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Dinamarca', 'Dominica', 'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos', 'Estonia', 'Etiopía', 'Filipinas', 'Finlandia', 'Fiyi', 'Francia', 'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guyana', 'Guinea', 'Guinea ecuatorial', 'Guinea-Bisáu', 'Haití', 'Honduras', 'Hungría', 'India', 'Indonesia', 'Irak', 'Irán', 'Irlanda', 'Islandia', 'Islas Marshall', 'Islas Salomón', 'Israel', 'Italia', 'Jamaica', 'Japón', 'Jordania', 'Kazajistán', 'Kenia', 'Kirguistán', 'Kiribati', 'Kuwait', 'Laos', 'Lesoto', 'Letonia', 'Líbano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macedonia del Norte', 'Madagascar', 'Malasia', 'Malaui', 'Maldivas', 'Malí', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'México', 'Micronesia', 'Moldavia', 'Mónaco', 'Mongolia', 'Montenegro', 'Mozambique', 'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Níger', 'Nigeria', 'Noruega', 'Nueva Zelanda', 'Omán', 'Países Bajos', 'Pakistán', 'Palaos', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Perú', 'Polonia', 'Portugal', 'Reino Unido', 'República Centroafricana', 'República Checa', 'República del Congo', 'República Democrática del Congo', 'República Dominicana', 'República Sudafricana', 'Ruanda', 'Rumanía', 'Rusia', 'Samoa', 'San Cristóbal y Nieves', 'San Marino', 'San Vicente y las Granadinas', 'Santa Lucía', 'Santo Tomé y Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudán', 'Sudán del Sur', 'Suecia', 'Suiza', 'Surinam', 'Tailandia', 'Tanzania', 'Tayikistán', 'Timor Oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Túnez', 'Turkmenistán', 'Turquía', 'Tuvalu', 'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán', 'Vanuatu', 'Venezuela', 'Vietnam', 'Yemen', 'Yibuti', 'Zambia', 'Zimbabue');

if($_SESSION['u']['perfil']['fijo']){
    $tel_fijo = $_SESSION['u']['perfil']['fijo'];
} elseif($_SESSION['valores']['fijo']) {
    $tel_fijo = $_SESSION['valores']['fijo'];
} else {
    $tel_fijo = '';
}

$fijo = explode(" ", $tel_fijo);

if(count($fijo)<3){
    $fijo[0] = '';
    $fijo[1] = '';
    $fijo[2] = $tel_fijo;
}


if($_SESSION['u']['perfil']['celular']){
    $tel_celular = $_SESSION['u']['perfil']['celular'];
} elseif($_SESSION['valores']['celular']) {
    $tel_celular = $_SESSION['valores']['celular'];
} else {
    $tel_celular = '';
}

$celular = explode(" ", $tel_celular);

if(count($celular)<3){
    $celular[0] = '';
    $celular[1] = '';
    $celular[2] = $tel_celular;
}


if($_SESSION['valores']['pais']){
    $nacionalidad =  $_SESSION['valores']['pais'];
} else {
    if(!empty($_SESSION['u']['perfil']['pais'])){
        $nacionalidad =  $_SESSION['u']['perfil']['pais'];
    } else {
        $nacionalidad = "Argentina";
    }
}


?>

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