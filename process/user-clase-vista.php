<?

include("../config/config.php");

$userID = $_SESSION['user_learn'];
$claseID = $pow_post['claseID'];

foreach(listReg("users_clases_vistas", "where userID='".$userID."' and claseID='".$claseID."'", "1,0", "rand()") as $user_clase);

if(count($user_clase)==0){

    $campos = array('userID', 'claseID');
    $valores = array($userID, $claseID);

    insertReg("users_clases_vistas", $campos, $valores);

}

?>