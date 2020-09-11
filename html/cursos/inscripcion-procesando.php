<?

$registro = listReg("users_cursos", "where userID='".$_SESSION['user_learn']."' and estado in ('0','1')", "1,0", "rand()");

if(count($registro) != 0){

    foreach($registro as $reg);

    if(!isset($_SESSION['inscripcion']) || empty($_SESSION['inscripcion'])){
        $_SESSION['inscripcion'] = $reg['cursoID'];
    }

} else {

    header("Location: ".$pow_base."cursos/all/");

}

?>


<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>
                
                <div class="card border-primary marT30">
                    <div class="card-header b">
                        En proceso
                    </div>
                    <div class="card-body a-center">
                        
                        <h3 class="marB15">Estamos procesando tu inscripción</h3>
                        <div class="f17">
                            <p class="marB10">Tus datos fueron cargados correctamente, y ahora nos toca procesar esa información. Te pedimos que aguardes nuestro contacto, y en breve te estaremos informando los pasos a seguir.</p>
                            <p class="marB10">¡Muchas gracias por tu interés en esta capacitación!</p>
                        </div>

                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>