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

$antecedentes_pdf = 'upload/antecedentes/'.md5($_SESSION['user_learn']).'.pdf';
$antecedentes_jpg = 'upload/antecedentes/'.md5($_SESSION['user_learn']).'.jpg';
if(file_exists($antecedentes_pdf)){
    $antecedentes = $antecedentes_pdf;
    $antecedentes_name = md5($_SESSION['user_learn']).'.pdf';
} elseif(file_exists($antecedentes_jpg)){
    $antecedentes = $antecedentes_jpg;
    $antecedentes_name = md5($_SESSION['user_learn']).'.jpg';
}

$id1_pdf = 'upload/identificacion/'.md5($_SESSION['user_learn']).'.pdf';
$id1_jpg = 'upload/identificacion/'.md5($_SESSION['user_learn']).'.jpg';
if(file_exists($id1_pdf)){
    $id1 = $id1_pdf;
    $id1_name = md5($_SESSION['user_learn']).'.pdf';
} elseif(file_exists($id1_jpg)){
    $id1 = $id1_jpg;
    $id1_name = md5($_SESSION['user_learn']).'.jpg';
}

$id2_pdf = 'upload/identificacion/'.md5($_SESSION['user_learn']).'_2.pdf';
$id2_jpg = 'upload/identificacion/'.md5($_SESSION['user_learn']).'_2.jpg';
if(file_exists($id2_pdf)){
    $id2 = $id2_pdf;
    $id2_name = md5($_SESSION['user_learn']).'_2.pdf';
} elseif(file_exists($id2_jpg)){
    $id2 = $id2_jpg;
    $id2_name = md5($_SESSION['user_learn']).'_2.jpg';
}

$video_mp4 = 'upload/video/'.md5($_SESSION['user_learn']).'.mp4';
if(file_exists($video_mp4)){
    $video = $video_mp4;
    $video_name = md5($_SESSION['user_learn']).'.mp4';
}

$next_ok = 0;

?>