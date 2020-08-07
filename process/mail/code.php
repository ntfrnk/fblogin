<?

$destinatario = $pow_post['email']; //cuenta destino
$subject = "Valida tu correo electrónico";

$text.= '<p>Estimado usuario:</p>'."\n";
$text.= '<p>Para validar tu correo electrónico y comenzar a usar tu cuenta, por favor copia el siguiente código, y pégalo donde el sistema te lo indique:</p>'."\n";
$text.= '<p class="code">'.$code.'</p>'."\n";
$text.= '<p>¡Bienvenido a EPASI Capacitación!</p>'."\n";
$text.= '<p><br>--<br>Equipo EPASI</p>'."\n";

?>