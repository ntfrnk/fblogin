<section id="content">

	<div class="container">

		<div class="row">

			<? foreach(listReg("users_cursos", "where userID='".$_SESSION['user_learn']."'", "", "userID,asc") as $curso){ ?>

				<div class="col-4 marTB50 align-center">
					<div class="box">
						<a href="cursos/detail/<?=$curso['cursoID']?>/" class="padTB50">
							<div class="">
								<i class="fa fa-chalkboard f75"></i>
							</div>
							<div class="marT20">
								<h3><?=$curso['cursoID']?></h3>
							</div>
						</a>
					</div>
				</div>

			<? } ?>

		</div>
		
	</div>

</section>