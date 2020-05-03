<?

include("../config/config.php");

if($pow_post['revocar']!=1){
	$newval = 1;
} else {
	$newval = 0;
}

if(updateReg($pow_post['Id'], "users", array($pow_post['tipo']), array($newval))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>