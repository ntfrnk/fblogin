<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

// Preparo datos de tratamiento y medicación

if(empty($pow_post['tratamiento'])){
    $tratamiento = "No";
} else {
    $tratamiento = $pow_post['tratamiento'];
}

if(empty($pow_post['medicacion'])){
    $medicacion = "No";
} else {
    $medicacion = $pow_post['medicacion'];
}

// Presento datos para insert / update de declaración

$valores = array(
    'adiccion_sexual' => $pow_post['adiccion_sexual'],
    'tendencia_homosexual' => $pow_post['tendencia_homosexual'],
    'abusador' => $pow_post['abusador'],
    'acusado_abuso' => $pow_post['acusado_abuso'],
    'acosador' => $pow_post['acosador'],
    'acusado_acoso' => $pow_post['acusado_acoso'],
    'pornografia' => $pow_post['pornografia'],
    'aceptado' => $pow_post['aceptado']
);

// Preparo datos para update de perfil

$valores2 = array(
    'medicacion' => $medicacion,
    'tratamiento' => $tratamiento
);

// Preparo el dato para aprobar / rechazar inscripción

foreach($valores as $key => $valor){
    if($key!='aceptado'){
        $v += $valor;
    }    
}

foreach($valores2 as $valor){
    if(!empty($valor) && $valor!='No'){
        $v += 1;
    }
}

if($_SESSION['u']['perfil']['proaborto']=='A favor'){
    $v += 1;
}

// Pregunto si existe declaración

$dec = regBy("users_declaracion", "userID", $_SESSION['user_learn']);

// Realizo la inserción / actualización de datos

if(empty($dec)){

    $valores['userID'] = $_SESSION['user_learn'];
    
    _insertReg("users_declaracion", $valores);
    _updateRegBy("userID", $_SESSION['user_learn'], "users_perfil", $valores2);

} else {

    _updateRegBy("userID", $_SESSION['user_learn'], "users_declaration", $valores);
    _updateRegBy("userID", $_SESSION['user_learn'], "users_perfil", $valores2);

}

if($v != 0){
    
    include("mail/confirmar.php");
    include("send-mail.php");

    include("mail/pendiente.php");
    include("send-mail.php");

    _updateRegs("users_cursos", 
        array(
            'step' => 7
        ), 
        array(
            'userID' => $_SESSION['user_learn'], 
            'cursoID' => $_SESSION['inscripcion']
        )
    );

    header("Location: ".$pow_base."cursos/inscripcion-procesando/");

} else {

    _updateRegs("users_cursos", 
        array(
            'step' => 8
        ), 
        array(
            'userID' => $_SESSION['user_learn'], 
            'cursoID' => $_SESSION['inscripcion']
        )
    );

    header("Location: ".$pow_base."cursos/inscripcion-final/");

}

?>