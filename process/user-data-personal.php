<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

$valores = array(
    'nombre' => $pow_post['nombre'],
    'apellido' => $pow_post['apellido'],
    'nacimiento' => $pow_post['nacimiento'],
    'dni' => $pow_post['dni'],
    'nacionalidad' => $pow_post['nacionalidad'],
    'estado_civil' => $pow_post['estado_civil'],
    'ocupacion' => $pow_post['ocupacion']
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

header("Location: ".$pow_base."config/data-personal/");

?>