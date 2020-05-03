<?

$mensajes = mensajes();

?>

<section id="content">

	<div class="container">

		<div class="marT50 row">
			<h1 class="col-12">Buzón de mensajes</h1>
		</div>

		<div class="marT40">
			<table class="table">
				<thead>
					<tr>
						<th class="d-none d-md-block">Fecha y hora</th>
						<th>De:</th>
						<th class="align-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($mensajes as $mensaje){ ?>
						<? if($mensaje['leido']=="0000-00-00 00:00:00"){ $estado = "no-leido"; $leido = "outline-success"; } else { $estado = "leido"; $leido = "success"; } ?>
						<? $fecha = date_create($mensaje['enviado']); ?>
						<tr class="<?=$estado?> msj-fila">
							<td class="d-none d-md-block"><?=date_format($fecha, 'd/m/Y H:i')?></td>
							<td>
								<a href="javascript:;" onclick="msj_leer(<?=$mensaje['Id']?>);">
									<?=campoRegBy("users_perfil", "userID", $mensaje['remitenteID'], "nombre")?> <?=campoRegBy("users_perfil", "userID", $mensaje['remitenteID'], "apellido")?>
								</a>
								<span class="block d-block d-md-none">[ <?=date_format($fecha, 'd/m/Y H:i')?> ]</span>
							</td>
							<td class="align-right">
								<button type="button" onclick="msj_leido(<?=$mensaje['Id']?>);" class="btn btn-<?=$leido?>" title="Marcar como leído."><i class="fa fa-check"></i></button>
								<!--button type="button" onclick="msj_delete(<?=$mensaje['Id']?>);" class="btn btn-outline-danger" title="Eliminar este mensaje"><i class="fa fa-times"></i></button-->
							</td>
						</tr>
						<? unset($fecha); ?>
						<? unset($estado); ?>
					<? } ?>
				</tbody>
			</table>
		</div>
		
	</div>

</section>