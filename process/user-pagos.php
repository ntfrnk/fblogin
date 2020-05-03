<?

include("../config/config.php");

$pagos = listReg("users_pagos", "where userID='".$pow_post['Id']."'", "", "Id,desc");

$estados = array("Cancelado","Pendiente","Pagado");

?>

<div class="marT20 legajo">

	<? if(count($pagos)!=0){ ?>
		<div class="row">
			<div class="col-5 padTB15"><b>Nombre del curso</b></div>
			<div class="col-4 padTB15"><b>Pago</b></div>
			<div class="col-3 padTB15"><b>Comprobante</b></div>
		</div>
		<? foreach($pagos as $pago){ ?>
			<?

			$filepath = $uplpath."comprobantes/".md5($pago['Id']).".jpg";
			$namefile = md5($pago['Id']).".jpg";
			$file = "upload/comprobantes/".$namefile;

			?>
			<div class="row">
				<div class="col-5 padTB15 wrapper"><?=campoRegById("cursos", $pago['cursoID'], "nombre")?></div>
				<div class="col-4 padTB15 wrapper"><?=$pago['medio']?> (<?=$estados[$pago['estado']]?>)</div>
				<div class="col-3 padTB15">
					<? if($pago['estado']==2){ ?>
						<a href="<?=$file?>" class="btn btn-sm btn-success" download><i class="fa fa-download"></i> Comprobante</a>
					<? } else { ?>
						Aguardando
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