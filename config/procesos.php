<?

$ruta_path = "html/".$pow_get['seccion']."/procesos/".$pow_get['vista'].".php";

if(file_exists($ruta_path) && !is_dir($ruta_path)){

	include_once($ruta_path);

}

?>