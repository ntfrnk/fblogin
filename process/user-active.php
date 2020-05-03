<?

include("../config/config.php");

if($pow_post['Id']!=$_SESSION['user_learn']){

	foreach(regById("users", $pow_post['Id']) as $user);

	if($user['active']==1){
		$new_active = 0;
	} else {
		$new_active = 1;
	}

	if(updateReg($pow_post['Id'], "users", array("active"), array($new_active))){

		echo "ok";
		$_SESSION['guardado'] = 1;

	} else {

		echo "error";

	}

} else {

	echo "auto";

}

?>