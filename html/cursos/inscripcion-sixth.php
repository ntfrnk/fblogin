<?

// Opciones tratamiento

if(isset($_SESSION['valores']['tratamiento'])) {
    $tratamiento = $_SESSION['valores']['tratamiento'];
} else {
    $tratamiento = $_SESSION['u']['perfil']['tratamiento'];
}

$trat = strtolower($tratamiento);
if(strstr($trat, 'no.') || strstr($trat, 'ninguno') || $trat == 'no'){
    $tratamiento = "";
}


// Opciones medicacion

if(isset($_SESSION['valores']['medicacion'])) {
    $medicacion = $_SESSION['valores']['medicacion'];
} else {
    $medicacion = $_SESSION['u']['perfil']['medicacion'];
}

$med = strtolower($medicacion);
if(strstr($med, 'no.') || strstr($med, 'no,') || strstr($med, 'ninguna') || $med == 'no'){
    $medicacion = "";
}

_updateRegs("users_cursos", 
    array(
        'step' => 6
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
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>

                <div class="pasos">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li class="active">6</li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-header b">
                        Declaración jurada
                    </div>
                    <div class="card-body">
                        <form action="process/user-inscription-sixth.php" method="POST">
                            <div class="padLR80 padTB20">
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Tiene problemas de adicción sexual?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="adiccion_sexual" id="adicsi" value="1" class="marR5" required><label for="adicsi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="adiccion_sexual" id="adicno" value="0" class="marR5"><label for="adicno" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Tiene tendencias homosexuales?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="tendencia_homosexual" id="homosi" value="1" class="marR5" required><label for="homosi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="tendencia_homosexual" id="homono" value="0" class="marR5"><label for="homono" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Ha tenido conductas abusivas con niños o adolescentes?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="abusador" id="abusi" value="1" class="marR5" required><label for="abusi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="abusador" id="abuno" value="0" class="marR5"><label for="abuno" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Ha tenido acusaciones de conductas abusivas con niños o adolescentes?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="acusado_abuso" id="acuabusi" value="1" class="marR5" required><label for="acuabusi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="acusado_abuso" id="acuabuno" value="0" class="marR5"><label for="acuabuno" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Ha cometido acoso sexual contra otras peronas?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="acosador" id="acosi" value="1" class="marR5" required><label for="acosi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="acosador" id="acono" value="0" class="marR5"><label for="acono" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Ha sido acusado por acoso sexual a adultos?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="acusado_acoso" id="acuacosi" value="1" class="marR5" required><label for="acuacosi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="acusado_acoso" id="acuacono" value="0" class="marR5"><label for="acuacono" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-12 b">¿Consume pornografia?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="pornografia" id="pornsi" value="1" class="marR5" required><label for="pornsi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="pornografia" id="pornno" value="0" class="marR5"><label for="pornno" class="marB0 fw400"> No</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <div class="col-12 b">¿Se encuentra actualmente en tratamiento psicológico o psiquiátrico?</div>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="tratamiento_check" id="chksi" class="marR10 tcheck" value="Sí" <? if(!empty($tratamiento)) { echo 'checked'; } else { echo ''; } ?>><label for="chksi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="tratamiento_check" id="chkno" class="marR10 tcheck" value="No" <? if(!empty($tratamiento)) { echo ''; } else { echo 'checked'; } ?>><label for="chkno" class="marB0 fw400"> No</label>
                                    </div>
                                    <div class="col-12 col-md-9 marT5 tratamiento-input none">
                                        <input type="text" class="form-control a-center" name="tratamiento" id="tratamiento" placeholder="Brinde detalles del mismo." value="<?=$tratamiento?>" <? if(empty($tratamiento)) { echo 'disabled'; } ?>>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new align-center">
                                    <label for="medicacion" class="col-md-10 col-xs-12 marT5">¿Actualmente toma alguna medicación como ser pastillas para dormir, tranquilizantes, psicofármacos?</label>
                                    <div class="col-12 marT5">
                                        <input type="radio" name="medicacion_check" id="mchksi" class="marR10 mcheck" value="Sí" <? if(!empty($medicacion)) { echo 'checked'; } else { echo ''; } ?>><label for="mchksi" class="marB0 fw400"> Sí</label> &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="medicacion_check" id="mchkno" class="marR10 mcheck" value="No" <? if(!empty($medicacion)) { echo ''; } else { echo 'checked'; } ?>><label for="mchkno" class="marB0 fw400"> No</label>
                                    </div>
                                    <div class="col-12 col-md-9 marT5 medicacion-input none">
                                        <input type="text" class="form-control a-center" name="medicacion" id="medicacion" placeholder="Detalle cuáles." value="<?=$medicacion?>" <? if(empty($medicacion)) { echo 'disabled'; } ?>>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-2 marT5 a-right">
                                        <input type="checkbox" name="aceptado" id="aceptado" class="inline-block" value="1" required>
                                    </div>
                                    <div class="col-10 a-left">
                                        <label for="aceptado" class="fw400"> Declaro que estas afirmaciones son verídicas y que no he omitido ninguna información requerida sobre mi persona.</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <div class="col-2 marT5 a-right">
                                        <input type="checkbox" name="terms" id="terms" class="inline-block" value="1" required>
                                    </div>
                                    <div class="col-10 a-left">
                                        <label for="terms" class="fw400"> Entiendo y acepto los <a href="javascript:;" onclick="open_modal('terminos')">Términos y Condiciones</a> establecidos por la Fundación EPASI para esta plataforma.</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-center row-form-new">
                                    <div class="col-md-12 a-center">
                                        <button type="submit" class="btn btn-primary">Finalizar proceso de inscripción</button>
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