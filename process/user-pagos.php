<?

include("../config/config.php");

$pagos = listReg("users_pagos", "where userID='".$pow_post['Id']."'", "", "Id,desc");

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
				<div class="col-6 padTB15 wrapper"><?=campoRegById("cursos", $pago['cursoID'], "nombre")?></div>
				<div class="col-6 padTB15 wrapper">
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

</div>