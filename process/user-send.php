<?

include("../config/config.php");

$campos = array("remitenteID", "destinatarioID", "mensaje", "enviado");
$valores = array($_SESSION['user_learn'], $pow_post['Id'], $pow_post['mensaje'], date('Y-m-d H:i:s'));

if(insertReg("mensajes", $campos, $valores)){

	echo "ok";
	$_SESSION['enviado'] = 1;

} else {

	echo "err";

}

?>