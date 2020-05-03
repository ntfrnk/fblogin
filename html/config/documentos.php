<?

if(empty($pow_get['Id'])){

	$sql = "Select * from pow_users as u where u.Id='".$_SESSION['user_learn']."'";
	$title = "Gestionar mis datos";
	$usuarioID = "";

} else {

	$sql = "Select * from pow_users as u where u.Id='".$pow_get['Id']."'";
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

$uplpath = $pow_root."upload/";
$upl = $pow_base."upload/";

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
				
				<div class="tab-pane fade show active" id="nav-docs" role="tabpanel" aria-labelledby="nav-docs-tab">
					<div class="form-wrapper form-border">

						<div class="marT20 legajo docs">

							<div class="hide">

								<form id="loader-ddjj" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadddjj" name="load" accept=".pdf,.jpg,.png">
									<input type="text" name="loadtype" value="ddjj">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

								<form id="loader-video" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadvideo" name="load" accept=".mp4">
									<input type="text" name="loadtype" value="video">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

								<form id="loader-id" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadid" name="load" accept=".jpg,.pdf,.jpeg,.png">
									<input type="text" name="loadtype" value="id">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

								<form id="loader-id2" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadid2" name="load" accept=".jpg,.pdf,.jpeg,.png">
									<input type="text" name="loadtype" value="id2">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

								<form id="loader-ant" action="process/file-load.php" method="post" enctype="multipart/form-data" class="formload">
									<input type="file" class="loadant" name="load" accept=".pdf,.jpg,.png">
									<input type="text" name="loadtype" value="ant">
									<? if(!empty($pow_get['Id'])){ ?>
										<input type="text" name="userID" value="<?=$pow_get['Id']?>">
									<? } ?>
								</form>

							</div>

							<div class="padTB5">
								<strong>Declaración jurada: (<a href="javascript:;" onclick="open_alert('Ésta declaración Jurada es realizada acorde a nuestro ideario institucional y a los lineamientos sobre el perfil del preventor.');">?</a>) <small>(<a href="upload/ddjj/declaracion-jurada-epasi.pdf" download>Descargar nota</a>)</small></strong>
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

								unset($f);

								?>
							</div>

							<div class="padTB5">
								<strong>Certificado de antecedentes penales <small>(o equivalente en su país)</small>: (<a href="javascript:;" onclick="open_alert('Uno de los requisitos para formarse como preventor es la presentación del Certificado de Antecedentes Penales (Certificado de Buena Conducta) emitido por la policía. Tenga a bien solicitarlo con tiempo y adjuntarlo en este formulario.')">?</a>)</strong>
								<?

								$filepath0 = $uplpath."antecedentes/".md5($user['Id']).".pdf";
								$filepath1 = $uplpath."antecedentes/".md5($user['Id']).".jpg";
								$filepath2 = $uplpath."antecedentes/".md5($user['Id']).".jpeg";
								$filepath3 = $uplpath."antecedentes/".md5($user['Id']).".png";
								
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

								$file = $upl."antecedentes/".$namefile;

								if($f==1){
									echo '<a href="'.$file.'" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar archivo</a> &nbsp; ';
									echo '<a href="javascript:;" onclick="deletefile(\''.$namefile.'\', \'antecedentes\')" class="btn btn-sm btn-danger" download><i class="fa fa-times"></i> Eliminar</a>';
								} else {
									echo '<button type="button" class="btn btn-sm btn-primary" onclick="$(\'.loadant\').trigger(\'click\');">Cargar archivo</button>';
								}

								unset($f);

								?>
							</div>

							<div class="padTB5">
								<strong>Video de presentación: (<a href="javascript:;" onclick="open_alert('Video en forma de entrevista personal. Por favor haga click en el link «Guía para el video», donde encontrará las indicaciones correspondientes.');">?</a>) <small><a href="javascript:;" onclick="open_alert2('Estimado/a, aquí le dejamos las preguntas que le servirán como guía para que usted filme su video, el mismo debe durar entre 3 y 5 minutos.<br><br>1) Nombre y Apellido<br>2) Edad<br>3) Ocupación o Profesión<br>4) ¿Cómo está compuesta su familia?<br>5) ¿Por qué razón eligió tomar este curso?<br>6) ¿Cómo te enteraste del curso?<br>7) ¿Nos puede contar su experiencia de trabajar con niños? (si la tuvo).<br>8) Cuéntenos brevemente como fue su infancia.<br>9) Ante algún inconveniente, ¿a quién podríamos dirigirnos? ¿Quién puede responder por usted?<br>10) ¿Cuáles son las expectativas que tiene con respecto a este curso?');">Guía para el video</a></small></strong>
								<?

								$filepath = $uplpath."video/".md5($user['Id']).".mp4";
								$namefile = md5($user['Id']).".mp4";
								$file = $upl."video/".$namefile;

								if(file_exists($filepath) && !is_dir($filepath)){
									echo '<a href="'.$file.'" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar archivo</a> &nbsp; ';
									echo '<a href="javascript:;" onclick="deletefile(\''.$namefile.'\', \'video\')" class="btn btn-sm btn-danger" download><i class="fa fa-times"></i> Eliminar</a>';
								} else {
									echo '<button type="button" class="btn btn-sm btn-primary" onclick="$(\'.loadvideo\').trigger(\'click\');">Cargar archivo</button>';
								}

								?>
							</div>

							<div class="padTB5">
								<strong>Identificación oficial: <small>(DNI, Pasaporte, Cédula, etc; frente y dorso)</small></strong>
								<?

								$filepath0 = $uplpath."identificacion/".md5($user['Id']).".pdf";
								$filepath1 = $uplpath."identificacion/".md5($user['Id']).".jpg";
								$filepath2 = $uplpath."identificacion/".md5($user['Id']).".jpeg";
								$filepath3 = $uplpath."identificacion/".md5($user['Id']).".png";
								
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

								$file = $upl."identificacion/".$namefile;

								if($f==1){
									echo 'Frente: <a href="'.$file.'" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar archivo</a> &nbsp; ';
									echo '<a href="javascript:;" onclick="deletefile(\''.$namefile.'\', \'identificacion\')" class="btn btn-sm btn-danger" download><i class="fa fa-times"></i> Eliminar</a>';
								} else {
									echo 'Frente: <button type="button" class="btn btn-sm btn-primary" onclick="$(\'.loadid\').trigger(\'click\');">Cargar archivo</button>';
								}

								unset($f);

								?>
								<br>
								<?

								$filepath0 = $uplpath."identificacion/".md5($user['Id'])."2.pdf";
								$filepath1 = $uplpath."identificacion/".md5($user['Id'])."2.jpg";
								$filepath2 = $uplpath."identificacion/".md5($user['Id'])."2.jpeg";
								$filepath3 = $uplpath."identificacion/".md5($user['Id'])."2.png";
								
								$namefile = md5($user['Id'])."2";

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

								$file = $upl."identificacion/".$namefile;

								if($f==1){
									echo 'Dorso: <a href="'.$file.'" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Descargar archivo</a> &nbsp; ';
									echo '<a href="javascript:;" onclick="deletefile(\''.$namefile.'\', \'identificacion\')" class="btn btn-sm btn-danger" download><i class="fa fa-times"></i> Eliminar</a>';
								} else {
									echo 'Dorso: <button type="button" class="btn btn-sm btn-primary" onclick="$(\'.loadid2\').trigger(\'click\');">Cargar archivo</button>';
								}

								unset($f);

								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</section>