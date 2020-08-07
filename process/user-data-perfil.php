<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

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

    $_SESSION['resp'] = 'ok';

} else {
    
    $_SESSION['resp'] = 'error';
    
}

header("Location: ".$pow_base."config/data-perfil/");

?>