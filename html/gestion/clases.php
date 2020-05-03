<?

foreach(regById("cursos", $pow_get['Id']) as $curso);

$clases = listReg("cursos_clases", "where cursoID='".$pow_get['Id']."'", "", "orden,asc+Id,asc");

?>

<section id="content">

	<div class="container">

		<div class="marT50 row">
			<h1 class="col-8">Clases para el curso: <small>«<?=$curso['nombre']?>»</small></h1>
			<div class="col-4 align-right marT5">
				<a href="gestion/cursos/" class="btn btn-light marR10" title="Agregar una nueva clase">
					<i class="fa fa-arrow-left"></i> Volver a cursos
				</a>
				<button type="button" onclick="open_modal('clase-new')" class="btn btn-primary" title="Agregar una nueva clase">
					<i class="fa fa-user-plus"></i> Agregar clase
				</button>
			</div>
		</div>

		<div class="marT40">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Nombre de la clase</th>
						<th scope="col" class="align-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($clases as $clase){ ?>
						<? if($clase['active']=="0"){ $active = "secondary"; } else { $active = "outline-secondary"; } ?>
						<? $inicio = date_create($clase['inicio']); ?>
						<? $final = date_create($clase['final']); ?>
						<tr>
							<td><?=$clase['titulo']?></td>
							<td class="align-right">
								<button type="button" onclick="clase_edit(<?=$clase['Id']?>);" class="btn btn-outline-info" title="Editar información"><i class="fa fa-edit"></i></button>
								<button type="button" onclick="clase_material(<?=$clase['Id']?>, <?=$pow_get['Id']?>);" class="btn btn-outline-info reg<?=$clase['Id']?>" title="Gestionar material"><i class="fa fa-paperclip"></i></button>
								<button type="button" onclick="clase_tareas(<?=$clase['Id']?>, <?=$pow_get['Id']?>);" class="btn btn-outline-info task<?=$clase['Id']?>" title="Gestionar tareas"><i class="fa fa-tasks"></i></button>
								<button type="button" onclick="clase_ban(<?=$clase['Id']?>);" class="btn btn-<?=$active?>" title="Deshabilitar clase"><i class="fa fa-ban"></i></button>
								<button type="button" onclick="clase_delete(<?=$clase['Id']?>);" class="btn btn-outline-danger" title="Eliminar esta clase"><i class="fa fa-times"></i></button>
							</td>
						</tr>
					<? } ?>
				</tbody>
			</table>
		</div>
		
	</div>

</section>