<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <div class="card border-<?=$color?> marT30">
                    <div class="card-header b alert-<?=$color?>">
                        <?=$titulo?>
                    </div>
                    <div class="card-body a-center padT25">
                        
                        <h3 class="marB20"><?=$resp_titulo?></h3>
                        <div class="f17">
                            <p class="marB30"><?=$resp_texto?></p>
                            <? if($pow_get['Id']==200){ ?>
                                <p><a href="cursos/detail/<?=$_SESSION['inscripcion']?>/" class="btn btn-success w25 marR10">Iniciar curso</a></p>
                            <? } ?>
                        </div>

                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>