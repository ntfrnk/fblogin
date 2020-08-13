<?

include("../config/config.php");

foreach(listReg("users_cursos", "where cursoID='".$pow_post['cursoID']."' and userID='".$pow_post['userID']."'", "", "rand()") as $curso);

if($curso['estado']==1){

	include("mail/aprobado.php");
	include("send-mail.php");

	_updateRegs("users_cursos", 
		array(
			'estado' => 2,
			'step' => 8
		), 
		array(
			'userID' => $pow_post['userID'], 
			'cursoID' => $pow_post['cursoID']
		)
	);

} else {

	_updateRegs("users_cursos", 
		array(
			'estado' => 1
		), 
		array(
			'userID' => $pow_post['userID'], 
			'cursoID' => $pow_post['cursoID']
		)
	);

}

?>