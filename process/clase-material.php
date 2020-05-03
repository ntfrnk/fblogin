<?

include("../config/config.php");

$archivos = listReg("cursos_clases_adjuntos", " where claseID='".$pow_post['Id']."'");

?>

<? if(count($archivos)==0){ ?>

	<div class="align-center pad30 c999">
		<em>No hay archivos adjuntos en esta clase</em>
	</div>

<? } else { ?>

	<div class="marTB10 legajo docs">

		<? foreach($archivos as $archivo){ ?>

		<div class="padTB5 marLR10 padLR0 row">
			<div class="col-10 wrapper">
				<i class="fa fa-paperclip"></i> &nbsp; <?=$archivo['archivo']?>
			</div>
			<div class="col-2 align-right">
				<button type="button" onclick="clase_material_delete(<?=$archivo['Id']?>, <?=$archivo['claseID']?>);" class="btn btn-outline-danger btn-sm" title="Eliminar este archivo"><i class="fa fa-times"></i></button>
			</div>
		</div>

		<? } ?>

	</div>

<? } ?>