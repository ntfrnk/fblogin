<?

function pass_correct($user, $pass) {
	$sql = "Select * from pow_intranet_users where user='".$user."'";
	$result = query($sql);
	foreach($result as $row);
	if(count($row)!=0) :
		if($row['pass']==encrypt($pass)) :
			return true;
		else :
			return false;
		endif;
	else :
		return false;
	endif;
}

function user_exists($user) {
	$sql = "Select * from pow_intranet_users where user='".$user."'";
	$result = query($sql);
	foreach($result as $row);
	if(count($row)!=0) :
		return true;
	else :
		return false;
	endif;
}

function user_datos($user) {
	$sql = "Select * from pow_intranet_users where user='".$user."'";
	$result = query($sql);
	return $result;
}

function encrypt($pass){
	return $newpass = md5($pass.$pass);
}

?>