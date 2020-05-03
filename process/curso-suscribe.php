<?

include("../config/config.php");

$cursos_tomados = listReg("users_cursos", "where userID='".$pow_post['userID']."' and cursoID='".$pow_post['cursoID']."'", "", "rand()");

if(count($cursos_tomados)!=1){

	$campos = array("userID", "cursoID", "estado");
	$valores = array($pow_post['userID'], $pow_post['cursoID'], 1);

	if(insertReg("users_cursos", $campos, $valores)){

		echo "ok";

	} else {

		echo "err";

	}

} else {

	echo "yala";

}

?>