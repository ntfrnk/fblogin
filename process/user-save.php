<?

include("../config/config.php");

$camposU = array("email");
$valoresU = array($pow_post['email']);

$camposP = array("nombre", "apellido");
$valoresP = array($pow_post['nombre'], $pow_post['apellido']);

$camposD = array("userID");
$valoresD = array();

$camposPr = array("userID");
$valoresPr = array();

if(!empty($pow_post['Id'])){

	if(updateReg($pow_post['Id'], "users", $camposU, $valoresU)){

		if(updateRegBy("userID", $pow_post['Id'], "users_perfil", $camposP, $valoresP)){

			$_SESSION['guardado'] = "ok";
			echo "ok";

		} else {

			echo "err";

		}

	} else {
		echo "err";
	}

} else {

	array_push($camposU, "pass", "active");
	array_push($valoresU, encrypt($pow_post['pass']), 1);

	if(insertReg("users", $camposU, $valoresU)){

		array_push($camposP, "userID");
		array_push($valoresP, mysql_insert_id());
		array_push($valoresD, mysql_insert_id());
		array_push($valoresPr, mysql_insert_id());

		if(insertReg("users_perfil", $camposP, $valoresP) && insertReg("users_docs", $camposD, $valoresD) && insertReg("users_preventores", $camposPr, $valoresPr)){

			$_SESSION['guardado'] = "ok";
			echo "ok";

		} else {

			echo "err";

		}

	} else {
		echo "err";
	}

}

?>