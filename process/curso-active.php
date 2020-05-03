<?

include("../config/config.php");

foreach(regById("cursos", $pow_post['Id']) as $curso);

if($curso['active']==1){
	$new_active = 0;
} else {
	$new_active = 1;
}

if(updateReg($pow_post['Id'], "cursos", array("active"), array($new_active))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>