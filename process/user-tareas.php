<?

include("../config/config.php");

$tareas = listReg("users_tareas", "where userID='".$pow_post['Id']."' and estado!='2'");

?>

<div class="marT20">

	<? if(count($tareas)!=0){ ?>

		<? foreach($tareas as $tarea){ ?>

			<div class="padT10 padB5 padLR20 marB15 border-box">
				<strong>Clase: </strong><?=campoRegById("cursos_clases", $tarea['claseID'], "titulo")?> (<?=$tarea['claseID']?>)
				<br><strong>Estado: </strong>
				<? if($tarea['estado']==1){ ?>
					<p class="badge badge-warning inline-block">Pendiente de revisión</p> &nbsp; 
					<a href="javascript:;" class="btn btn-sm btn-success f13" onclick="user_tarea(<?=$tarea['userID']?>, <?=$tarea['claseID']?>);">Revisar</a>
				<? } elseif($tarea['estado']==2){ ?>
					<p class="badge badge-success inline-block">Aprobado</p>
				<? } else { ?>
					<p class="badge badge-warning inline-block">Aguardando calificación</p> &nbsp; 
					<a href="javascript:;" class="btn btn-sm btn-success f13" onclick="user_tarea(<?=$tarea['userID']?>, <?=$tarea['claseID']?>);">Calificar</a>
				<? } ?>
			</div>

		<? } ?>

	<? } else { ?>

		<div class="padT10 padB15 padLR20 marB15 border-box">
			<i>Este usuario no tiene tareas para corregir.</i>
		</div>

	<? } ?>

</div>