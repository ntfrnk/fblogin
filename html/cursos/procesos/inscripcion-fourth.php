<?

$registro = listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and estado in ('0','1')", "1,0", "rand()");

if(count($registro) != 0){

    foreach($registro as $reg);

    if(!isset($_SESSION['inscripcion']) || empty($_SESSION['inscripcion'])){
        $_SESSION['inscripcion'] = $reg['cursoID'];
    }

} else {

    header("Location: ".$pow_base."cursos/all/");

}

if($_SESSION['u']['perfil']['referencia1_celular']){
    $ref1_celular = $_SESSION['u']['perfil']['referencia1_celular'];
} elseif($_SESSION['valores']['referencia1_celular']) {
    $ref1_celular = $_SESSION['valores']['referencia1_celular'];
} else {
    $ref1_celular = '';
}

$r1_celular = explode(" ", $ref1_celular);

if(count($r1_celular)<3){
    $r1_celular[0] = '';
    $r1_celular[1] = '';
    $r1_celular[2] = $ref1_celular;
}



if($_SESSION['u']['perfil']['referencia2_celular']){
    $ref2_celular = $_SESSION['u']['perfil']['referencia2_celular'];
} elseif($_SESSION['valores']['referencia2_celular']) {
    $ref2_celular = $_SESSION['valores']['referencia2_celular'];
} else {
    $ref2_celular = '';
}

$r2_celular = explode(" ", $ref2_celular);

if(count($r2_celular)<3){
    $r2_celular[0] = '';
    $r2_celular[1] = '';
    $r2_celular[2] = $ref2_celular;
}

?>