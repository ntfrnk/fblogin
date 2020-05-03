<?

include("../config/config.php");

$campos = array("claseID", "userID", "preguntaID");
$valores = array($pow_post['claseID'], $pow_post['userID'], $pow_post['preguntaID']);

updateRegByMulti("users_respuestas", $campos, $valores, "estado", $pow_post['estado']);

// MODIFICO LA TABLA DE TAREAS POR USUARIO

$preguntas = listReg("cursos_clases_preguntas", "where claseID='".$pow_post['claseID']."'");
$cant_preguntas = count($preguntas);

$respuestas = listReg("users_respuestas", "where claseID='".$pow_post['claseID']."' and userID='".$pow_post['userID']."'");

foreach($respuestas as $respuesta){
	if($respuesta['estado']==0) {
		$no_calif++;
	} elseif ($respuesta['estado']==1) {
		$revision++;
	} else {
		$aprobada++;
	}
	$resps++;
}

echo $aprobada;

if($aprobada!=$cant_preguntas){
	$fields = array("claseID", "userID");
	$values = array($pow_post['claseID'], $pow_post['userID']);
	updateRegByMulti("users_tareas", $fields, $values, "estado", 1);
} else {
	$fields = array("claseID", "userID");
	$values = array($pow_post['claseID'], $pow_post['userID']);
	updateRegByMulti("users_tareas", $fields, $values, "estado", 2);
}

?>