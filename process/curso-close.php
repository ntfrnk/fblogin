<?

include("../config/config.php");

foreach(regById("cursos", $pow_post['Id']) as $curso);

if($curso['cierre']==1){
	$new_state = 0;
} else {
	$new_state = 1;
}

if(updateReg($pow_post['Id'], "cursos", array("cierre"), array($new_state))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>