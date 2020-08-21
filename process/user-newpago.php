<?

include("../config/config.php");

$campos = array("userID", "cursoID", "medio", "estado");
$valores = array($pow_post['userID'], $pow_post['cursoID'], $pow_post['medio'], $pow_post['estado']);

if(insertReg("users_pagos", $campos, $valores)){

	echo "ok";

} else {

	echo "error";

}

?>