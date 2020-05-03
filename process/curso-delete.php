<?

include("../config/config.php");

$path_placas = "../upload/placa/";
$path_adjuntos = "../upload/material/";

$cursoID = $pow_post['Id'];

if(deleteReg("cursos", $cursoID)){

	$clases = listReg("cursos_clases", "where cursoID='".$cursoID."'", "", "rand()");

	foreach($clases as $clase){

		$claseID = $clase['Id'];

		deleteReg("cursos_clases", $clase['Id']);

		$placa = $path_placas.md5($claseID).".jpg";

		if(file_exists($placa) && !is_dir($placa)){
			unlink($placa);
		}

		$tareas = listReg("cursos_clases_preguntas", "where claseID='".$claseID."'");

		foreach($tareas as $tarea){

			deleteReg("cursos_clases_preguntas", $tarea['Id']);

		}

		$adjuntos = listReg("cursos_clases_adjuntos", "where claseID='".$claseID."'");

		foreach($adjuntos as $adjunto){

			deleteReg("cursos_clases_adjuntos", $adjunto['Id']);

			$archivo = $path_adjuntos.$clase['Id']."_".$adjunto['archivo'];

			if(file_exists($archivo) && !is_dir($archivo)){
				unlink($archivo);
			}

		}

	}

	echo "ok";
	$_SESSION['eliminado'] = 1;

} else {

	echo "error";

}

?>