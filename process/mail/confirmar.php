<?

$destinatario = 'inscripciones@epasieducacion.com'; //cuenta destino
$subject = "Inscripción pendiente (revisar)";

$text.= '<p>[INFORME AUTOMÁTICO]</p>'."\n";
$text.= '<p>El usuario <b>'.$_SESSION['u']['perfil']['nombre'].' '.$_SESSION['u']['perfil']['apellido'].'</b> ('.$_SESSION['u']['email'].') inició el proceso de inscripción a uno de los cursos, pero seleccionó una de las opciones sensibles a revisión.</p>'."\n";
$text.= '<p>Las opciones seleccionadas en cuanto a datos sensibles son:</p>'."\n";
$text.= '<ul><li>¿Cuál es su postura frente al aborto?: <b>'.$_SESSION['u']['perfil']['proaborto'].'</b>.</li>'."\n";
$text.= '<li>¿Tiene o tuvo alguna adicción sexual?: <b>'.$valores['adiccion_sexual'].'</b>.</li>'."\n";
$text.= '<li>¿Tiene tendencias homosexuales?: <b>'.$valores['tendencia_homosexual'].'</b>.</li>'."\n";
$text.= '<li>¿Ha tenido conductas abusivas con niños o adolescentes?: <b>'.$valores['abusador'].'</b>.</li>'."\n";
$text.= '<li>¿Ha tenido acusaciones de conductas abusivas con niños o adolescentes?: <b>'.$valores['acusado_abuso'].'</b>.</li>'."\n";
$text.= '<li>¿Ha cometido acoso sexual contra otras peronas?: <b>'.$valores['acosador'].'</b>.</li>'."\n";
$text.= '<li>¿Ha sido acusado por acoso sexual a adultos?: <b>'.$valores['acusado_acoso'].'</b>.</li>'."\n";
$text.= '<li>¿Consume pornografia?: <b>'.$valores['pornografia'].'</b>.</li>'."\n";
$text.= '<li>¿Se encuentra actualmente en tratamiento psicológico o psiquiátrico?: <b>'.$valores['tratamiento'].'</b>.</li>'."\n";
$text.= '<li>¿Actualmente toma alguna medicación como ser pastillas para dormir, tranquilizantes, psicofármacos?: <b>'.$valores['medicación'].'</b>.</li></ul>'."\n";
$text.= '<p>Revisar y aceptar (o rechazar) la inscripción.</p>'."\n";

?>