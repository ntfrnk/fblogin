<?

include("../config/config.php");

$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where u.Id=p.userID and u.Id='".$pow_post['Id']."'";
$users = query($sql);
foreach($users as $user);

foreach(listReg("users_declaracion", "where userID='".$pow_post['Id']."'", "1,0", "rand()") as $declaracion);

$birthday = date_create($user['nacimiento']);

?>

<div class="marT20 legajo">
	
	<div class="marT10 padB10" style="height: 340px; overflow: auto;">
		<h4 class="datauserh4">Datos personales:</h4>
		<span class="datauser"><strong>Nombre completo:</strong> <?=$user['nombre']?> <?=$user['apellido']?></span>
		<span class="datauser"><strong>Fecha de nacimiento:</strong> <?=date_format($birthday, 'd/m/Y')?></span>
		<span class="datauser"><strong>DNI Nº:</strong> <?=$user['dni']?></span>	
		<span class="datauser"><strong>Nacionalidad:</strong> <?=$user['nacionalidad']?></span>	
		<span class="datauser"><strong>Estado civil:</strong> <?=$user['estado_civil']?></span>

		<h4 class="datauserh4">Datos de contacto:</h4>
		<span class="datauser"><strong>Teléfono:</strong> <?=$user['fijo']?></span>
		<span class="datauser"><strong>Celular:</strong> <?=$user['celular']?></span>	
		<span class="datauser"><strong>Dirección:</strong> <?=$user['direccion']?></span>
		<span class="datauser"><strong>CP:</strong> <?=$user['cp']?></span>
		<span class="datauser"><strong>Ciudad:</strong> <?=$user['ciudad']?></span>
		<span class="datauser"><strong>Provincia:</strong> <?=$user['provincia']?></span>
		<span class="datauser"><strong>País:</strong> <?=$user['pais']?></span>	

		<h4 class="datauserh4">Perfil del postulante:</h4>
		<span class="datauser"><strong>Religión:</strong> <?=$user['religion']?></span>
		<span class="datauser"><strong>Pro-aborto:</strong> <?=$user['proaborto']?></span>
		<span class="datauser"><strong>Trabajó con niños:</strong> <?=$user['trabajo']?></span>
		<span class="datauser"><strong>Razón para tomar el curso:</strong> <?=$user['razones']?></span>

		<h4 class="datauserh4">Contactos de referencia:</h4>
		<div><strong>Contacto #1:</strong><br><?=$user['referencia1_nombre']?> (<?=$user['referencia1_celular']?> / <?=$user['referencia1_email']?>)</div>
		<div><strong>Contacto #2:</strong><br><?=$user['referencia2_nombre']?> (<?=$user['referencia2_celular']?> / <?=$user['referencia2_email']?>)</div>

		<h4 class="datauserh4">Declaración Jurada:</h4>
		<span class="datauser"><strong>Adicción sexual:</strong> <? if($declaracion['adiccion_sexual']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Tendencia homosexual:</strong> <? if($declaracion['tendencia_homosexual']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Conductas abusivas:</strong> <? if($declaracion['abusador']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Acusaciones de abuso:</strong> <? if($declaracion['acusado_abuso']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Acoso sexual:</strong> <? if($declaracion['acosador']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Acusaciones de acoso sexual:</strong> <? if($declaracion['acusado_acoso']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Consume pornografía:</strong> <? if($declaracion['pornografia']==1){ echo 'Sí'; } else { echo 'No'; } ?></span>
		<span class="datauser"><strong>Tratamiento psicológico:</strong> <?=$user['tratamiento']?></span>
		<span class="datauser"><strong>Consume medicación:</strong> <?=$user['medicacion']?></span>
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