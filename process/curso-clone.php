<?

include("../config/config.php");

$path_placas = "../upload/placa/";
$path_adjuntos = "../upload/material/";

foreach(regById("cursos", $pow_post['Id']) as $curso);

$campos = array("nombre", "codigo_paypal", "descripcion", "codigo_mp");
$valores = array("[COPIA] ".$curso['nombre'], $curso['codigo_paypal'], $curso['descripcion'], $curso['codigo_mp']);

if(insertReg("cursos", $campos, $valores)){

	$cursoID = mysql_insert_id();

	$clases = listReg("cursos_clases", "where cursoID='".$curso['Id']."'", "", "Id,asc");

	foreach($clases as $clase){

		$camposClase = array("cursoID","titulo","video","placa","inicio","final","orden","active");
		$valoresClase = array($cursoID, $clase['titulo'], $clase['video'], $clase['placa'], $clase['inicio'], $clase['final'], $clase['orden'], $clase['active']);

		if(insertReg("cursos_clases", $camposClase, $valoresClase)){

			$claseID = mysql_insert_id();

			// Copio la placa

			$placa = $path_placas.md5($clase['Id']).".jpg";
			$new_placa = $path_placas.md5($claseID).".jpg";

			if(file_exists($placa) && !is_dir($placa)){
				copy($placa, $new_placa);
			}

			$tareas = listReg("cursos_clases_preguntas", "where claseID='".$clase['Id']."'");

			foreach($tareas as $tarea){

				$camposTarea = array("claseID", "pregunta", "orden");
				$valoresTarea = array($claseID, $tarea['pregunta'], $tarea['orden']);

				insertReg("cursos_clases_preguntas", $camposTarea, $valoresTarea);

			}

			$adjuntos = listReg("cursos_clases_adjuntos", "where claseID='".$clase['Id']."'");

			foreach($adjuntos as $adjunto){

				// Copio el archivo

				$archivo = $path_adjuntos.$clase['Id']."_".$adjunto['archivo'];
				$new_archivo = $path_adjuntos.$claseID."_".$adjunto['archivo'];

				if(file_exists($archivo) && !is_dir($archivo)){
					copy($archivo, $new_archivo);
				}

				$camposAdjunto = array("claseID", "archivo");
				$valoresAdjunto = array($claseID, $adjunto['archivo']);

				insertReg("cursos_clases_adjuntos", $camposAdjunto, $valoresAdjunto);

			}

		} else {

			echo "error";

		}

	}

	echo "ok";

} else {

	echo "error";

}

?>