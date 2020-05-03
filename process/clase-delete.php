<?

include("../config/config.php");

if(deleteReg("cursos_clases", $pow_post['Id'])){

	echo "ok";
	$_SESSION['eliminado'] = 1;

} else {

	echo "error";

}

?>