<?

if(empty($pow_get['Id'])){

	$sql = "Select * from pow_users where Id='".$_SESSION['user_learn']."'";
	$users = query($sql);
	foreach($users as $user);

	$pagos = regBy("users_pagos", "userID", $_SESSION['user_learn']);

	$title = "Gestionar mis datos";
	$usuarioID = "";

} else {

	$sql = "Select * from pow_users where Id='".$pow_get['Id']."'";
	$users = query($sql);
	foreach($users as $user);

	$pagos = regBy("users_pagos", "userID", $pow_get['Id']);

	$title = "Gestionar datos de usuario";
	$usuarioID = $pow_get['Id']."/";

}

if($pow_get['vista']=="" or $pow_get['vista']=="home" or $pow_get['vista']=="user"){
	$keySolapa = "";
}

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

$uplpath = $pow_root."upload/";
$upl = $pow_base."upload/";

$estados = array("Cancelado","Pendiente","Pagado");

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
				
				<div class="tab-pane fade active show" id="nav-acceso" role="tabpanel" aria-labelledby="nav-acceso-tab">
					<div class="form-wrapper form-border">

						<div class="alert alert-warning">
							Para avanzar en su inscripción hacia la siguiente etapa debe enviarnos primeramente una Declaración Jurada (archivo adjunto), la misma debe ser firmada y cargada en el siguiente formulario (por foto o escaneada).
						</div>

						<div class="marT10 legajo docs">

							<div class="hide">

								<form id="loader-ddjj" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadddjj" name="load" accept=".pdf,.jpg,.png">
									<input type="text" name="loadtype" value="ddjj">
									<input type="text" name="loadtemp" value="pagos">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

								<form id="loader-comprobantes" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadcomprobantes" name="load" accept=".pdf,.jpg">
									<input type="text" name="loadtype" value="comp">
									<input type="text" name="pagoID" id="pagoID">
								</form>

							</div>

							<div class="row">

								<div class="padTB5 col-6">
									
									<strong>Declaración jurada: (<a href="javascript:;" onclick="open_alert('Ésta declaración Jurada es realizada acorde a nuestro ideario institucional y a los lineamientos sobre el perfil del preventor. Por favor descargue la nota modelo y vuelva a subirla luego de haberla completado con sus datos.');">?</a>) <small>(<a href="upload/ddjj/declaracion-jurada-epasi.pdf" download>Descargar nota</a>)</small></strong>
									<?

									$filepath0 = $uplpath."ddjj/".md5($user['Id']).".pdf";
									$filepath1 = $uplpath."ddjj/".md5($user['Id']).".jpg";
									$filepath2 = $uplpath."ddjj/".md5($user['Id']).".jpeg";
									$filepath3 = $uplpath."ddjj/".md5($user['Id']).".png";
									
									$namefile = md5($user['Id']);

									if(file_exists($filepath0) && !is_dir($filepath0)){
										$namefile .= ".pdf";
										$f = 1;
									} elseif(file_exists($filepath1) && !is_dir($filepath1)){
										$namefile .= ".jpg";
										$f = 1;
									} elseif(file_exists($filepath2) && !is_dir($filepath2)){
										$namefile .= ".jpeg";
										$f = 1;
									} elseif(file_exists($filepath3) && !is_dir($filepath3)){
										$namefile .= ".png";
										$f = 1;
									}

									$file = $upl."ddjj/".$namefile;

									if($f==1){
										echo '<a href="'.$file.'" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar archivo</a> &nbsp; ';
										echo '<a href="javascript:;" onclick="deletefile(\''.$namefile.'\', \'ddjj\')" class="btn btn-sm btn-danger" download><i class="fa fa-times"></i> Eliminar</a>';
									} else {
										echo '<button type="button" class="btn btn-sm btn-primary" onclick="$(\'.loadddjj\').trigger(\'click\');">Cargar archivo</button>';
									}

									?>

								</div>

							</div>

							<div class="padTB15">

								<? if(count($pagos)==0){ ?>

									<div id="pagar">
										<div class="padTB5">
											<p class="marB0"><strong>Elija el curso a pagar:</strong></p>
											<select id="cursoID" class="form-control col-md-4">
												<option value="0" selected disabled>Elija una opción</option>
												<? foreach(listReg("cursos", "where cierre!=1", "", "nombre,asc") as $curso) { ?>
													<option value="<?=$curso['Id']?>"><?=$curso['nombre']?></option>
												<? } ?>
											</select>
										</div>
										<div class="padTB10">
											<p class="marB0"><strong>Elija el medio de pago:</strong></p>
											<select id="medio-pago" class="form-control col-md-4">
												<option value="Mercado Pago">Mercado Pago</option>
												<option value="Paypal">Paypal</option>
												<option value="Banco">Operación bancaria</option>
											</select>
											<p class="f14 marTB5 none costo"><em>Inversión <span class="ccosto"></span> dólares (o equivalente en pesos).</em></p>
											<a href="javascript:;" class="btn btn-sm btn-primary marT20 marR5" onclick="user_pay($('#cursoID').val(), $('#medio-pago').val())">
												<span>Enviar datos de pago a mi correo</span>
												<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
													<span class="sr-only">Loading...</span>
												</div>
											</a>
										</div>
									</div>

								<? } else { ?>

									<div class="padT40">
										<button type="button" class="btn btn-success float-right" onclick="open_modal('new-pago')"><i class="fa fa-plus f14"></i>&nbsp; Nuevo pago&nbsp;</button>
										<h3>Mis pagos</h3>
									</div>

									<div class="padTB15 d-none d-md-block">
										<table class="table">
											<tr>
												<th width="45%">Nombre del curso</th>
												<th width="20%">Medio de pago</th>
												<th width="15%">Estado</th>
												<th width="20%">Comprobante</th>
											</tr>
											<? foreach($pagos as $pago){ ?>
												<?

												$filepath = $uplpath."comprobantes/".md5($pago['Id']).".jpg";
												$namefile = md5($pago['Id']).".jpg";
												$file = $upl."comprobantes/".$namefile;

												?>
												<tr>
													<td class="lh22"><?=campoRegById("cursos", $pago['cursoID'], "nombre")?></td>
													<td class="lh22"><?=$pago['medio']?></td>
													<td class="lh22"><?=$estados[$pago['estado']]?></td>
													<td class="padR0">
														<? if($pago['estado']==2){ ?>
															<a href="<?=$file?>" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar</a>
														<? } else { ?>
															<button type="button" class="btn btn-sm btn-primary" onclick="user_pay_load(<?=$pago['Id']?>);">Cargar comprobante</button>
															<button type="button" class="btn btn-sm btn-danger" onclick="user_pay_cancel(<?=$pago['Id']?>);"><i class="fa fa-times"></i></button>
														<? } ?>
													</td>
												</tr>
											<? } ?>
										</table>
									</div>

									<div class="pagos-list d-block d-md-none">
										
										<? foreach($pagos as $pago){ ?>
											<?

											$filepath = $uplpath."comprobantes/".md5($pago['Id']).".jpg";
											$namefile = md5($pago['Id']).".jpg";
											$file = $upl."comprobantes/".$namefile;

											?>
											<div class="pagos-item">
												<div class="f18 lh22 marB5"><?=campoRegById("cursos", $pago['cursoID'], "nombre")?></div>
												<div>-- <span class="bold f14">Medio de pago:</span> <?=$pago['medio']?></div>
												<div>-- <span class="bold f14">Estado: </span> <?=$estados[$pago['estado']]?></div>
												<div class="marT10">
													<? if($pago['estado']==2){ ?>
														<a href="<?=$file?>" download><i class="fa fa-download"></i> Descargar</a>
													<? } else { ?>
														<a href="javascript:;" class="btn btn-sm btn-primary marR5" onclick="user_pay_load(<?=$pago['Id']?>);">Cargar comprobante</a>
														<a href="javascript:;" class="btn btn-sm btn-danger" onclick="user_pay_cancel(<?=$pago['Id']?>);">Cancelar pago</a>
													<? } ?>
												</div>
											</div>
										<? } ?>

									</div>


								<? } ?>

							</div>

						</div>
						
					</div>
				</div>

			</div>
		</div>
		
	</div>

</section>