<?

include("../config/config.php");

foreach(regBy("users", "email", $_SESSION['email_code']) as $user);

if(count($user)!=0){

    if($pow_post['code']==$user['email_code']){
        updateReg($user['Id'], "users", array('email_ok'), array(2));
        unset($_SESSION['email_code']);
        echo "ok";
    } else {
        echo "error";
    }

} else {

    echo "nomail";

}

?>