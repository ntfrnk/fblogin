<?

include("../config/config.php");

foreach(regBy("users", "email", $pow_post['email']) as $user);

if(count($user)!=0){

	if($user['active']==1){

		if($user['pass']==encrypt($pow_post['pass'])){

			$_SESSION['user_learn'] = $user['Id'];

			if($user['admin']==1){
				
				$_SESSION['admin_learn'] = 1;

			}
			
			echo "ok";

		} else {

			echo "err";

		}

	} else {

		echo "block";

	}

} else {

	echo "err";

}

?>