<?

include("../config/config.php");

// Info para el video

$path_upload = "../upload/placa/";

// Fin de info video

$inicio = date_create($pow_post['inicio']);
$final = date_create($pow_post['final']);

$camposU = array("titulo", "video", "inicio", "final");
$valoresU = array($pow_post['titulo'], $pow_post['video'], date_format($inicio, 'Y-m-d'), date_format($final, 'Y-m-d'));

if(!empty($pow_post['Id'])){

	$idreg = $pow_post['Id'];

	if(updateReg($idreg, "cursos_clases", $camposU, $valoresU)){

		$_SESSION['guardado'] = "ok";

		// Si viene un archivo para subir
		if(!empty($_FILES['placa']['name'])){
			$nombre_video = $path_upload.md5($idreg).".jpg";
			if(file_exists($nombre_video) and !is_dir($nombre_video)){
				unlink($nombre_video);
			}
			if(is_uploaded_file($_FILES['placa']['tmp_name'])) {
				copy($_FILES['placa']['tmp_name'],$nombre_video);
			}
		}

	}

} else {

	array_push($camposU, "cursoID", "active");
	array_push($valoresU, $pow_post['cursoID'], 1);

	if(insertReg("cursos_clases", $camposU, $valoresU)){

		$_SESSION['guardado'] = "ok";
		$idreg = mysql_insert_id();

		// Si viene un archivo para subir
		if(count($_FILES)!=0){
			$nombre_video = $path_upload.md5($idreg).".jpg";
			updateReg($idreg, "cursos_clases", array("placa"), array(md5($idreg).".jpg"));
			if(is_uploaded_file($_FILES['placa']['tmp_name'])) {
				copy($_FILES['placa']['tmp_name'],$nombre_video);
			}
		}

	}

}


header("Location: ".$pow_base."gestion/clases/".$pow_post['cursoID']."/")


?>