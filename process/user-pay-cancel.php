<?

include("../config/config.php");

if(deleteReg("users_pagos", $pow_post['pagoID'])){

	echo "ok";

} else {

	echo "error";

}

?>