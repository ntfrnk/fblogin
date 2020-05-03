<?

include("../config/config.php");

if($pow_get['campo']=="apellido"){
	$new_order = " order by p.apellido ";
} elseif($pow_get['campo']=="Id"){
	$new_order = " order by u.Id ";
}

$new_order .= $pow_get['orden'];

$_SESSION['orden'] = $new_order;

header("Location: ".$pow_base."gestion/".$pow_get['view']."/".$pow_get['Id']."/");

?>