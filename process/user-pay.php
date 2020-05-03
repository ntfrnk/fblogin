<?

include("../config/config.php");

if(empty($pow_post['userID'])){
	$usuario = $_SESSION['user_learn'];
} else {
	$usuario = $pow_post['userID'];
}

$campos = array("userID", "cursoID", "medio", "estado");
$valores = array($usuario, $pow_post['cursoID'], $pow_post['medio'], 1);

if(insertReg("users_pagos", $campos, $valores)){

	echo "ok";

} else {

	echo "error";

}

?>