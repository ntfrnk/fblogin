<?

// Cargo la data del curso

foreach(regById("cursos", $_SESSION['inscripcion']) as $curso);


if($pow_get['Id']==200 || $pow_get['Id']==210){

    foreach(listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and cursoID='".$_SESSION['inscripcion']."'", '1,0') as $insc);

    if(count($inscr)!=0 && $insc['estado']==1){

        _updateRegs("users_cursos", 
            array(
                'estado' => 2
            ), 
            array(
                'userID' => $_SESSION['user_learn'], 
                'cursoID' => $_SESSION['inscripcion']
            )
        );

        include("mail/nuevo-inscripto.php");
        include("send-mail.php");

    }
    
    $color = 'success';
    $titulo = 'Inscripción exitosa';
    $resp_titulo = '¡Tu pago fue aceptado!';
    $resp_texto = 'El pago que realizaste impactó correctamente en nuestro sistema, y ya se encuentra habilitada tu matrícula para comenzar a cursar.';

    if($pow_get['Id']==200){
        $medio_pago = "Mercado Pago";
    } else {
        $medio_pago = "Paypal";
    }

    $pago = listReg("users_pagos", "where userID='".$_SESSION['user_learn']."' and cursoID='".$_SESSION['inscripcion']."'", '1,0');

    if(count($pago)==0){

        _insertReg("users_pagos", 
            array(
                'userID' => $_SESSION['user_learn'], 
                'cursoID' => $_SESSION['inscripcion'],
                'medio' => $medio_pago,
                'estado' => 2
            )
        );
        
        include("mail/nuevo-pago.php");
        include("send-mail.php");

    }

} elseif($pow_get['Id']==300) {
    $color = 'warning';
    $titulo = 'Inscripción pendiente';
    $resp_titulo = '¡Tu pago fue aceptado!';
    $resp_texto = 'El pago que realizaste está siendo procesado, una vez que se confirme el mismo tu matrícula será habilitada para comenzar a cursar.';
} else {
    $color = 'danger';
    $titulo = 'Inscripción cancelada';
    $resp_titulo = '¡Ups! Tu pago fue cancelado';
    $resp_texto = 'El pago que intentaste realizar fue rechazado o cancelado, te sugerimos intentarlo con otro medio, o ponerte en contacto con nosotros para ayudarte a resolver este inconveniente.';
}

?>

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