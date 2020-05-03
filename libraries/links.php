<?

function _link($link) {
	$dato = explode("-",$link);
	if($dato[0]=="nota") {
		$link = "nota/".url_limpia(fila("notas",$dato[1],"titulo"))."/".add_zeros($dato[1])."/";
	} elseif($dato[0]=="store") {
		$link = campoRegById("stores",$dato[1],"user")."/";
	} elseif($dato[0]=="info") {
		$link = "help/".url_limpia(fila("notas",$dato[1],"titulo"))."_".add_zeros($dato[1])."/";
	} elseif($dato[0]=="categoria") {
		$link = "seccion/".url_limpia(fila("categorias",$dato[1],"nombre"))."/".add_zeros($dato[1])."/";
	} elseif($dato[0]=="subcategoria") {
		$link = "collection/".url_limpia(fila("rubros",$dato[1],"nombre"))."_".add_zeros($dato[1])."/";
	} elseif($dato[0]=="item") {
		$link = "item/".url_limpia(fila("stores_items",$dato[1],"name"))."_".add_zeros($dato[1],7)."/";
	} else {
		$link = $link;
	}
	return $link;
}

function _linkm($link) {
	$dato = explode("-",$link);
	if($dato[0]=="nota") {
		$link = "m/nota/".url_limpia(fila("notas",$dato[1],"titulo"))."/".add_zeros($dato[1])."/";
	} elseif($dato[0]=="store") {
		$link = campoRegById("stores",$dato[1],"user")."/";
	} elseif($dato[0]=="info") {
		$link = "m/help/".url_limpia(fila("notas",$dato[1],"titulo"))."_".add_zeros($dato[1])."/";
	} elseif($dato[0]=="categoria") {
		$link = "m/seccion/".url_limpia(fila("categorias",$dato[1],"nombre"))."/".add_zeros($dato[1])."/";
	} elseif($dato[0]=="subcategoria") {
		$link = "m/collection/".url_limpia(fila("rubros",$dato[1],"nombre"))."_".add_zeros($dato[1])."/";
	} elseif($dato[0]=="item") {
		$link = "m/item/".url_limpia(fila("stores_items",$dato[1],"name"))."_".add_zeros($dato[1],7)."/";
	} elseif($dato[0]=="servicio") {
		$link = "m/service/".url_limpia(fila("stores_services",$dato[1],"name"))."_".add_zeros($dato[1],7)."/";
	} else {
		$link = $link;
	}
	return $link;
}

function fila($tabla, $id, $campo){
	$result = query("Select * from pow_".$tabla." where Id='".$id."' limit 1");
	foreach($result as $row);
	return $row[$campo];
}

function url_limpia($cadena){
	$cadena = strip_tags($cadena);
	$cadena = utf8_decode($cadena);
	$cadena = strtolower($cadena);
	$cadena = utf8_encode($cadena);
	$si = array("a","e","i","o","u");
	$no = array("á","é","í","ó","ú");
	$cadena = str_replace($no,$si,$cadena);
	$cadena = ereg_replace("[^A-Za-z0-9\-áéíóú_\ $]", "", $cadena);
	$cadena = str_replace(" ","-",$cadena);
	$cadena = str_replace("--","-",$cadena);
	$perm = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0","-");
	$n = strlen($cadena);
	for($i=0;$i<$n;$i++){
		if(in_array($cadena[$i], $perm)){
			$new_string.= $cadena[$i];
		}
	}
	
	return $new_string;
}

function add_zeros($numero, $cant='4'){
	$long = strlen($numero);
	$rest = $cant - $long;
	for($i=0;$i<$rest;$i++) :
		$numero = "0".$numero;
	endfor;
	return $numero;
}

function add_plus($keyword){
	return $new_string = str_replace(array(" "), array("-"), $keyword);
}

function remove_plus($keyword){
	$string = str_replace("-", " ", $keyword);
	return $new_string = str_replace("+", " ", $string);
}

?>