<?

include("../config/config.php");

$usID = $_SESSION['user_learn'];

if($pow_post['tipo']=="ddjj"){
	$path_upload = "../upload/ddjj/";
} elseif($pow_post['tipo']=="foto"){
	$path_upload = "../upload/foto/";
} elseif($pow_post['tipo']=="video"){
	$path_upload = "../upload/video/";
} elseif($pow_post['tipo']=="identificacion"){
	$path_upload = "../upload/identificacion/";
} elseif($pow_post['tipo']=="antecedentes"){
	$path_upload = "../upload/antecedentes/";
}

$new_name = $path_upload.$pow_post['nombre'];

if(unlink($new_name)){
	echo "ok";
	$_SESSION['upldoc'] = 1;
} else {
	echo "err";
}

?>