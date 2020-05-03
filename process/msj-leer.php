<?

include("../config/config.php");

foreach(regById("mensajes", $pow_post['Id']) as $mensaje);

$fecha = date_create($mensaje['enviado']);

?>


<div class="marTB10 legajo docs">

	<div class="padTB5 marLR10 padLR0">
		<strong style="display: inline-block; width: auto;">De:</strong> <?=campoRegBy("users_perfil", "userID", $mensaje['remitenteID'], "nombre")?> <?=campoRegBy("users_perfil", "userID", $mensaje['remitenteID'], "apellido")?>
	</div>
	<div class="padTB5 marLR10 padLR0">
		<strong style="display: inline-block; width: auto;">Enviado:</strong> <?=date_format($fecha, 'd/m/Y H:i')?>
	</div>
	<div class="padTB10 marLR10 padLR0 lh30">
		<strong style="display: inline-block; width: auto;">Mensaje:</strong> <br>
		<?=$mensaje['mensaje']?>
	</div>

</div>