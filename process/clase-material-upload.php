<?

include("../config/config.php");

$cuantos = count($_FILES['clase-edit-archivo']['name']);

$path_upload = "../upload/material/";

for($i=0;$i<$cuantos;$i++){

	$new_name = $path_upload.$pow_post['clase-edit-claseID']."_".$_FILES['clase-edit-archivo']['name'][$i];

	if(is_uploaded_file($_FILES['clase-edit-archivo']['tmp_name'][$i])) {
		copy($_FILES['clase-edit-archivo']['tmp_name'][$i],$new_name);
	}

	insertReg("cursos_clases_adjuntos", array("claseID","archivo"), array($pow_post['clase-edit-claseID'], $_FILES['clase-edit-archivo']['name'][$i]));
	$_SESSION['uploadeado'] = $pow_post['clase-edit-cursoID'];

}

header("Location: ".$pow_base."gestion/clases/".$pow_post['clase-edit-cursoID']."/");

?>