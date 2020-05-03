<?

$sql = "Select * from pow_cursos order by Id asc";
$cursos = query($sql);

?>

<section id="content">

	<div class="container">

		<div class="marT50 row">
			<h1 class="col-8">Cursos</h1>
			<div class="col-4 align-right marT5">
				<button type="button" onclick="open_modal('curso-new')" class="btn btn-primary" title="Agregar un nuevo curso">
					<i class="fa fa-user-plus"></i> Agregar curso
				</button>
			</div>
		</div>

		<div class="marT40">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Nombre del curso</th>
						<th scope="col" class="align-right">Opciones</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($cursos as $curso){ ?>
						<? if($curso['active']=="0"){ $active = "secondary"; } else { $active = "outline-secondary"; } ?>
						<? if($curso['cierre']=="0"){ $cierre = "outline-secondary"; } else { $cierre = "secondary"; } ?>
						<? $date = date_create($curso['fecha']); ?>
						<tr>
							<td><?=$curso['nombre']?></td>
							<td class="align-right">
								<a href="gestion/clases/<?=$curso['Id']?>/" class="btn btn-info" title="Gestionar clases"><i class="fa fa-chalkboard-teacher"></i></a>
								<button type="button" onclick="curso_edit(<?=$curso['Id']?>);" class="btn btn-info" title="Editar información"><i class="fa fa-edit"></i></button>
								<button type="button" onclick="curso_clone(<?=$curso['Id']?>);" class="btn btn-info" title="Clonar este curso"><i class="fa fa-clone"></i></button>
								<button type="button" onclick="curso_close(<?=$curso['Id']?>);" class="btn btn-<?=$cierre?>" title="Pausar/cerrar inscripciones"><i class="fa fa-pause"></i></button>
								<button type="button" onclick="curso_ban(<?=$curso['Id']?>);" class="btn btn-<?=$active?>" title="Deshabilitar curso"><i class="fa fa-ban"></i></button>
								<button type="button" onclick="curso_delete(<?=$curso['Id']?>);" class="btn btn-outline-danger" title="Eliminar este curso"><i class="fa fa-times"></i></button>
							</td>
						</tr>
					<? } ?>
				</tbody>
			</table>
		</div>
		
	</div>

</section>