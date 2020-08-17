<?

include("../config/config.php");

_updateRegs("users_cursos", 
	array(
		'estado' => 2,
		'step' => 9
	), 
	array(
		'userID' => $pow_post['userID'], 
		'cursoID' => $pow_post['cursoID']
	)
);

_updateRegs("users_pagos", 
	array(
		'estado' => 2,
		'medio' => 'Beca otorgada'
	), 
	array(
		'userID' => $pow_post['userID'], 
		'cursoID' => $pow_post['cursoID']
	)
);

echo "ok";

?>