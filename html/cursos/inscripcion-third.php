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

$posturas = array('A favor', 'En contra');

if(isset($_SESSION['valores']['proaborto'])){
    $postura_actual = $_SESSION['valores']['proaborto'];
} else {
    $postura_actual = $_SESSION['u']['perfil']['proaborto'];
}

foreach($posturas as $key => $postura){
    if($postura == $postura_actual){
        $selected = $key;
    }
}

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>

                <div class="pasos">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li class="active">3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-header b">
                        Perfil del postulante
                    </div>
                    <div class="card-body">
                        <form action="process/user-inscription-third.php" method="POST">
                            <div class="padLR30 padTB20">
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="religion" class="col-md-10 col-xs-12 marT5">¿Practica alguna religión? ¿Cuál?</label>
                                    <input type="text" name="religion" id="religion" value="<? if(isset($_SESSION['valores']['religion'])) { echo $_SESSION['valores']['religion']; } else { echo $_SESSION['u']['perfil']['religion']; } ?>" class="form-control a-center col-md-8 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="proaborto" class="col-md-10 col-xs-12 marT5">¿Cuál es su postura frente al aborto? (A favor / en contra)</label>
                                    <select name="proaborto" id="proaborto" class="form-control col-md-8 col-xs-12" required>
                                        <option value="" disabled>Elige una opción</option>
                                        <? foreach($posturas as $k => $postura){ ?>
                                            <? if($selected == $k){ $sel = ' selected'; } else { $sel = ''; } ?>
                                            <option value="<?=$postura?>"<?=$sel?>><?=$postura?></option>
                                        <? } ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="trabajo" class="col-md-10 col-xs-12 marT5">¿Ha trabajado con niños/as? ¿Dónde?</label>
                                    <input type="text" name="trabajo" id="trabajo" value="<? if(isset($_SESSION['valores']['trabajo'])) { echo $_SESSION['valores']['trabajo']; } else { echo $_SESSION['u']['perfil']['trabajo']; } ?>" class="form-control a-center col-md-8 col-xs-12" autocomplete="off" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="razones" class="col-md-10 col-xs-12 marT5">Indique las razones por las que quisiera formarse como Preventor/a<br>del Abuso Sexual Infantil <small class="f12">(Máximo 200 caracteres)</small></label>
                                    <textarea name="razones" rows="3" id="razones" class="form-control col-md-8 col-xs-12" required><? if(isset($_SESSION['valores']['razones'])) { echo $_SESSION['valores']['razones']; } else { echo $_SESSION['u']['perfil']['razones']; } ?></textarea>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="col-md-3 col-xs-12 marT5">&nbsp;</label>
                                    <div class="col-md-6 padL0">
                                        <button type="submit" class="btn btn-primary">Continuar al paso siguiente »</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>