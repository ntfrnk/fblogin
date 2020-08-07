<?

$destinatario = 'inscripciones@epasieducacion.com'; //cuenta destino
$subject = "Nuevo inscripto en la plataforma";

$text.= '<p>[INFORME AUTOMÁTICO]</p>'."\n";
$text.= '<p>El usuario <b>'.$_SESSION['u']['perfil']['nombre'].' '.$_SESSION['u']['perfil']['apellido'].'</b> ('.$_SESSION['u']['email'].') se inscribió satisfactoriamente a un curso.</p>'."\n";
$text.= '<p>Todos los datos ingresados son correctos (no hay datos sensibles para revisar).</p>'."\n";

?>