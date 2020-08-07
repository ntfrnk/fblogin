<section id="content">

	<div class="container">

		<div class="row marT30">

			<? foreach(listReg("cursos", " where active=1", "10,0", "Id,asc") as $curso){ ?>

				<?
				$class = listReg("cursos_clases", "where cursoID='".$curso['Id']."'", '', 'rand()');
				$clases = count($class);
				?>

				<?

				$curso_estado = cursando_estado($_SESSION['user_learn'], $curso['Id']);

				if($curso_estado==0){
					$state = '<span class="badge badge-secondary"><i>No estás tomando este curso</i></span>';
				} elseif($curso_estado==1){
					$state = '<span class="badge badge-warning"><i>En proceso de inscripción</i></span>';
				} else {
					$state = '<span class="badge badge-success"><i>Ya estás cursando</i></span>';
				}

				$linkcurso = "cursos/detail/".$curso['Id']."/";

				?>
					
				<? if($curso_estado!=0){ ?>

					<div class="col-12 col-md-4 item-cursos align-center">
						<div class="box">
							<a href="<?=$linkcurso?>" class="">
								<div class="middler padLR20">
									<h3 class="f24"><?=$curso['nombre']?></h3>
									<p><?=$state?></p>
									<p class="mar0">Precio: <b><?=$curso['costo']?> USD</b><br>Cantidad de clases: <b><?=$clases?></b></p>
								</div>
							</a>
						</div>
					</div>

				<? } else { ?>
			
					<div class="col-12 col-md-4 item-cursos align-center">
						<div class="box">
							<a href="<?=$linkcurso?>" class="">
								<div class="middler padLR20">
									<h3 class="f24"><?=$curso['nombre']?></h3>
									<p><?=$state?></p>
									<p class="mar0">Precio: <b><?=$curso['costo']?> USD</b><br>Cantidad de clases: <b><?=$clases?></b></p>
								</div>
							</a>
						</div>
					</div>

				<? } ?>

				<?unset($clases)?>

			<? } ?>

		</div>
		
	</div>

</section>