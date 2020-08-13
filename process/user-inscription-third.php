<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

$valores = array(
    'religion' => $pow_post['religion'],
    'proaborto' => $pow_post['proaborto'],
    'trabajo' => $pow_post['trabajo'],
    'razones' => $pow_post['razones']
);

$_SESSION['valores'] = $valores;

if(_updateRegBy("userID", $_SESSION['user_learn'], "users_perfil", $valores)){
    
    unset($_SESSION['valores']);
    foreach(regBy("users_perfil", "userID", $_SESSION['user_learn']) as $perfil);
    $_SESSION['u']['perfil'] = $perfil;

    _updateRegs("users_cursos", 
        array(
            'step' => 4
        ), 
        array(
            'userID' => $_SESSION['user_learn'], 
            'cursoID' => $_SESSION['inscripcion']
        )
    );
    
    header("Location: ".$pow_base."cursos/inscripcion-fourth/");

} else {
    $_SESSION['resp'] = mysql_error();
    header("Location: ".$pow_base."cursos/inscripcion-third/");
}

?>