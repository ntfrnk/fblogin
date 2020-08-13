<?

function mensajes(){
	return $mensajes = listReg("mensajes", " where destinatarioID='".$_SESSION['user_learn']."'", "", "leido,asc+enviado,desc");
}

function cant_mensajes(){
	$mensajes = listReg("mensajes", " where destinatarioID='".$_SESSION['user_learn']."' and leido='0000-00-00 00:00:00'");
	if(count($mensajes)!=0){
		return count($mensajes);
	} else {
		return false;
	}
}

function cursado($userID){
	foreach(regBy("users_cursos", "userID", $userID) as $user){
		$states[] = $user['estado'];
	}
	if(in_array(1, $states)){
		return 1;
	} elseif(in_array(2, $states)){
		return 2;
	} else {
		return 0;
	}
}

function cursando($userID, $cursoID){
	$cursando = listReg("users_cursos", "where userID='".$userID."' and cursoID='".$cursoID."'", "", "rand()");
	if(count($cursando)!=0){
		return true;
	} else {
		return false;
	}
}

function cursando_estado($userID, $cursoID){
	$cursando = listReg("users_cursos", "where userID='".$userID."' and cursoID='".$cursoID."'", "1,0", "rand()");
	if(count($cursando)==0){
		return false;
	} else {
		foreach($cursando as $cursado);
		return $cursado['estado'];
	}
}

function tareas_pendientes($userID){
	$tareas = regBy("users_tareas", "userID", $userID);
	if(count($tareas)!=0){
		foreach($tareas as $tarea){
			if($tarea['estado']==0){
				$pend += 1;
			} elseif($tarea['estado']==1){
				$corr += 1;
			} elseif($tarea['estado']==2){
				$taok += 1;
			}
		}
		if(count($tareas)==$taok){
			return 2;
		} else {
			if($pend!=0){
				return 1;
			} else {
				return 0;
			}
		}
	} else {
		return 0;
	}
}

function pagos_pendientes($userID){
	$pagos = listReg("users_pagos", "where userID='".$userID."' and estado=1");
	if(count($pagos)!=0){
		return true;
	} else {
		return false;
	}
}

function pagos_ok($userID){
	$pagos = listReg("users_pagos", "where userID='".$userID."'");
	$n = count($pagos);
	$p = 0;
	if($pagos!=0){
		foreach($pagos as $pago){
			if($pago['estado']==2){
				$p++;
			}
		}
		if($n==$p){
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function buscalinks($texto){
	$link = strstr($texto, "http");
	$pos = strpos($link, " ");
	$link = substr($link, $pos);
	return str_replace($link, '<a href="'.$link.'" target="_blank">'.$link.'</a>', $texto);
}

function faltanDatos($userID, $ver){
	$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where u.Id=p.userID and u.Id='".$userID."'";
	$usuario = query($sql);
	foreach($usuario as $user);

	$columnas = array(
		"apellido" => "personal",
		"nombre" => "personal",
		"email" => "E-mail",
		"nacimiento" => "personal",
		"dni" => "personal",
		"estado_civil" => "personal",
		"pais" => "contacto",
		"provincia" => "contacto",
		"ciudad" => "contacto",
		"direccion" => "contacto",
		"cp" => "contacto",
		"celular" => "contacto",
		"nacionalidad" => "personal",
		"religion" => "perfil",
		"proaborto" => "perfil",
		"trabajo" => "perfil",
		"referencia1_nombre" => "referencia",
		"referencia1_email" => "referencia",
		"referencia1_celular" => "referencia",
		"referencia2_nombre" => "referencia",
		"referencia2_email" => "referencia",
		"referencia2_celular" => "referencia",
		"razones" => "perfil"
	);
	$campos_vacios = "";
	foreach($columnas as $key => $col){
		if(empty($user[$key])){
			$campos_vacios++;
			$campos_faltantes_nombre[] = $col;
			$campos_faltantes_key[] = $key;
		}
	}
	if(empty($campos_vacios)){
		return false;
	} else {
		if($ver==1){
			return $campos_faltantes_nombre;
		} elseif($ver==2){
			return $campos_faltantes_key;
		} else {
			return true;
		}
	}
}


function dataEmpty(){

	$faltan = faltanDatos($_SESSION['user_learn'], 1);

	if(in_array('personal', $faltan)){
		$go = 'personal';
	} elseif(in_array('contacto', $faltan)){
		$go = 'contacto';
	}  elseif(in_array('perfil', $faltan)){
		$go = 'perfil';
	}  elseif(in_array('referencia', $faltan)){
		$go = 'referencia';
	}

	return $go;

}


function video_player($url){
	if(strstr($url, "https://mega.nz/#!")){
		$data[0] = "default";
		$data[1] = str_replace("https://mega.nz/#!", "", $url);
	} elseif(strstr($url, "https://mega.nz/file/")) {
		$data[0] = "file";
		$data[1] = str_replace("https://mega.nz/file/", "", $url);
	} else {
		$data[0] = "empty";
		$data[1] = str_replace("https://mega.nz/", "", $url);
	}
	echo '<span id="typevideo">'.$data[0].'</span>'."\n";
	echo '<span id="codevideo">'.$data[1].'</span>';
}


function yala($userID, $claseID){
	$reg = listReg('users_clases_vistas', 'where userID='.$userID.' and claseID='.$claseID, '1,0', 'rand()');
	if(count($reg)!=0){
		return true;
	} else {
		return false;
	}
}


function inscription(){
	foreach(listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and step not in('9','1','0')", '1,0', 'rand()') as $insc);
	$step = false;
	if(count($insc)!=0){
		$step = $insc['step'];
	}
	return $step;
}


?>