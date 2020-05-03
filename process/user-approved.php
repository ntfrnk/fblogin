<?

include("../config/config.php");

foreach(regById("users", $pow_post['Id']) as $user);

if($user['approved']==1){
	$new_approved = 0;
} else {
	$new_approved = 1;
}

if(updateReg($pow_post['Id'], "users", array("approved"), array($new_approved))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>