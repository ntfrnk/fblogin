<?

$seccSinLogin = array("login", "registro", "recover");

if(empty($_SESSION['user_learn'])) {

	if(!in_array($pow_get['seccion'], $seccSinLogin)){
		header("Location: ".$pow_base."login/");
	}

} else {

	if(in_array($pow_get['seccion'], $seccSinLogin)){
		header("Location: ".$pow_base."home/");
	}

	if($pow_get['seccion']=="logout"){
		$_SESSION['user_learn'] = "";
		$_SESSION['admin_learn'] = "";
		header("Location: ".$pow_base."login/");
	}

}

?>