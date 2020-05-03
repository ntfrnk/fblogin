<?

include("../config/config.php");

if(empty($pow_post['userID'])){
	$usuario = $_SESSION['user_learn'];
} else {
	$usuario = $pow_post['userID'];
}

$campos = array(
	"nombre",
	"apellido",
	"nacimiento",
	"nacionalidad",
	"dni",
	"estado_civil",
	"celular",
	"fijo",
	"direccion",
	"cp",
	"ciudad",
	"provincia",
	"pais",
	"religion",
	"proaborto",
	"tratamiento",
	"medicacion",
	"trabajo",
	"referencia1_nombre",
	"referencia1_email",
	"referencia1_celular",
	"referencia2_nombre",
	"referencia2_email",
	"referencia2_celular",
	"razones",
	"concepcion"
);

$valores = array(
	$pow_post['nombre'],
	$pow_post['apellido'],
	$pow_post['nacimiento'],
	$pow_post['nacionalidad'],
	$pow_post['dni'],
	$pow_post['estado_civil'],
	$pow_post['celular'],
	$pow_post['fijo'],
	$pow_post['direccion'],
	$pow_post['cp'],
	$pow_post['ciudad'],
	$pow_post['provincia'],
	$pow_post['pais'],
	$pow_post['religion'],
	$pow_post['proaborto'],
	$pow_post['tratamiento'],
	$pow_post['medicacion'],
	$pow_post['trabajo'],
	$pow_post['referencia1_nombre'],
	$pow_post['referencia1_email'],
	$pow_post['referencia1_celular'],
	$pow_post['referencia2_nombre'],
	$pow_post['referencia2_email'],
	$pow_post['referencia2_celular'],
	$pow_post['razones'],
	$pow_post['concepcion']
);


if(updateRegBy("userID", $usuario, "users_perfil", $campos, $valores)){

	if(!empty($pow_post['userID'])){
	
		echo "okuser";

	} else {
	
		echo "ok";

	}

} else {

	echo "err";

}


?>