<?

if(empty($_SESSION['filters'])){

	if(!isset($pow_post['search'])){
		$sql = "Select * from pow_users as u, pow_users_perfil as p	where u.email_ok!=1 and  u.Id=p.userID";
	} else {
		$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where (
		nombre like '%".$pow_post['search']."%' or 
		apellido like '%".$pow_post['search']."%' or 
		email like '%".$pow_post['search']."%'
		) and u.email_ok!=1 and 
		u.Id=p.userID";
	}
		
} else {
		
	if($_SESSION['filters']=="no"){
			
		if(!isset($pow_post['search'])){
			
			$sql = "Select * from pow_users u, pow_users_perfil p
			where u.Id=p.userID and u.email_ok!=1 and 
			u.Id not in (Select userID from pow_users_cursos group by userID)";
			
		} else {
			
			$sql = "Select * from pow_users u, pow_users_perfil p
			where (
				nombre like '%".$pow_post['search']."%' or 
				apellido like '%".$pow_post['search']."%' or 
				email like '%".$pow_post['search']."%'
				) and 
				u.Id=p.userID and u.email_ok!=1 and 
				u.Id not in (Select userID from pow_users_cursos group by userID)";
			
		}
			
	} else {
		
		if(!isset($pow_post['search'])){

			$sql = "Select * from pow_users as u, pow_users_perfil as p, pow_users_cursos as c
					where u.Id=p.userID and u.Id=c.userID and u.email_ok!=1 and c.cursoID='".$_SESSION['filters']."'";
					
		} else {
			
			$sql = "Select * from pow_users as u, pow_users_perfil as p, pow_users_cursos as c
			where (
			nombre like '%".$pow_post['search']."%' or 
			apellido like '%".$pow_post['search']."%' or 
			email like '%".$pow_post['search']."%'
			) and u.email_ok!=1 and 
			u.Id=p.userID and u.Id=c.userID and c.cursoID='".$_SESSION['filters']."'";


		}

	}


}

$upag = query($sql);
$cantidad = count($upag);
$regxpag = 20;
$pagact = isset($pow_get['Id']) ? $pow_get['Id'] : '1';
$urlbase = $pow_base."gestion/users/";
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

<span class="hide none" id="view"><?=$pow_get['vista']?></span>

<section id="content">

	<div class="container">

		<div class="marT50 row">
			<h1 class="col-6">Usuarios del sistema</h1>
			<div class="col-6 align-right marT5">
				<a href="gestion/cursado/<?= isset($pow_get['Id']) ? $pow_get['Id']."/" : ''; ?>" class="btn btn-secondary marR10" title="Cambiar a Opciones de cursado">
					<i class="fa fa-graduation-cap"></i> Opciones de cursado
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
						<th scope="col">Registrado</th>
						<th scope="col" class="align-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($users as $user){ ?>
						<? if($user['active']=="0"){ $active = "secondary"; } else { $active = "outline-secondary"; } ?>
						<tr>
							<th scope="row"><?=$user['Id']?></th>
							<td><?=$user['apellido']?>, <?=$user['nombre']?></td>
							<td><?=$user['email']?></td>
							<td>
								<?
								if(!is_null($user['created'])){
									$date = date_create($user['created']);
									echo date_format($date, 'd/m/Y');
								} else {
									echo '00/00/0000';
								}
								?>
							</td>
							<td class="align-right">
								<button type="button" onclick="user_edit(<?=$user['Id']?>, '<?=$user['nombre']?>', '<?=$user['apellido']?>', '<?=$user['email']?>');" class="btn btn-info" title="Editar información"><i class="fa fa-edit"></i></button>
								<a href="config/user/<?=$user['Id']?>/" class="btn btn-info" title="Edición avanzada"><i class="fa fa-users-cog"></i></a>
								<button type="button" onclick="user_pass(<?=$user['Id']?>);" class="btn btn-info" title="Cambiar contraseña"><i class="fa fa-key"></i></button>
								<button type="button" onclick="user_ban(<?=$user['Id']?>);" class="btn btn-<?=$active?>" title="Bloquear este usuario"><i class="fa fa-ban"></i></button>
								<button type="button" onclick="user_delete(<?=$user['Id']?>);" class="btn btn-outline-danger" title="Eliminar este usuario"><i class="fa fa-times"></i></button>
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