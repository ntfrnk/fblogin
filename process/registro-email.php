<?

include("../config/config.php");

foreach(regBy("users", "email", $pow_post['email']) as $user);

if(count($user)!=0){

    $code = mt_rand(100000,999999);

    updateReg($user['Id'], "users", array("email_code"), array($code));

    include("mail/code.php");
    include("send_mail.php");

} else {

    echo "nomail";

}

?>