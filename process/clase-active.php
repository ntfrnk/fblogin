<?

include("../config/config.php");

foreach(regById("cursos_clases", $pow_post['Id']) as $clase);

if($clase['active']==1){
	$new_active = 0;
} else {
	$new_active = 1;
}

if(updateReg($pow_post['Id'], "cursos_clases", array("active"), array($new_active))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>