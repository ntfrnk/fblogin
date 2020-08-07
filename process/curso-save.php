<?

include("../config/config.php");

$camposU = array("nombre", "descripcion", "costo", "codigo_paypal", "codigo_mp", "active");
$valoresU = array($pow_post['nombre'], $pow_post['descripcion'], $pow_post['costo'], $pow_post['codigo_paypal'], $pow_post['codigo_mp'], 1);

if(!empty($pow_post['Id'])){

	if(updateReg($pow_post['Id'], "cursos", $camposU, $valoresU)){

		$_SESSION['guardado'] = "ok";
		echo "ok";

	} else {

		echo "err";

	}

} else {

	if(insertReg("cursos", $camposU, $valoresU)){

		$_SESSION['guardado'] = "ok";
		echo "ok";

	} else {

		echo "err";

	}

}

?>