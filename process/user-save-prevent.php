<?

include("../config/config.php");

if(empty($pow_post['userID'])){
	$usuario = $_SESSION['user_learn'];
} else {
	$usuario = $pow_post['userID'];
}

$campos = array(
	"lugar",
	"fecha",
	"certificado",
	"lugar_aplicacion",
	"edad_nivel",
	"reporte",
	"revelacion",
	"explicacion"
);

$valores = array(
	$pow_post['lugar'],
	$pow_post['fecha'],
	$pow_post['certificado'],
	$pow_post['lugar_aplicacion'],
	$pow_post['edad_nivel'],
	$pow_post['reporte'],
	$pow_post['revelacion'],
	$pow_post['explicacion']
);

if(updateRegBy("userID", $usuario, "users_preventores", $campos, $valores)){

	echo "ok";

} else {

	echo "err";

}

?>