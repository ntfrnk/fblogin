<?

include("../config/config.php");

$pagos = listReg("users_pagos", "where userID='".$pow_post['Id']."'", "", "Id,desc");
foreach(listReg("users_cursos", "where userID='".$pow_post['Id']."' and estado=1", "1,0", "cursoID,desc") as $cursos);

$estados = array("Cancelado","Pendiente","Pagado");

?>

<div class="marT20 legajo">

	<? if(count($pagos)!=0){ ?>
		<div class="row">
			<div class="col-6 padTB15"><b>Nombre del curso</b></div>
			<div class="col-6 padTB15"><b>Pago</b></div>
		</div>
		<? foreach($pagos as $pago){ ?>
			<?

			$filepath = $uplpath."comprobantes/".md5($pago['Id']).".jpg";
			$namefile = md5($pago['Id']).".jpg";
			$file = "upload/comprobantes/".$namefile;

			?>
			<div class="row">
				<div class="col-8 padTB15 wrapper"><?=campoRegById("cursos", $pago['cursoID'], "nombre")?></div>
				<div class="col-4 padTB15 wrapper">
					<?=$pago['medio']?> (<?=$estados[$pago['estado']]?>) &nbsp; 
					<? if($pago['estado']==1){ ?>
						<a href="javascript:;" onclick="becar(<?=$pago['userID']?>, <?=$pago['cursoID']?>)" class="btn btn-success btn-sm f13">
							<span>Becar a este alumno</span>
						</a>
					<? } ?>
				</div>
			</div>
		<? } ?>

	<? } else { ?>

		<div class="padTB5">
			<i>Este usuario no realizó ningún pago.</i>
		</div>

	<? } ?>

	<div class="padTB5 row" id="newpago" style="display: none;">
		<? if(!empty($cursos['cursoID'])){ ?>

			<div class="col-md-5">
				<select id="newpago-medio" class="form-control">
					<option value="" selected disabled>Elegir medio de pago</option>
					<option value="Mercado Pago">Mercado Pago</option>
					<option value="Paypal">Paypal</option>
					<option value="Beca otorgada">Beca otorgada</option>
				</select>
			</div>
			<div class="col-md-5">
				<select id="newpago-estado" class="form-control">
					<option value="" selected disabled>Elegir estado del pago</option>
					<option value="1">Pendiente</option>
					<option value="2">Pagado</option>
					<option value="0">Cancelado</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="hidden" id="newpago-userID" value="<?=$pow_post['Id']?>">
				<input type="hidden" id="newpago-cursoID" value="<?=$cursos['cursoID']?>">
				<button type="button" class="btn btn-success" onclick="newpago()">Agregar</button>
			</div>

		<? } else { ?>

			<div class="col-md-12 text-danger">
				<i>Este usuario no tiene ningún trámite de inscripción iniciado.</i>
			</div>

		<? } ?>
	</div>

	<div class="padTB5 a-center">
		<a href="javascript:;" class="btn btn-sm btn-success" onclick="$('#newpago').slideDown();">Añadir un pago manualmente</a>
	</div>

</div>