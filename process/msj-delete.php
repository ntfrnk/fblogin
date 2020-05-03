<?

include("../config/config.php");

if(deleteReg("mensajes", $pow_post['Id'])){

	echo "ok";

} else {

	echo "error";

}

?>