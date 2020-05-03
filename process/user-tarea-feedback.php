<?

include("../config/config.php");

$campos = array("claseID", "userID", "preguntaID");
$valores = array($pow_post['claseID'], $pow_post['userID'], $pow_post['preguntaID']);

if(updateRegByMulti("users_respuestas", $campos, $valores, "feedback", $pow_post['comentario'])){
	
	echo "ok";

} else {
	
	echo "err";
	
}

?>