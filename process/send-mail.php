<?

$header = "From: EPASI Educación <no-reply@epasieducacion.com> \nReply-To: info@epasieducacion.com"."\n";

include("mail/_template.php");

mail($destinatario,$subject,$html,$header);

?>