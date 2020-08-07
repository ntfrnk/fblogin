<?

$destinatario = 'finanzas@epasi.org'; //cuenta destino
$subject = "Nuevo pago realizado";

$text.= '<p>[INFORME AUTOMÁTICO]</p>'."\n";
$text.= '<p>El usuario <b>'.$_SESSION['u']['perfil']['nombre'].' '.$_SESSION['u']['perfil']['apellido'].'</b> ('.$_SESSION['u']['email'].') se inscribió satisfactoriamente a un curso.</p>'."\n";
$text.= '<p>El mismo realizó el pago del curso a través de <b>'.$medio_pago.'</b> exitosamente.</p>'."\n";

?>