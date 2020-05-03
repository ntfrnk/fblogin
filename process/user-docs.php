<?

include("../config/config.php");

$sql = "Select * from pow_users as u, pow_users_perfil as p
		where u.Id=p.userID and u.Id='".$pow_post['Id']."'";
$users = query($sql);
foreach($users as $user);

$uplpath = $pow_root."upload/";
$upl = $pow_base."upload/";

?>

<div class="marT20 legajo docs">

	<div class="padT0 padB20">
		<h4 class="f22 text-info"><?=$user['nombre']?> <?=$user['apellido']?></h4> 
	</div>

	<div class="padTB10">

		<strong>Identificación:</strong>
		<div class="lh22">
			<?

			$filepath0 = $uplpath."identificacion/".md5($pow_post['Id']).".pdf";
			$filepath1 = $uplpath."identificacion/".md5($pow_post['Id']).".jpg";
			$filepath2 = $uplpath."identificacion/".md5($pow_post['Id']).".jpeg";
			$filepath3 = $uplpath."identificacion/".md5($pow_post['Id']).".png";

			$namefile = md5($pow_post['Id']);

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
				echo '<b>Frente:</b> <a href="'.$file.'" class="text-info" download>[ <i class="fa fa-download f14"></i> Descargar el archivo ]</a>';
			} else {
				echo "<b>Frente:</b> Información faltante.";
			}

			unset($f);



			$filepath0 = $uplpath."identificacion/".md5($pow_post['Id'])."2.pdf";
			$filepath1 = $uplpath."identificacion/".md5($pow_post['Id'])."2.jpg";
			$filepath2 = $uplpath."identificacion/".md5($pow_post['Id'])."2.jpeg";
			$filepath3 = $uplpath."identificacion/".md5($pow_post['Id'])."2.png";

			$namefile = md5($pow_post['Id'])."2";

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
				echo '<br><b>Dorso:</b> <a href="'.$file.'" class="text-info" download>[ <i class="fa fa-download f14"></i> Descargar el archivo ]</a>';
			} else {
				echo "<br><b>Dorso:</b> Información faltante <small>(o está en el mismo archivo que el frente)</small>";
			}

			unset($f);

			?>
		</div>

	</div>

	<div class="padTB10 lh16">

		<strong>Declaración Jurada:</strong> <br>
		
		<?

		$filepath0 = $uplpath."ddjj/".md5($pow_post['Id']).".pdf";
		$filepath1 = $uplpath."ddjj/".md5($pow_post['Id']).".jpg";
		$filepath2 = $uplpath."ddjj/".md5($pow_post['Id']).".jpeg";
		$filepath3 = $uplpath."ddjj/".md5($pow_post['Id']).".png";

		$namefile = md5($pow_post['Id']);

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
			echo '<a href="'.$file.'" class="text-info" download>[ <i class="fa fa-download f14"></i> Descargar el archivo ]</a>';
		} else {
			echo "Información faltante.";
		}

		unset($f);

		?>

	</div>

	<div class="padTB10 lh16">

		<strong>Video de presentación:</strong> <br>
		
		<?

		$filepath0 = $uplpath."video/".md5($pow_post['Id']).".mp4";
		$filepath1 = $uplpath."video/".md5($pow_post['Id']).".webm";
		$filepath2 = $uplpath."video/".md5($pow_post['Id']).".mkv";

		$namefile = md5($pow_post['Id']);

		if(file_exists($filepath0) && !is_dir($filepath0)){
			$namefile .= ".mp4";
			$f = 1;
		} elseif(file_exists($filepath1) && !is_dir($filepath1)){
			$namefile .= ".webm";
			$f = 1;
		} elseif(file_exists($filepath2) && !is_dir($filepath2)){
			$namefile .= ".nkv";
			$f = 1;
		}
		
		$file = $upl."video/".$namefile;

		if($f==1){
			echo '<a href="'.$file.'" class="text-info" download>[ <i class="fa fa-download f14"></i> Descargar el archivo ]</a>';
		} else {
			echo "Información faltante.";
		}

		unset($f);

		?>

	</div>

	<div class="padTB10 lh16">

		<strong>Certificado de antecedentes penales:</strong><br>
		
		<?

		$filepath0 = $uplpath."antecedentes/".md5($pow_post['Id']).".pdf";
		$filepath1 = $uplpath."antecedentes/".md5($pow_post['Id']).".jpg";
		$filepath2 = $uplpath."antecedentes/".md5($pow_post['Id']).".jpeg";
		$filepath3 = $uplpath."antecedentes/".md5($pow_post['Id']).".png";

		$namefile = md5($pow_post['Id']);

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
			echo '<a href="'.$file.'" class="text-info" download>[ <i class="fa fa-download f14"></i> Descargar el archivo ]</a>';
		} else {
			echo "Información faltante.";
		}

		unset($f);

		?>

	</div>

	<div class="form-group marT25 padB20 align-center">
		<? if($user['documentos']==0){ ?>
			<a href="javascript:;" onclick="user_confirm(<?=$pow_post['Id']?>, 'documentos');" class="btn btn-success"><i class="fa fa-check"></i> Aprobar documentación</a>
		<? } else { ?>
			<p class="text-success">
				<i class="fa fa-check"></i> Documentación aprobada 
				<a href="javascript:;" onclick="user_confirm(<?=$pow_post['Id']?>, 'documentos', 1);" class="btn btn-sm btn-outline-danger marL20">¿Revocar?</a>
			</p>
		<? } ?>
	</div>

</div>