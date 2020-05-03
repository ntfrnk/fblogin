<?

include("../config/config.php");

if($pow_post['cursoID']=="no"){

	$_SESSION['filters'] = "no";

} elseif($pow_post['cursoID']==0){

	$_SESSION['filters'] = "";

} else {

	$_SESSION['filters'] = $pow_post['cursoID'];

}

echo "ok";

?>