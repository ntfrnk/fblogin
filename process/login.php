<?

include("../config/config.php");

foreach(regBy("users", "email", $pow_post['email']) as $user);

if(count($user)!=0){

	if($user['active']==1){

		if($user['email_ok']!=1){

			if($user['pass']==encrypt($pow_post['pass'])){

				foreach(regBy("users_perfil", "userID", $user['Id']) as $perfil);

				$_SESSION['user_learn'] = $user['Id'];
				$_SESSION['u'] = $user;
				$_SESSION['u']['perfil'] = $perfil;			

				if($user['admin']==1){
					
					$_SESSION['admin_learn'] = 1;

				}
				
				echo "ok";

			} else {

				echo "err";

			}

		} else {

			echo "unconfirmed";

		}

	} else {

		echo "block";

	}

} else {

	echo "err";

}

?>