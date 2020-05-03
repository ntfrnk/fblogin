<?

include("../config/config.php");

$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where u.Id=p.userID and u.Id='".$pow_post['Id']."'";
$users = query($sql);
foreach($users as $user);

$birthday = date_create($user['nacimiento']);

?>

<div class="marT20 legajo">
	<div class="padTB5">
		<strong>Nombre completo:</strong> <?=$user['nombre']?> <?=$user['apellido']?>
		<span><strong>DNI Nº:</strong> <?=$user['dni']?></span>
	</div>
	<div class="padTB5">
		<strong>Fecha de nacimiento:</strong> <?=date_format($birthday, 'd/m/Y')?>
		<span><strong>Nacionalidad:</strong> <?=$user['nacionalidad']?></span>
	</div>
	<div class="padTB5">
		<strong>Estado civil:</strong> <?=$user['estado_civil']?>
		<span><strong>Teléfono:</strong> <?=$user['fijo']?></span>
		<span><strong>Celular:</strong> <?=$user['celular']?></span>
	</div>
	<div class="padTB5">
		<strong>Dirección:</strong> <?=$user['direccion']?> - 
		<?=$user['ciudad']?> - <?=$user['provincia']?> - <?=$user['pais']?>
	</div>
	<div class="padTB5">
		<strong>Religión:</strong> <?=$user['religion']?>
		<span><strong>Pro-aborto:</strong> <?=$user['proaborto']?></span>
	</div>
	<div class="padTB5">
		<strong>Tratamiento:</strong> <?=$user['tratamiento']?>
		<span><strong>Consume medicación:</strong> <?=$user['medicacion']?></span>
	</div>
	<div class="padTB5">
		<strong>Trabajó con niños:</strong> <?=$user['trabajo']?>
	</div>
	<div class="padTB5">
		<strong>Personas de referencia:</strong> <?=$user['referencias']?>
	</div>
	<div class="padTB5">
		<strong>Razón para tomar el curso:</strong> <?=$user['razones']?>
	</div>

	<div class="form-group marT25 padB20 align-center">
		<? if($user['datos']==0){ ?>
			<a href="javascript:;" onclick="user_confirm(<?=$user['Id']?>, 'datos');" class="btn btn-success"><i class="fa fa-check"></i> Aprobar datos</a>
		<? } else { ?>
			<p class="text-success">
				<i class="fa fa-check"></i> Datos aprobados 
				<a href="javascript:;" onclick="user_confirm(<?=$user['Id']?>, 'datos', 1);" class="btn btn-sm btn-outline-danger marL20">¿Revocar?</a>
			</p>
		<? } ?>
	</div>
</div>