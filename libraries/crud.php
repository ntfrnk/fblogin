<?


// INSERCIÓN DE REGISTRO EN BBDD
function _insertReg($modulo,$campos_valores){
	foreach($campos_valores as $campo => $valor){
		$field .= $campo.', ';
		$value .= "'".$valor."', ";
	}
	$field .= '++';
    $field = str_replace(', ++', '', $field);
    $value .= '++';
    $value = str_replace(', ++', '', $value);
	$sql = "Insert into pow_".$modulo." (".$field.") values (".$value.")";
    $result = mysql_query($sql);
	if($result){
		return 1;
	} else {
		return mysql_error();
	}
	mysql_free_result($result);
}



// ACTUALIZACIÓN DE REGISTRO CON CAMPO DIFERENTE A ID
function _updateRegBy($where,$where_valor,$modulo,$campos_valores){
	foreach($campos_valores as $campo => $valor){
		$updates .= $campo."='".$valor."', ";
	}
	$updates .= '++';
	$updates = str_replace(', ++', '', $updates);
	$sql = "Update pow_".$modulo." set ".$updates." where ".$where."='".$where_valor."'";
	$result = mysql_query($sql);
	if($result){
		mysql_error();
		return 1;
	} else {
		mysql_error();
		return 0;
	}
	mysql_free_result($result);
}



// ACTUALIZACIÓN CON SETS Y WHERES MULTIPLES
function _updateRegs($modulo,$set_campos_valores,$where_campos_valores){
	foreach($where_campos_valores as $field => $value){
		$whers[] = $field."='".$value."'";
	}
	$whers = implode(" and ", $whers);

	foreach($set_campos_valores as $campo => $valor){
		$sets[] = $campo."='".$valor."'";
	}
	$sets = implode(", ", $sets);

	$sql = "Update pow_".$modulo." set ".$sets." where ".$whers;
	
	$result = mysql_query($sql);
	if($result){
		mysql_error();
		return 1;
	} else {
		mysql_error();
		return 0;
	}
	mysql_free_result($result);
}


?>