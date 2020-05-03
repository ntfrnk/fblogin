<?

include("../config/config.php");

$campos = array("pass");
$valores = array(encrypt($pow_post['pass']));

if(updateReg($pow_post['Id'], "users", $campos, $valores)){

	echo "ok";

} else {

	echo "err";

}

?>