<?

include("../config/config.php");

foreach(regBy("users", "email", $pow_post['email']) as $user);

if(count($user)==0){

	$code = mt_rand(100000,999999);

	$camposU = array("email", "pass", "active", "created", "email_ok", "email_code");
	$valoresU = array($pow_post['email'], encrypt($pow_post['pass']), 1, date('Y-m-d H:i:s'), 1, $code);

	if(insertReg("users", $camposU, $valoresU)){

		$camposP = array("nombre", "apellido", "userID");
		$valoresP = array($pow_post['nombre'], $pow_post['apellido'], mysql_insert_id());

		$camposD = array("userID");
		$valoresD = array(mysql_insert_id());

		$camposPr = array("userID");
		$valoresPr = array(mysql_insert_id());

		if(insertReg("users_perfil", $camposP, $valoresP) and insertReg("users_docs", $camposD, $valoresD) and insertReg("users_preventores", $camposPr, $valoresPr)){

			$_SESSION['registro'] = "ok";
			$_SESSION['email_code'] = $pow_post['email'];
			echo "ok";

		} else {

			echo "err2";

		}

	} else {
		echo "err";
	}

} else {

	echo "yala";

}

?>