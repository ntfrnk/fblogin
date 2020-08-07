<?

/* *****************************************************
	OPERACIONES SOBRE LA BASE DE DATOS
***************************************************** */

function query($query){
	//echo $query;
	$result = mysql_query($query) or die (mysql_error());
	while($row = mysql_fetch_assoc($result)){
		$fila[]= $row;
	}
	mysql_free_result($result);
	return $fila;
}

// LISTADO DE REGISTROS
function listReg($mod,$where='',$limit='',$order='Id,asc', $cons=''){
	$lim = explode(",", $limit);
	$orden = str_replace(",", " ", $order);
	$orden = str_replace("+", ", ", $orden);
	// Si hay sentencia "limit"...
	if(!empty($limit)){
		$limit = " limit ".$lim[1].",".$lim[0];
	}
	// Armo la consulta
	$sql = "Select * from pow_".$mod." ".$where." order by ".$orden.$limit;
	$result = query($sql);
	if($cons==1){
		return $sql;
	} else {
		return $result;
	}
}

// CANTIDAD DE REGISTROS OBTENIDOS
function registros($sql){
	$result = mysql_query($sql);
	return mysql_num_rows($result);
	mysql_free_result($result);
}

// REGISTRO POR ID
function regById($mod,$id){
	$sql = "Select * from pow_".$mod." where Id='".$id."'";
	$result = query($sql);
	return $result;
}

// REGISTRO POR UN CAMPO ESPECIFICO
function regBy($mod,$field,$value){
	$sql = "Select * from pow_".$mod." where ".$field."='".$value."'";
	$result = query($sql);
	return $result;
}

// CAMPO DE REGISTRO POR ID
function campoRegById($mod,$id,$campo){
	$sql = "Select * from pow_".$mod." where Id='".$id."'";
	$result = query($sql);
	foreach($result as $row);
	return $row[$campo];
}

// CAMPO DE REGISTRO POR CAMPO / VALOR
function campoRegBy($mod,$where,$value,$campo){
	$sql = "Select * from pow_".$mod." where ".$where."='".$value."'";
	$result = query($sql);
	foreach($result as $row);
	return $row[$campo];
}

// INSERCIÓN DE REGISTRO EN BBDD
function insertReg($modulo,$campos,$valores){
	$n = count($campos);
	for($i=0;$i<$n;$i++){
		$field .= $campos[$i];
		if($i!=($n-1)){
			$field .= ",";
		}
	}
	for($i=0;$i<$n;$i++){
		$value .= "'".$valores[$i]."'";
		if($i!=($n-1)){
			$value .= ",";
		}
	}
	$sql = "Insert into pow_".$modulo." (".$field.") values (".$value.")";
	$result = mysql_query($sql);
	if($result){
		return 1;
	} else {
		return mysql_error();
	}
	mysql_free_result($result);
}

// ACTUALIZACIÓN DE REGISTRO EN BBDD
function updateReg($id,$modulo,$campos,$valores){
	$n = count($campos);
	for($i=0;$i<$n;$i++){
		$updates .= $campos[$i]."='".$valores[$i]."'";
		if($i!=($n-1)){
			$updates .= ", ";
		}
	}
	$sql = "Update pow_".$modulo." set ".$updates." where Id='".$id."'";
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

// ACTUALIZACIÓN DE REGISTRO CON CAMPO DIFERENTE A ID
function updateRegBy($where,$valor,$modulo,$campos,$valores){
	$n = count($campos);
	for($i=0;$i<$n;$i++){
		$updates .= $campos[$i]."='".$valores[$i]."'";
		if($i!=($n-1)){
			$updates .= ", ";
		}
	}
	$sql = "Update pow_".$modulo." set ".$updates." where ".$where."='".$valor."'";
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

// ACTUALIZACIÓN DE REGISTRO CON CAMPO DIFERENTE A ID
function updateRegByMulti($modulo,$campos,$valores,$campo,$valor){
	$n = count($campos);
	for($i=0;$i<$n;$i++){
		$whers[] = $campos[$i]."='".$valores[$i]."'";
	}
	$wheres = implode(" and ", $whers);
	$sql = "Update pow_".$modulo." set ".$campo."='".$valor."' where ".$wheres;
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

// ACTUALIZACIÓN DE REGISTRO CON CAMPO DIFERENTE A ID
function updateRegByMultis($modulo,$wcampos,$wvalores,$campos,$valores){
	$n = count($wcampos);
	for($i=0;$i<$n;$i++){
		$whers[] = $wcampos[$i]."='".$wvalores[$i]."'";
	}
	$wheres = implode(" and ", $whers);
	$ns = count($campos);
	for($i=0;$i<$ns;$i++){
		$sts[] = $campos[$i]."='".$valores[$i]."'";
	}
	$sets = implode(", ", $sts);
	$sql = "Update pow_".$modulo." set ".$sets." where ".$wheres;
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

// ELIMINACIÓN DE REGISTRO EN BBDD
function deleteReg($modulo,$id){
	$sql = "Delete from pow_".$modulo." where Id='".$id."'";
	$result = mysql_query($sql);
	if($result){
		return 1;
	} else {
		return 0;
	}
	mysql_free_result($result);
}

// ELIMINACIÓN DE REGISTRO EN BBDD
function deleteRegBy($modulo,$campo,$valor){
	$sql = "Delete from pow_".$modulo." where ".$campo."='".$valor."'";
	$result = mysql_query($sql);
	if($result){
		return 1;
	} else {
		return 0;
	}
	mysql_free_result($result);
}

// ELIMINACIÓN DE REGISTRO EN BBDD
function deleteRegMulti($modulo,$campos,$valores){
	$n = count($campos);
	for($i=0;$i<$n;$i++){
		$deletes .= $campos[$i]."='".$valores[$i]."'";
		if($i!=($n-1)){
			$deletes .= " and ";
		}
	}
	$sql = "Delete from pow_".$modulo." where ".$deletes;
	$result = mysql_query($sql);
	if($result){
		return 1;
	} else {
		return 0;
	}
	mysql_free_result($result);
}

?>