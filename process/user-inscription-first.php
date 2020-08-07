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
    'estado_civil' => $pow_post['estado_civil']
);

$_SESSION['valores'] = $valores;

if(_updateRegBy("userID", $_SESSION['user_learn'], "users_perfil", $valores)){
    
    foreach(listReg("users_cursos", "where userID=".$_SESSION['user_learn']." and cursoID=".$_SESSION['inscripcion'], '1,0', 'rand()') as $user_curso);
    if(count($user_curso)==0){
        _insertReg("users_cursos", array(
            'userID' => $_SESSION['user_learn'], 
            'cursoID' => $_SESSION['inscripcion'], 
            'estado' => '0'
        ));
    }

    unset($_SESSION['valores']);
    foreach(regBy("users_perfil", "userID", $_SESSION['user_learn']) as $perfil);
    $_SESSION['u']['perfil'] = $perfil;
    
    header("Location: ".$pow_base."cursos/inscripcion-second/");

} else {
    $_SESSION['resp'] = mysql_error();
    header("Location: ".$pow_base."cursos/inscripcion/");
}

?>