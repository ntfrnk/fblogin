<?

include("../config/config.php");

if(empty($pow_post['medio'])){
	$medio = 'Beca otorgada';
} else {
	$medio = 'Pago imputado';
}

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
		'medio' => $medio
	), 
	array(
		'userID' => $pow_post['userID'], 
		'cursoID' => $pow_post['cursoID']
	)
);

echo "ok";

?>