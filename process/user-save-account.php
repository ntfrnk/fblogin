<?

include("../config/config.php");

if(empty($pow_post['userID'])){
	$usuario = $_SESSION['user_learn'];
} else {
	$usuario = $pow_post['userID'];
}

$campos = array("email");
$valores = array($pow_post['email']);

if(!empty($pow_post['pass'])){
	array_push($campos, "pass");
	array_push($valores, encrypt($pow_post['pass']));
}

if(updateReg($usuario, "users", $campos, $valores)){

	echo "ok";

} else {

	echo "err";

}

?>