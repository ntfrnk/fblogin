<?

$registro = listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and estado in ('0','1')", "1,0", "rand()");

if(count($registro) != 0){

    foreach($registro as $reg);

    if($reg['step']!=9 && $reg['estado']!=2){

        if(!isset($_SESSION['inscripcion']) || empty($_SESSION['inscripcion'])){
            $_SESSION['inscripcion'] = $reg['cursoID'];
        }

        // Cargo la data del curso

        foreach(regById("cursos", $_SESSION['inscripcion']) as $curso);

        _updateRegs("users_cursos", 
            array(
                'estado' => 1
            ), 
            array(
                'userID' => $_SESSION['user_learn'], 
                'cursoID' => $_SESSION['inscripcion']
            )
        );

    } else {

        header("Location: ".$pow_base."cursos/all/");
        exit;

    }

} else {

    header("Location: ".$pow_base."cursos/all/");
    exit;

}

?>