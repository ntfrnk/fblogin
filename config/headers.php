<?

$seccSinLogin = array("login", "registro", "recover");

if(empty($_SESSION['user_learn'])) {

	if(!in_array($pow_get['seccion'], $seccSinLogin) && $pow_get['seccion']!="faqs"){
		header("Location: ".$pow_base."login/");
	}

} else {

	if(in_array($pow_get['seccion'], $seccSinLogin)){
		header("Location: ".$pow_base."home/");
	}

	if($pow_get['seccion']=="logout"){
		unset($_SESSION['user_learn']);
		unset($_SESSION['admin_learn']);
		unset($_SESSION['inscripcion']);
		header("Location: ".$pow_base."login/");
	}

}

if($_SESSION['user_learn']){

	$insc = inscription();

	if($insc==false){

		$except = array('inscripcion', 'inscripcion-second', 'inscripcion-third', 'inscripcion-fourth', 'inscripcion-fifth', 'inscripcion-sixth', 'all', 'detail', '');

		$goto = dataEmpty();

		if($goto && !in_array($pow_get['vista'], $except)){

			$_SESSION['faltan'] = 1;

			if($goto == 'personal' && $pow_get['vista'] != 'data-personal'){
				header("Location: ".$pow_base."config/data-personal/");
			} elseif($goto == 'contacto' && $pow_get['vista'] != 'data-contacto'){
				header("Location: ".$pow_base."config/data-contacto/");
			} elseif($goto == 'perfil' && $pow_get['vista'] != 'data-perfil'){
				header("Location: ".$pow_base."config/data-perfil/");
			} elseif($goto == 'referencia' && $pow_get['vista'] != 'data-referencia'){
				header("Location: ".$pow_base."config/data-referencia/");
			}

		} else {

			unset($_SESSION['faltan']);

		}

	} else {

		$pasos = array(
			'2' => 'second',
			'3' => 'third',
			'4' => 'fourth',
			'5' => 'fifth',
			'6' => 'sixth',
			'7' => 'procesando',
			'8' => 'final'
		);

		if($pow_get['seccion']!="cursos" && $pow_get['vista']!=$pasos[$insc]){
			header("Location: ".$pow_base."cursos/inscripcion-".$pasos[$insc]."/");
		}

	}

}

?>