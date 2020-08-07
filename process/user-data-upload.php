<?

include("../config/config.php");

if(is_uploaded_file($_FILES['archivo']['tmp_name'])) {

    if($pow_post['id2']==1){
        $new_name = "../upload/".$pow_post['loadtype']."/".md5($_SESSION['user_learn'])."_2";
    } else {
        $new_name = "../upload/".$pow_post['loadtype']."/".md5($_SESSION['user_learn']);
    }

    $ext = strrchr($_FILES['archivo']['name'], ".");
    $new_name .= strtolower($ext);
    
    copy($_FILES['archivo']['tmp_name'],$new_name);

    $_SESSION['resp'] = 'ok';
	
} else {

    $_SESSION['resp'] = 'error';

}

header("Location: ".$pow_base."config/data-documentos/");

?>