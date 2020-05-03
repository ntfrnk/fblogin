<?

include("../config/config.php");

foreach(regById("cursos_clases", $pow_post['Id']) as $clase);

$placa = "../upload/placa/".$clase['placa'];

?>

<form name="editar-clase" id="class-edit" action="process/clase-save.php" method="post" enctype="multipart/form-data">
	<h2>Editar Clase</h2>
	<div class="form-wrapper">
		<div class="form-group">
			<input type="text" id="clase-edit-titulo" value="<?=$clase['titulo']?>" name="titulo" class="form-input" placeholder="Título" autocomplete="off" required>
			<span class="f12 text-danger msj" id="titulo-msj"></span>
		</div>
		<div class="form-group">
			<input type="text" id="clase-edit-video" value="<?=$clase['video']?>" name="video" class="form-input" placeholder="Link video" autocomplete="off" required>
			<span class="f12 text-danger msj" id="video-msj"></span>
		</div>
		<div class="form-group" id="video-load">
			<? if(file_exists($placa) and !is_dir($placa)){ ?>
				Ya se cargó una placa. <a href="javascript:;" onclick="$('#placa-change').slideDown();">¿Cambiar?</a>
				<div class="none" id="placa-change">
					<input type="file" id="clase-edit-placa" name="placa" class="form-input">
				</div>
			<? } else { ?>
				<input type="file" id="clase-edit-placa" name="placa" class="form-input">
			<? } ?>
		</div>
		<div class="row">
			<div class="form-group col lh50">
				<label>Inicio:</label>
			</div>
			<div class="form-group col">
				<input type="date" id="clase-edit-inicio" value="<?=$clase['inicio']?>" name="inicio" class="form-input" placeholder="Fecha de inicio" autocomplete="off" required>
				<span class="f12 text-danger msj" id="inicio-msj"></span>
			</div>
			<div class="form-group col lh50">
				<label>Final:</label>
			</div>
			<div class="form-group col">
				<input type="date" id="clase-edit-final" value="<?=$clase['final']?>" name="final" class="form-input" placeholder="Fecha de finalización" autocomplete="off" required>
				<span class="f12 text-danger msj" id="final-msj"></span>
			</div>
		</div>
		<input type="hidden" id="clase-edit-cursoID" value="<?=$clase['cursoID']?>" name="cursoID" value="<?=$pow_get['Id']?>">
		<input type="hidden" id="clase-edit-id" value="<?=$clase['Id']?>" name="Id">
		<div class="form-group marT25">
			<button type="submit" class="btn btn-primary marR5">
				<span>Guardar clase</span>
				<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</button>
			<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
		</div>
	</div>
</form>