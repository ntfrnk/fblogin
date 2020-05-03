<?

include("../config/config.php");

if(empty($pow_post['userID'])){
	$usID = $_SESSION['user_learn'];
} else {
	$usID = $pow_post['userID'];
}

if($pow_post['loadtype']=="ddjj"){
	$path_upload = "../upload/ddjj/";
} elseif($pow_post['loadtype']=="pic"){
	$path_upload = "../upload/foto/";
} elseif($pow_post['loadtype']=="video"){
	$path_upload = "../upload/video/";
} elseif($pow_post['loadtype']=="id"){
	$path_upload = "../upload/identificacion/";
} elseif($pow_post['loadtype']=="id2"){
	$path_upload = "../upload/identificacion/";
} elseif($pow_post['loadtype']=="ant"){
	$path_upload = "../upload/antecedentes/";
} elseif($pow_post['loadtype']=="comp"){
	$path_upload = "../upload/comprobantes/";
}

$ext = strrchr($_FILES['load']['name'], ".");
$new_name = $path_upload.md5($usID);

// Si es ID reviso que sea frente o dorso
if($pow_post['loadtype']=="id2"){
	$path_upload = "../upload/identificacion/";
	$new_name .= "2";
}

// Agrego la extensión al nombre del archivo
$new_name .= strtolower($ext);

if(is_uploaded_file($_FILES['load']['tmp_name'])) {
	
	// Si es un comprobante actualizo el estado del pago
	if($pow_post['loadtype']=="comp"){
		$new_name = $path_upload.md5($pow_post['pagoID']).$ext;
		updateReg($pow_post['pagoID'], "users_pagos", array("estado"), array(2));
	}
	copy($_FILES['load']['tmp_name'],$new_name);
	
}

$_SESSION['upldoc'] = 1;

if(!empty($pow_post['loadtemp'])){

	if(empty($pow_post['userID'])){
		header("Location: ".$pow_base."config/pagos/");
	} else {
		header("Location: ".$pow_base."config/pagos/".$pow_post['userID']."/");
	}

} else {

	if(empty($pow_post['userID'])){
		header("Location: ".$pow_base."config/documentos/");
	} else {
		header("Location: ".$pow_base."config/documentos/".$pow_post['userID']."/");
	}

}

?>