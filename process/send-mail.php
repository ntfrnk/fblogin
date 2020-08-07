<?

$header = "From: EPASI Educación <no-reply@epasieducacion.com> \nReply-To: info@epasieducacion.com"."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=utf-8\n";

include("mail/_template.php");

mail($destinatario,$subject,$html,$header);

?>