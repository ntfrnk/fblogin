<div class="scripts">
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/font-awesome/js/all.min.js"></script>
<script src="assets/scripts/scripts.js"></script>
<script src="assets/scripts/player.js?v=2020-04-20"></script>
<script src="assets/scripts/formularios.js"></script>
<script src="assets/scripts/actions.js?v=2020-04-09"></script>
<script src="assets/scripts/modals.js?v=2020-03-23"></script>

<? if($pow_get['seccion']=='cursos' && $pow_get['vista']=='class') : ?>
	<script src="https://vjs.zencdn.net/7.8.2/video.js"></script>
	<script>
		$("body").on("contextmenu",function(e){
			return false;
		});
		
		$('body').bind('cut copy paste', function (e) {
			e.preventDefault();
		});
	</script>
<? endif; ?>

<? if(!empty($_SESSION['uploadeado'])){ ?>

	<script type="text/javascript">
		$(document).on('ready', function(){
			$('.reg'+<?=$_SESSION['uploadeado']?>).trigger('click');
		});
	</script>

	<? $_SESSION['uploadeado'] = ""; ?>

<? } ?>

<? if(!empty($_SESSION['user_learn']) and faltanDatos($_SESSION['user_learn']) and $pow_get['seccion']!="config"){ ?>

	<script type="text/javascript">
		datosFaltantes();
	</script>

<? } ?>
</div>