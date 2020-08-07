<?

include("../config/config.php");

unset($_SESSION['valores']);
unset($_SESSION['error']);

$referencia1_celular = trim($pow_post['ref1_celular_nac'].' '.$pow_post['ref1_celular_prov'].' '.$pow_post['ref1_celular_num']);
$referencia2_celular = trim($pow_post['ref2_celular_nac'].' '.$pow_post['ref2_celular_prov'].' '.$pow_post['ref2_celular_num']);

$valores = array(
    'referencia1_nombre' => $pow_post['referencia1_nombre'],
    'referencia1_email' => $pow_post['referencia1_email'],
    'referencia1_celular' => $referencia1_celular,
    'referencia2_nombre' => $pow_post['referencia2_nombre'],
    'referencia2_email' => $pow_post['referencia2_email'],
    'referencia2_celular' => $referencia2_celular
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

header("Location: ".$pow_base."config/data-referencia/");

?>