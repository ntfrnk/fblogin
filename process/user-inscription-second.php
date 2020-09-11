<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

$fijo = trim($pow_post['fijo_nac'].' '.$pow_post['fijo_prov'].' '.$pow_post['fijo_num']);
$celular = trim($pow_post['celular_nac'].' '.$pow_post['celular_prov'].' '.$pow_post['celular_num']);

$valores = array(
    'fijo' => $fijo,
    'celular' => $celular,
    'direccion' => $pow_post['direccion'],
    'cp' => $pow_post['cp'],
    'ciudad' => $pow_post['ciudad'],
    'provincia' => $pow_post['provincia'],
    'pais' => $pow_post['pais']
);

$_SESSION['valores'] = $valores;

if(_updateRegBy("userID", $_SESSION['user_learn'], "users_perfil", $valores)){

    unset($_SESSION['valores']);
    foreach(regBy("users_perfil", "userID", $_SESSION['user_learn']) as $perfil);
    $_SESSION['u']['perfil'] = $perfil;

    _updateRegs("users_cursos", 
        array(
            'step' => 3
        ), 
        array(
            'userID' => $_SESSION['user_learn'], 
            'cursoID' => $_SESSION['inscripcion']
        )
    );
    
    header("Location: ".$pow_base."cursos/inscripcion-third/");

} else {
    $_SESSION['resp'] = mysql_error();
    header("Location: ".$pow_base."cursos/inscripcion-second/");
}

?>