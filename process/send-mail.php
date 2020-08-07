<?

$header = "From: EPASI Educación <no-reply@epasieducacion.com> \nReply-To: info@epasieducacion.com"."\n";

ob_start();

include("mail/_template.php");

$html = ob_get_clean();

mail($destinatario,$subject,$html,$header);

?>