<?

include("../config/config.php");

$mensajes = listReg("mensajes", " where destinatarioID='".$pow_post['Id']."'", "", "Id,asc");
$sql_user = "Select * from pow_users as u, pow_users_perfil as p where u.Id=p.userID and u.Id='".$pow_post['Id']."'";
$result = query($sql_user);
foreach($result as $user);

?>


<div class="form-group">
	<strong>Destinatario: </strong>
	<span class="f18" id="user-notify-dest"><?=$user['nombre']?> <?=$user['apellido']?></span>
</div>
<div class="" style="height: 400px; overflow-y: auto;">
	<div class="form-group">
		<? if(count($mensajes)!=0){ ?>
			<? foreach($mensajes as $mensaje){ ?>
				<div class="alert alert-info">
					<? $fecha = date_create($mensaje['enviado']); ?>
					<strong>EPASI <small>(Enviado el <?=date_format($fecha, 'd/m/Y');?> a las <?=date_format($fecha, 'H:i');?>):</small></strong><br>
					<span class="f16"><?=$mensaje['mensaje']?></span>
				</div>
			<? } ?>
		<? } else { ?>
			<div class="alert alert-info">
				<i>No hay mensajes anteriores</i>
			</div>
		<? } ?>
	</div>
	<div class="form-group">
		<textarea rows="2" id="user-notify-mensaje" class="form-input" placeholder="Escribe un nuevo mensaje" required></textarea>
		<span class="f12 text-danger msj" id="mensaje-msj"></span>
	</div>
	<input type="hidden" id="user-notify-id" value="<?=$pow_post['Id']?>">
	<div class="form-group marT15">
		<a href="javascript:;" class="btn btn-primary marR5" onclick="user_send();">
			<span>Enviar mensaje</span>
			<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</a>
		<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
	</div>
</div>