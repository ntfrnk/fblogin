<header>
	<div class="container">
		<nav class="navegacion d-none d-md-block">
			<ul>
				<? if(empty($_SESSION['user_learn'])){ ?>
					<li><a href="login/"><i class="fa fa-sign-in-alt"></i> Ingresar</a></li>
					<li><a href="registro/"><i class="fa fa-user"></i> Registrarme</a></li>
				<? } else { ?>
					<li><a href="<?=$pow_base?>"><i class="fa fa-home"></i> Home</a></li>
					<? if($_SESSION['admin_learn']!=1){ ?>
						<li><a href="cursos/all/"><i class="fa fa-chalkboard"></i> Mis cursos</a></li>
						<!--li><a href="cursos/user/"><i class="fa fa-graduation-cap"></i> Mis Cursos</a></li-->
					<? } else { ?>
						<li><a href="gestion/"><i class="fa fa-list-alt"></i> Gestionar</a></li>
					<? } ?>
					<li>
						<a href="mensajes/">
							<i class="fa fa-envelope"></i> Mensajes
							<? if(cant_mensajes()>0){ ?>
								<span class="nmess"><?=cant_mensajes()?></span>
							<? } ?>
						</a>
					</li>
					<li><a href="config/data-personal/"><i class="fa fa-cog"></i> Mis datos</a></li>
					<li><a href="logout/"><i class="fa fa-sign-out-alt"></i> Salir</a></li>
				<? } ?>
			</ul>
		</nav>
		<div class="d-block d-md-none float-right f30 lh70">
			<a href="javascript:;" class="show-menu"><i class="fa fa-bars"></i></a>
		</div>
		<div class="logo" style="font-family: Muli;">
			<a href="<?=$pow_base?>" class="f40 text-white lh70 bold" style="text-decoration: none;">
				EPASI<SMALL class="f18" style="font-family: Fjalla One;"> EDUCACIÓN</SMALL>
			</a>
		</div>
	</div>
</header>

<div class="menu-movil d-block d-md-none">
	<ul>
		<? if(empty($_SESSION['user_learn'])){ ?>
			<li><a href="login/"><i class="fa fa-sign-in-alt"></i> Ingresar</a></li>
			<li><a href="registro/"><i class="fa fa-user"></i> Registrarme</a></li>
		<? } else { ?>
			<li><a href="<?=$pow_base?>"><i class="fa fa-home"></i> Home</a></li>
			<? if($_SESSION['admin_learn']!=1){ ?>
				<li><a href="cursos/all/"><i class="fa fa-chalkboard"></i> Mis cursos</a></li>
				<!--li><a href="cursos/user/"><i class="fa fa-graduation-cap"></i> Mis Cursos</a></li-->
			<? } else { ?>
				<li><a href="gestion/"><i class="fa fa-list-alt"></i> Gestionar</a></li>
			<? } ?>
			<li>
				<a href="mensajes/">
					<i class="fa fa-envelope"></i> Mensajes
					<? if(cant_mensajes()>0){ ?>
						<span class="nmess"><?=cant_mensajes()?></span>
					<? } ?>
				</a>
			</li>
			<li><a href="config/data-personal/"><i class="fa fa-cog"></i> Mis datos</a></li>
			<li><a href="logout/"><i class="fa fa-sign-out-alt"></i> Salir</a></li>
		<? } ?>
	</ul>
</div>

<?
/*
if(!empty($_SESSION['user_learn'])){

$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where u.Id=p.userID and u.Id='".$_SESSION['user_learn']."'";
$users = query($sql);
foreach($users as $userInfo);
*/
?>

<!-- <div aria-label="breadcrumb">
	<div class="breadcrumb col-12 marB0">
		<div class="container align-right d-none d-md-block">
			<span class="breadcrumb-item active">
				<?=$userInfo['nombre']?> <?=$userInfo['apellido']?> (<?=$userInfo['email']?>)
			</span>
		</div>
		<div class="container align-center d-block d-md-none">
			<span class="breadcrumb-item active">
				<?=$userInfo['nombre']?> <?=$userInfo['apellido']?> (<?=$userInfo['email']?>)
			</span>
		</div>
	</div>
</div> -->

<? //} ?>