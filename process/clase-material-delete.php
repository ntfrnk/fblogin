<?

include("../config/config.php");

$path_upload = "../upload/material/";

foreach(regById("cursos_clases_adjuntos", $pow_post['Id']) as $adjunto);

$archivo = $path_upload.$adjunto['claseID']."_".$adjunto['archivo'];

unlink($archivo);
deleteReg("cursos_clases_adjuntos", $adjunto['Id']);

$archivos = listReg("cursos_clases_adjuntos", "where claseID='".$pow_post['claseID']."'");

?>


<? if(count($archivos)!=0){ ?>

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

<? } else { ?>

	<div class="align-center pad30 c999">
		<em>No hay archivos adjuntos en esta clase</em>
	</div>

<? } ?>