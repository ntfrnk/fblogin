<?

include("../config/config.php");

foreach(regById("users", $pow_post['Id']) as $user);

if($user['money']==1){
	$new_money = 0;
} else {
	$new_money = 1;
}

if(updateReg($pow_post['Id'], "users", array("money"), array($new_money))){

	echo "ok";
	$_SESSION['guardado'] = 1;

} else {

	echo "error";

}

?>