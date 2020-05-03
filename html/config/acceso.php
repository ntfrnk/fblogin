<?

if(empty($pow_get['Id'])){

	$users = regById("users", $_SESSION['user_learn']);
	$title = "Gestionar mis datos";
	$usuarioID = "";

} else {

	$users = regById("users", $pow_get['Id']);
	$title = "Gestionar datos de usuario";
	$usuarioID = $pow_get['Id']."/";

}

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
				
				<div class="tab-pane fade show active" id="nav-acceso" role="tabpanel" aria-labelledby="nav-acceso-tab">
					<div class="form-wrapper form-border">
						<div class="row">
							<div class="col-md-6">
								<label class="lbl" for="user-email">Correo electrónico: </label>
								<input type="text" id="user-email" value="<?=$user['email']?>" class="form-control" placeholder="Correo electrónico" autocomplete="off" required>
							</div>
							<div class="col-md-6">
								<label class="lbl" for="user-pass">Contraseña (para cambiar escribir una nueva): </label>
								<input type="password" id="user-pass" class="form-control" placeholder="Contraseña nueva" autocomplete="off" required>
							</div>
						</div>
						<div class="form-group marT25">
							<? if(!empty($pow_get['Id'])){ ?>
								<input type="hidden" name="userID" id="userID" value="<?=$pow_get['Id']?>">
							<? } ?>
							<a href="javascript:;" class="btn btn-primary marR5" onclick="user_save_account()">
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