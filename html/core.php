<?

$verVars = 0;

if($verVars==1){
	echo "<pre>";
	print_r($pow_get);
	echo "</pre>";
}

if(empty($pow_get['seccion']) || $pow_get['seccion']=="home"){

	if($_SESSION['admin_learn']!=1){

		$load_template = "home/";

	} else {

		$load_template = "gestion/";

	}

	if(empty($pow_get['vista'])){

		$load_template.= "home.php";

	}

} else {

	$load_template = $pow_get['seccion']."/";

	if(empty($pow_get['vista'])){

		$load_template.= "home.php";

	} else {

		$load_template.= $pow_get['vista'].".php";

	}

}

$load_template = "html/".$load_template;
include($load_template);

?>