<?

include("../config/config.php");

if($pow_post['quizedit']!=1){

	$fields = array("userID","claseID","estado");
	$values = array($_SESSION['user_learn'],$pow_post['claseID'],0);

	insertReg("users_tareas", $fields, $values);

	$n = count($_POST['respuestas']);

	foreach($_POST['respuestas'] as $key => $respuesta){

		$campos = array("preguntaID", "userID", "respuesta", "claseID");
		$valores = array($key, $_SESSION['user_learn'], $respuesta, $_POST['claseID']);

		if(insertReg("users_respuestas", $campos, $valores)){

			header("Location: ".$pow_base."cursos/class/".$_POST['claseID']."/");

		}

	}

} else {

	foreach($_POST['respuestas'] as $key => $respuesta){

		$wcampos = array("userID", "claseID", "preguntaID");
		$wvalores = array($_SESSION['user_learn'], $_POST['claseID'], $key);

		if(updateRegByMulti("users_respuestas", $wcampos, $wvalores, "respuesta", $respuesta)){

			header("Location: ".$pow_base."cursos/class/".$_POST['claseID']."/");

		}

	}

}

?>