<?

include("config/config.php");

$regs = listReg('cursos_clases', 'where cursoID=4', '', 'titulo,asc');

$i = 0;
foreach($regs as $reg){

	updateReg($reg['Id'], 'cursos_clases', array('orden'), array($i));

	echo ".";
	$i++;

}

echo "<br>Ok";

?>