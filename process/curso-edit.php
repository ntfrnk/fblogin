<?

include("../config/config.php");

foreach(regById("cursos", $pow_post['Id']) as $curso);

?>

<div class="form-group">
	<input type="text" value="<?=$curso['nombre']?>" id="curso-edit-nombre" class="form-input" placeholder="Nombre" autocomplete="off" required>
	<span class="f12 text-danger msj" id="nombre-edit-msj"></span>
</div>
<div class="form-group">
	<textarea id="curso-edit-descripcion" rows="6" class="form-input" placeholder="Descripción" autocomplete="off" required><?=$curso['descripcion']?></textarea>
	<span class="f12 text-danger msj" id="descripcion-edit-msj"></span>
</div>
<!-- <div class="row">
	<div class="form-group col-6">
		<input type="date" value="<?=$curso['fecha']?>" id="curso-edit-fecha" class="form-input" placeholder="Fecha" autocomplete="off" required>
		<span class="f12 text-danger msj" id="fecha-edit-msj"></span>
	</div>
	<div class="form-group col-6">
		<input type="number" value="<?=$curso['costo']?>" id="curso-edit-costo" class="form-input" placeholder="Costo (USD)" autocomplete="off" required>
		<span class="f12 text-danger msj" id="costo-edit-msj"></span>
	</div>
</div> -->
<div class="form-group">
	<input type="number" id="curso-edit-costo" class="form-input" autocomplete="off" placeholder="Costo (USD)" value="<?=$curso['costo']?>" autocomplete="off" required>
	<span class="f12 text-danger msj" id="email-msj"></span>
</div>
<div class="form-group">
	<textarea id="curso-edit-codigo-paypal" rows="1" class="form-input" autocomplete="off" placeholder="Código paypal"><?=$curso['codigo_paypal']?></textarea>
	<span class="f12 text-danger msj" id="codigo-paypal-msj"></span>
</div>
<div class="form-group">
	<textarea id="curso-edit-codigo-mp" rows="1" class="form-input" autocomplete="off" placeholder="Código Mercado Pago"><?=$curso['codigo_mp']?></textarea>
	<span class="f12 text-danger msj" id="codigo-mp-msj"></span>
</div>
<input type="hidden" value="<?=$curso['Id']?>" id="curso-edit-id">
<div class="form-group marT25">
	<a href="javascript:;" class="btn btn-primary marR5" onclick="curso_save();">
		<span>Guardar cambios</span>
		<div class="spinner-grow spinner-grow-sm text-light spinner-btn" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</a>
	<a href="javascript:;" onclick="close_modal();" class="btn btn-link">Cancelar</a>
</div>