<?

// Cargo la data del curso

foreach(regById("cursos", $_SESSION['inscripcion']) as $curso);

_updateRegs("users_cursos", 
    array(
        'estado' => 1
    ), 
    array(
        'userID' => $_SESSION['user_learn'], 
        'cursoID' => $_SESSION['inscripcion']
    )
);

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <div class="card border-success marT30">
                    <div class="card-header b alert-success">
                        Inscripción exitosa
                    </div>
                    <div class="card-body a-center">
                        
                        <h3 class="marB15">¡Proceso de inscripción exitoso!</h3>
                        <div class="f17">
                            <p class="marB10">Tus datos fueron cargados correctamente, y ahora sólo queda un paso para poder comenzar con el cursado.</p>
                            <p class="marB10 b marT20 marB30">Por favor elige cómo quieres abonar el curso:</p>
                            <p>
                                <a href="<?=$curso['codigo_mp']?>" class="btn btn-lg btn-primary w25 marR10">Mercado Pago ($)</a>
                                <a href="<?=$curso['codigo_paypal']?>" class="btn btn-lg btn-primary w25">Paypal (USD)</a>
                            </p>
                            <p class="text-muted f13 lh18 em marT40 padLR80">(*) En cualquiera de los dos casos serás redirigido/a a una plataforma segura para realizar el pago sin riesgos, y al finalizar el proceso de pago serás enviado nuevamente a nuestro sistema.</p>
                        </div>

                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>