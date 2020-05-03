<?

if(empty($pow_get['Id'])){

	$sql = "Select * from pow_users as u, pow_users_preventores as pr
		where u.Id=pr.userID and u.Id='".$_SESSION['user_learn']."'";

	$title = "Gestionar mis datos";
	$usuarioID = "";

} else {

	$sql = "Select * from pow_users as u, pow_users_preventores as pr
		where u.Id=pr.userID and u.Id='".$pow_get['Id']."'";

	$title = "Gestionar datos de usuario";
	$usuarioID = $pow_get['Id']."/";

}

$users = query($sql);

if($pow_get['vista']=="" or $pow_get['vista']=="home" or $pow_get['vista']=="user"){
	$keySolapa = "";
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
				
				<div class="tab-pane fade show active" id="nav-prevent" role="tabpanel" aria-labelledby="nav-prevent-tab">
					<div class="form-wrapper form-border">
						<div class="alert alert-warning">
							Si usted ya hizo nuestro curso de Preventores del Abuso Sexual Infantil, por favor indíquenos la información que le solicitamos a continuación; caso contrario sólo deje vacíos los campos.
						</div>
						<div class="row form-row">
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-lugar">Lugar de formación</label>
								<input type="text" id="user-prevent-lugar" value="<?=$user['lugar']?>" class="form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-fecha">Fecha de formación</label>
								<input type="date" id="user-prevent-fecha" value="<?=$user['fecha']?>" class="form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-certificado">¿Posee Certificado? (Explique la razón)</label>
								<input type="text" id="user-prevent-certificado" value="<?=$user['certificado']?>" class="form-control" placeholder="SI/NO (explique la razón)" autocomplete="off" required>
							</div>
						</div>
						<div class="row form-row">
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-lugar-aplicacion">Lugar y Año donde aplicó el Programa «Mientras nos divertimos Aprendemos a Vivir»</label>
								<input type="text" id="user-prevent-lugar-aplicacion" value="<?=$user['lugar_aplicacion']?>" class="form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-edad-nivel">Edad o nivel de los niños, niñas o pre juveniles con los que trabajó con dicho programa</label>
								<input type="text" id="user-prevent-edad-nivel" value="<?=$user['edad_nivel']?>" class="form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4">
								<label class="lbl" for="user-prevent-reporte">¿Pasó algún reporte a la Fundación EPASI? ¿Trabajó en otras áreas con Niños, Niñas y Pre juveniles?</label>
								<input type="text" id="user-prevent-reporte" value="<?=$user['reporte']?>" class="form-control" autocomplete="off" required>
							</div>
						</div>
						<div class="row form-row">
							<div class="col-md-6">
								<label class="lbl" for="user-prevent-revelacion">¿Experimentó la revelación de un abuso sexual por parte de un niño, niña o adolescente?</label>
								<input type="text" id="user-prevent-revelacion" value="<?=$user['revelacion']?>" class="form-control" autocomplete="off" required>
							</div>
							<div class="col-md-6">
								<label class="lbl" for="user-prevent-explicacion">En caso de que su respuesta sea positiva, explique cómo intervino o resolvió este caso</label>
								<input type="text" id="user-prevent-explicacion" value="<?=$user['explicacion']?>" class="form-control" autocomplete="off" required>
							</div>
						</div>
						<div class="form-group marT25">
							<? if(!empty($pow_get['Id'])){ ?>
								<input type="hidden" name="userID" id="userID" value="<?=$pow_get['Id']?>">
							<? } ?>
							<a href="javascript:;" class="btn btn-primary marR5" onclick="user_save_prevent()">
								<span>Guardar información</span>
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