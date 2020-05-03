<?

if(empty($pow_get['Id'])){

	$sql = "Select * from pow_users as u, pow_users_perfil as p
		where u.Id=p.userID and u.Id='".$_SESSION['user_learn']."'";
	$title = "Gestionar mis datos";
	$usuarioID = "";

} else {

	$sql = "Select * from pow_users as u, pow_users_perfil as p
		where u.Id=p.userID and u.Id='".$pow_get['Id']."'";
	$title = "Gestionar datos de usuario";
	$usuarioID = $pow_get['Id']."/";

}

if(empty($pow_get['Id'])){

	$faltan = faltanDatos($_SESSION['user_learn'], 2);

} else {

	$faltan = faltanDatos($pow_get['Id'], 2);

}

$users = query($sql);

if(empty($pow_get['vista']) or $pow_get['vista']=="home" or $pow_get['vista']=="user"){
	if(empty($pow_get['Id'])){
		$keySolapa = "";
	} else {
		$keySolapa = "user";
	}
}

foreach($users as $user);

$solapas = array(
	array(
		"key" => $keySolapa,
		"link" => "config/",
		"label" => "Datos personales"
	),
	array(
		"key" => "pagos",
		"link" => "config/pagos/",
		"label" => "Pagos"
	),
	array(
		"key" => "documentos",
		"link" => "config/documentos/",
		"label" => "Documentación"
	),
	array(
		"key" => "acceso",
		"link" => "config/acceso/",
		"label" => "Datos de acceso"
	),
	array(
		"key" => "preventores",
		"link" => "config/preventores/",
		"label" => "Preventores"
	)
);

if(!empty($pow_get['Id'])){
	$solapas[0]['link'] = "config/user/";
}

$pos_aborto = array(
	"0" => "-- Seleccionar --",
	"A favor" => "Estoy a favor",
	"En contra" => "Estoy en contra"
);

?>

<section id="content">

	<div class="container">

		<div class="marT50">
			<h1><?=$title?></h1>
		</div>

		<div class="marT40">
			<nav class="d-none d-md-block" style="float: none;">
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<?$i=0;?>
					<? foreach($solapas as $label){ ?>
						<?
						if($label['key']==$pow_get['vista']){
							$act = " active";
							$link = "javascript:;";
						} else {
							$act = "";
							$link = $label['link'].$usuarioID;
						}
						?>
						<a class="nav-item nav-link<?=$act?>" href="<?=$link?>"><?=$label['label']?></a>
					<? } ?>
				</div>
			</nav>
			
			<div class="d-block d-md-none padLR15" style="float: none;">
				<select id="select-config" class="form-control" onchange="window.location=$(this).val();">
					<?$i=0;?>
					<? foreach($solapas as $label){ ?>
						<?
						if($label['key']==$pow_get['vista']){
							$link = "";
							$sel = " selected";
						} else {
							$link = $label['link'].$usuarioID;
							$sel = "";
						}
						?>
						<option value="<?=$link?>"<?=$sel?>><?=$label['label']?></option>
					<? } ?>
				</select>
			</div>

			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
					<div class="form-wrapper form-border">
						<div class="row">
							<div class="col-12 col-md-3">
								<? if(in_array("nombre", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-nombre">Nombre: </label>
								<input type="text" id="user-nombre" value="<?=$user['nombre']?>" class="form-control"<?=$faltante?> placeholder="Nombre" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("apellido", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-apellido">Apellido: </label>
								<input type="text" id="user-apellido" value="<?=$user['apellido']?>" class="form-control"<?=$faltante?> placeholder="Apellido" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("nacimiento", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-nacimiento">Nacimiento: </label>
								<input type="date" id="user-nacimiento" value="<?=$user['nacimiento']?>" class="form-control"<?=$faltante?> placeholder="Fecha de nacimiento" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("dni", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-dni">Nº de Identificación estatal: </label>
								<input type="number" id="user-dni" value="<?=$user['dni']?>" class="form-control"<?=$faltante?> placeholder="Nº de identificación" autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-3">
								<? if(in_array("nacionalidad", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-nacionalidad">Nacionalidad: </label>
								<input type="text" id="user-nacionalidad" value="<?=$user['nacionalidad']?>" class="form-control"<?=$faltante?> placeholder="Nacionalidad" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("estado_civil", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-estadocivil">Estado civil: </label>
								<select id="user-estadocivil" class="form-control"<?=$faltante?> required>
									<option value="">Seleccionar</option>
									<option value="Soltero/a"<? if($user['estado_civil']=="Soltero/a"){ echo " selected"; } ?>>Soltero/a</option>
									<option value="Casado/a"<? if($user['estado_civil']=="Casado/a"){ echo " selected"; } ?>>Casado/a</option>
									<option value="Divorciado/a"<? if($user['estado_civil']=="Divorciado/a"){ echo " selected"; } ?>>Divorciado/a</option>
									<option value="Viudo/a"<? if($user['estado_civil']=="Viudo/a"){ echo " selected"; } ?>>Viudo/a</option>
								</select>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("fijo", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-fijo">Nº telefónico fijo: </label>
								<input type="tel" id="user-fijo" value="<?=$user['fijo']?>" class="form-control"<?=$faltante?> placeholder="Ej: +54 9 012 345-6789" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("celular", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-celular">Nº de Celular: </label>
								<input type="tel" id="user-celular" value="<?=$user['celular']?>" class="form-control"<?=$faltante?> placeholder="Ej: +54 9 012 345-6789" autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-3">
								<? if(in_array("direccion", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-direccion">Dirección postal: </label>
								<input type="text" id="user-direccion" value="<?=$user['direccion']?>" class="form-control"<?=$faltante?> placeholder="Dirección" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-2">
								<? if(in_array("cp", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-cp">Código postal: </label>
								<input type="number" id="user-cp" value="<?=$user['cp']?>" class="form-control"<?=$faltante?> placeholder="Código postal" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-2">
								<? if(in_array("ciudad", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-ciudad">Ciudad: </label>
								<input type="text" id="user-ciudad" value="<?=$user['ciudad']?>" class="form-control"<?=$faltante?> autocomplete="off" placeholder="Ciudad" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-2">
								<? if(in_array("provincia", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-provincia">Provincia / Estado: </label>
								<input type="text" id="user-provincia" value="<?=$user['provincia']?>" class="form-control"<?=$faltante?> autocomplete="off" placeholder="Provincia" autocomplete="off" required>
							</div>
							<div class="col-12 col-md-3">
								<? if(in_array("pais", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-pais">País: </label>
								<input type="text" id="user-pais" value="<?=$user['pais']?>" class="form-control"<?=$faltante?> autocomplete="off" placeholder="País" autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-4">
								<? if(in_array("religion", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-religion">¿Practica alguna religión? ¿Cuál? </label>
								<input type="text" id="user-religion" value="<?=$user['religion']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("proaborto", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-proaborto">¿Cuál es su postura frente al aborto? </label>
								<select id="user-proaborto" class="form-control"<?=$faltante?> required>
									<? foreach($pos_aborto as $key => $valor) { ?>
										<? if($key=="0"){ $dis = "disabled"; } else { $dis = ""; } ?>
										<? if($key==$user['proaborto']){ $sel = "selected"; } else { $sel = ""; } ?>
										<option value="<?=$key?>" <?=$dis?> <?=$sel?>><?=$valor?></option>
									<? } ?>
								</select>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("trabajo", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-trabajo">¿Ha trabajado con niños/as? ¿Dónde? </label>
								<input type="text" id="user-trabajo" value="<?=$user['trabajo']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-6">
								<? if(in_array("tratamiento", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-tratamiento">¿Se encuentra actualmente en tratamiento psicológico o psiquiátrico? Brinde detalles del mismo. </label>
								<input type="text" id="user-tratamiento" value="<?=$user['tratamiento']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-6">
								<? if(in_array("medicacion", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-medicacion">¿Actualmente toma alguna medicación como ser pastillas para dormir, tranquilizantes, psicofármacos? Detalle cuáles. </label>
								<input type="text" id="user-medicacion" value="<?=$user['medicacion']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-6">
								<? if(in_array("concepcion", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-concepcion">Según su concepción personal de familia: ¿Cómo debería estar compuesta la misma?</label>
								<input type="text" id="user-concepcion" value="<?=$user['concepcion']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-6">
								<? if(in_array("razones", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-razones">Indique las razones por las que quisiera formarse como Preventor/a del Abuso Sexual Infantil <small>(Mínimo 200 caracteres <a href="javascript:;" onclick="alert($('#user-razones').val().length+' caracteres (faltan '+parseInt(200 - $('#user-razones').val().length)+').');">¿Contar?</a>)</small></label>
								<input type="text" id="user-razones" value="<?=$user['razones']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-12 row-strong"><strong>Contacto de referencia #1</strong></div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia1_nombre", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia1-nombre">Nombre completo</label>
								<input type="text" id="user-referencia1-nombre" value="<?=$user['referencia1_nombre']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia1_email", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia1-email">Correo electrónico</label>
								<input type="text" id="user-referencia1-email" value="<?=$user['referencia1_email']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia1_celular", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia1-celular">Celular</label>
								<input type="text" id="user-referencia1-celular" value="<?=$user['referencia1_celular']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
						</div>
						<div class="row row-form">
							<div class="col-12 col-md-12 row-strong"><strong>Contacto de referencia #2</strong></div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia2_nombre", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia2-nombre">Nombre completo</label>
								<input type="text" id="user-referencia2-nombre" value="<?=$user['referencia2_nombre']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia2_email", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia2-email">Correo electrónico</label>
								<input type="text" id="user-referencia2-email" value="<?=$user['referencia2_email']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
							<div class="col-12 col-md-4">
								<? if(in_array("referencia2_celular", $faltan)){ $faltante = ' style="border: solid 2px red;"'; } else { $faltante = ""; } ?>
								<label class="lbl" for="user-referencia2-celular">Celular</label>
								<input type="text" id="user-referencia2-celular" value="<?=$user['referencia2_celular']?>" class="form-control"<?=$faltante?> autocomplete="off" required>
							</div>
						</div>
						<div class="form-group marT25">
							<? if(!empty($pow_get['Id'])){ ?>
								<input type="hidden" name="userID" id="userID" value="<?=$pow_get['Id']?>">
							<? } ?>
							<a href="javascript:;" class="btn btn-primary marR5" onclick="user_save_personal()">
								<span>Guardar cambios</span>
								<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>

</section>