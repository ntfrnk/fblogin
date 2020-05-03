<?

include("../config/config.php");

if(deleteRegMulti("users_cursos", array("cursoID", "userID"), array($pow_post['cursoID'], $pow_post['userID']))){

	echo "ok";

} else {

	echo "error";

}

?>