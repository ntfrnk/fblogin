<?

include("../config/config.php");

foreach(regById("mensajes", $pow_post['Id']) as $user);

if($user['leido']=="0000-00-00 00:00:00"){
	$new = date('Y-m-d H:i:s');
} else {
	$new = "0000-00-00 00:00:00";
}

if(updateReg($pow_post['Id'], "mensajes", array("leido"), array($new))){

	echo "ok";

} else {

	echo "error";

}

?>