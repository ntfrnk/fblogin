<?

if(empty($_SESSION['filters'])){

	if(!isset($pow_post['search'])){
		$sql = "Select * from pow_users as u, pow_users_perfil as p	where u.Id=p.userID";
	} else {
		$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where (
		nombre like '%".$pow_post['search']."%' or 
		apellido like '%".$pow_post['search']."%' or 
		email like '%".$pow_post['search']."%'
		) and 
		u.Id=p.userID";
	}
		
} else {
		
	if($_SESSION['filters']=="no"){
			
		if(!isset($pow_post['search'])){
			
			$sql = "Select * from pow_users u, pow_users_perfil p
			where u.Id=p.userID and 
			u.Id not in (Select userID from pow_users_cursos group by userID)";
			
		} else {
			
			$sql = "Select * from pow_users u, pow_users_perfil p
			where (
				nombre like '%".$pow_post['search']."%' or 
				apellido like '%".$pow_post['search']."%' or 
				email like '%".$pow_post['search']."%'
				) and 
				u.Id=p.userID and 
				u.Id not in (Select userID from pow_users_cursos group by userID)";
			
		}
			
	} else {
		
		if(!isset($pow_post['search'])){

			$sql = "Select * from pow_users as u, pow_users_perfil as p, pow_users_cursos as c
					where u.Id=p.userID and u.Id=c.userID and c.cursoID='".$_SESSION['filters']."'";
					
		} else {
			
			$sql = "Select * from pow_users as u, pow_users_perfil as p, pow_users_cursos as c
			where (
			nombre like '%".$pow_post['search']."%' or 
			apellido like '%".$pow_post['search']."%' or 
			email like '%".$pow_post['search']."%'
			) and 
			u.Id=p.userID and u.Id=c.userID and c.cursoID='".$_SESSION['filters']."'";


		}

	}


}

$upag = query($sql);
$cantidad = count($upag);
$regxpag = 20;
$pagact = isset($pow_get['Id']) ? $pow_get['Id'] : '1';
$urlbase = $pow_base."gestion/cursado/";
$desde = $regxpag * $pagact - $regxpag;

$orden = isset($_SESSION['orden']) ? $_SESSION['orden'] : ' order by p.apellido asc';
$limit = " limit ".$desde.",".$regxpag;

$consulta_completa = $sql.$orden.$limit;

$users = query($consulta_completa);

$cursos = listReg("cursos", "where active=1", "", "nombre,asc");

if($orden == " order by p.apellido asc"){
	$ord_ap = "desc";
	$ord_id = "asc";
} elseif($orden == " order by u.Id asc"){
	$ord_ap = "asc";
	$ord_id = "desc";
} else {
	$ord_ap = "asc";
	$ord_id = "asc";
}

?>

<section id="content">

	<div class="container">

		<div class="marT50 row">
			<h1 class="col-6">Usuarios del sistema</h1>
			<div class="col-6 align-right marT5">
				<a href="gestion/users/<?= isset($pow_get['Id']) ? $pow_get['Id']."/" : ''; ?>" class="btn btn-primary marR10" title="Cambiar a Opciones generales">
					<i class="fa fa-edit"></i> Opciones generales
				</a>
				<button type="button" onclick="user_new();" class="btn btn-success" title="Agregar un nuevo usuario">
					<i class="fa fa-user-plus"></i> Agregar usuario
				</button>
			</div>
		</div>

		<div class="marT20 row bDDD padTB10">
			<div class="col-4">
				<select class="form-control" id="filtro-curso">
					<option value="0">Todos los usuarios</option>
					<optgroup label="Usuarios inscriptos">
						<? foreach($cursos as $curso){ ?>
							<? if($_SESSION['filters']==$curso['Id']){ $s = " selected"; } else { $s = ""; } ?>
							<option value="<?=$curso['Id']?>"<?=$s?>><?=$curso['nombre']?></option>
						<? } ?>
					</optgroup>
					<? if($_SESSION['filters']=="no"){ $sno = " selected"; } else { $sno = ""; } ?>
					<option value="no"<?=$sno?>>Usuarios sin inscripciones</option>
				</select>
			</div>
			<div class="col-1"></div>
			<div class="col-4">
				<form action="<?=$pow_base?>gestion/<?=$pow_get['vista']?>/" method="POST" class="input-group">
					<input type="text" class="form-control" value="<?=$pow_post['search']?>" placeholder="Buscar usuario" name="search" id="search" autocomplete="off">
					<div class="input-group-append">
						<button id="search-do" type="submit" class="btn btn-secondary">Buscar</button>
					</div>
				</form>
			</div>
			<div class="col-1"></div>
			<div class="col-2 lh36 align-right">
				<a href="process/exportar.php" class="btn btn-primary btn-sm" title="Exportar datos en Excel">
					<i class="fa fa-download"></i> Descargar datos
				</a>
			</div>
		</div>

		<div class="marT40">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">
							<a href="process/user-orden.php?campo=Id&orden=<?=$ord_id?>&view=cursado&Id=<?=$pagact?>">
								Nº
							</a>
						</th>
						<th scope="col">
							<a href="process/user-orden.php?campo=apellido&orden=<?=$ord_ap?>&view=cursado&Id=<?=$pagact?>">
								Nombre completo
							</a>
						</th>
						<th scope="col">E-mail</th>
						<th scope="col" class="align-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($users as $user){ ?>
						<? if($user['approved']=="0"){ $approved = "outline-secondary"; } else { $approved = "success"; } ?>
						<? if($user['datos']=="0"){ $datos = "info"; } else { $datos = "success"; } ?>
						<? if($user['documentos']=="0"){ $documentos = "info"; } else { $documentos = "success"; } ?>
						<?

						if(pagos_pendientes($user['Id'])){
							$money = "warning";
						} elseif(pagos_ok($user['Id'])) {
							$money = "success";
						} else {
							$money = "outline-secondary";
						}

						$cursadoval = cursado($user['Id']);

						if($cursadoval==0){
							$cursado = "outline-secondary";
						} elseif($cursadoval==1){
							$cursado = "warning";
						} else {
							$cursado = "success";
						}

						$tareas_pendientes = tareas_pendientes($user['Id']);

						if($tareas_pendientes==0){
							$tarea = "outline-secondary";
						} elseif($tareas_pendientes==1){
							$tarea = "warning";
						} else {
							$tarea = "success";
						}

						?>
						<tr>
							<th scope="row"><?=$user['Id']?></th>
							<td><?=$user['apellido']?>, <?=$user['nombre']?></td>
							<td><?=$user['email']?></td>
							<td class="align-right">
								<button type="button" onclick="user_ok(<?=$user['Id']?>);" class="btn btn-<?=$approved?>" title="Aprobar usuario"><i class="fa fa-check"></i></button>
								<button type="button" onclick="user_pagos(<?=$user['Id']?>);" class="btn btn-<?=$money?>" title="Información de pagos"><i class="fa fa-dollar-sign"></i></button>
								<button type="button" onclick="user_cursos(<?=$user['Id']?>);" class="btn btn-<?=$cursado?>" title="Revisar suscripciones"><i class="fa fa-graduation-cap"></i></button>
								<button type="button" onclick="user_tareas(<?=$user['Id']?>);" class="btn btn-<?=$tarea?>" title="Calificar exámenes"><i class="fa fa-file-alt"></i></button>
								<button type="button" onclick="user_info(<?=$user['Id']?>);" class="btn btn-<?=$datos?>" title="Revisar datos"><i class="fa fa-id-card-alt"></i></button>
								<button type="button" onclick="user_docs(<?=$user['Id']?>);" class="btn btn-<?=$documentos?>" title="Revisar documentación"><i class="fa fa-folder-open"></i></button>
								<button type="button" onclick="user_notify(<?=$user['Id']?>);" class="btn btn-info" title="Enviar notificación"><i class="fa fa-bell"></i></button>
							</td>
						</tr>
						<? unset($cursadoval); ?>
						<? unset($cursado); ?>
					<? } ?>
				</tbody>
			</table>

			<div class="paginador marT30">
				<hr>
				<div class="marT25 bold">
					<? paginator($pagact, $cantidad, $urlbase, $regxpag); ?>
				</div>
			</div>

		</div>
		
	</div>

</section>