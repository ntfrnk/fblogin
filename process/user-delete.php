<?

include("../config/config.php");

if($pow_post['Id']!=$_SESSION['user_learn']){

	if(deleteReg("users", $pow_post['Id'])){

		deleteRegBy("users_docs", "userID",$pow_post['Id']);
		deleteRegBy("users_perfil", "userID",$pow_post['Id']);

		echo "ok";
		$_SESSION['eliminado'] = 1;

	} else {

		echo "error";

	}

} else {

	echo "auto";

}

?>