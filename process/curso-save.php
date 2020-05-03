<?

include("../config/config.php");

$date = date_create($pow_post['fecha']);

$camposU = array("nombre", "descripcion", "costo", "fecha", "active");
$valoresU = array($pow_post['nombre'], $pow_post['descripcion'], $pow_post['costo'], date_format($date, 'Y-m-d'), 1);

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