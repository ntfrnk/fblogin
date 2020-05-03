<?

include("../config/config.php");

foreach(regById("cursos", $pow_post['Id']) as $curso);

echo $curso['costo'];

?>