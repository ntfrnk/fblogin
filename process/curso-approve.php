<?

include("../config/config.php");

foreach(listReg("users_cursos", "where cursoID='".$pow_post['cursoID']."' and userID='".$pow_post['userID']."'", "", "rand()") as $curso);

if($curso['estado']==1){
	$new_active = 2;
} else {
	$new_active = 1;
}

if(updateRegByMulti("users_cursos", array("cursoID", "userID"), array($pow_post['cursoID'], $pow_post['userID']), "estado", $new_active)){

	echo "ok";

} else {

	echo "error";

}

?>