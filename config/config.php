<?

@session_start();

/*  CONFIGURACIÓN GLOBAL
    --------------------

	Posibles valores:

	a) - "local" - (En caso de estar trabajando sobre el servidor local)
	b) - "remoto" - (Si se está usando un servidor remoto)
	C) - "otro" - (Cuando se está usando un tercer servidor para testing u otro uso)

*/

$pow_location = "remote";
$pow_language = "es";





/*  CONFIGURACIÓN DE RUTAS GENERALES
    --------------------------------

	En esta sección se configura globalmente las rutas de acceso al árbol del CMS.

*/


if ( $pow_location == "local" ) :


	/* CONFIGURACIÓN DE PANEL */

	// Protocolo del servidor | Ej: "http://" o "https://"
	$pow_protocol = "http://";

	// Nombre del servidor | ej: superpow.net
	$pow_domain = $_SERVER['SERVER_NAME'];

	// Subdominio de instalación (si lo hubiera) | Ej: "/superpow/"
	$pow_subdomain = "/epasieducacion.com/";

	// Ruta física del servidor | Ej: "C:/docs/http/www"
	$pow_document_root = $_SERVER['DOCUMENT_ROOT'];

	// Configuración de errores
	$pow_error = 0;


	/* CONFIGURACIÓN DE MYSQL */

	// Nombre o dominio del servidor MySQL
	$pow_mysql_host = "localhost";

	// Nombre de la base de datos
	$pow_mysql_database = "epasi_db";

	// Nombre de usuario de la base de datos
	$pow_mysql_user = "root";

	// Contraseña de usuario de la base de datos
	$pow_mysql_password = "";


else :

	/* CONFIGURACIÓN DE PANEL */

	// Protocolo del servidor | Ej: "http://" o "https://"
	$pow_protocol = "https://";

	// Nombre del servidor | ej: superpow.net
	$pow_domain = $_SERVER['SERVER_NAME'];

	// Subdominio de instalación (si lo hubiera) | Ej: "/superpow/"
	$pow_subdomain = "/";

	// Ruta física del servidor | Ej: "C:/docs/http/www"
	$pow_document_root = $_SERVER['DOCUMENT_ROOT'];

	// Configuración de errores
	$pow_error = 0;


	/* CONFIGURACIÓN DE MYSQL */

	// Nombre o dominio del servidor MySQL
	$pow_mysql_host = "localhost";

	// Nombre de la base de datos
	$pow_mysql_database = "epasinew_db";

	// Nombre de usuario de la base de datos
	$pow_mysql_user = "epasinew_db";

	// Contraseña de usuario de la base de datos
	$pow_mysql_password = "Daniel412*";

endif;





/*  CONFIGURACIÓN DE MENSAJES DE ERROR
    ----------------------------------

	Desde aquí se configura el muestreo de mensajes de error. Hay tres tipos de configuración disponibles,
	dependiendo del valor de la variable $pow['global']['error'].

	- Valor: 0 ---> No se muestran los errores (E_NONE).
	- Valor: 1 ---> Se muestran todos los errores (E_ALL).

*/

if($pow_error==0){
	ini_set('display_errors', 'E_NONE');
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', E_ALL);
	error_reporting(E_ALL);
}





/*  CONFIGURACIÓN DE CONEXIÓN A MYSQL
    ---------------------------------

	Aquí se realiza la conexión al servidor MySQL que servirá la base de datos para el funcionamiento de SuperPow!! CMS.

*/

mysql_connect($pow_mysql_host, $pow_mysql_user, $pow_mysql_password);
mysql_select_db($pow_mysql_database);
mysql_query("SET NAMES 'utf8'");





/*  VALIDACIÓN DE VARIABLES GET
    ---------------------------

	Se recibe, valida, y formatea las variables GET.

*/

foreach ($_GET as $key => $value) {
	$pow_get[$key] = mysql_real_escape_string($value);
}





/*  VALIDACIÓN DE VARIABLES POST
    ----------------------------

	Se recibe, valida, y formatea las variables POST.

*/

foreach ($_POST as $key => $value) {
	$pow_post[$key] = mysql_real_escape_string($value);
}





/*  DEFINICIÓN DE VARIABLES BASE
    ----------------------------

	Desde aquí se define las variables $pow_root, para rutas físicas del servidor;
	y $pow_base, para rutas virtuales.

*/

/* RUTAS DEL PANEL DE CONTROL */

// Se definine la variable general de rutas virtuales
$pow_base = $pow_protocol;
$pow_base.= $pow_domain;
$pow_base.= $pow_subdomain;

// Se define la variable general de rutas físicas
$pow_root = $pow_document_root;
$pow_root.= $pow_subdomain;

$pow_base_sin = str_replace("www.", "", $pow_base);
$pow_base_con_proc = str_replace("http://", "http://www.", $pow_base);
$pow_base_con = str_replace("www.www.", "www.", $pow_base);


/* RUTAS DEL SITIO WEB */

// Se definine la variable general de rutas virtuales
$pow_site_base = $pow_site_protocol;
$pow_site_base.= $pow_site_domain;
$pow_site_base.= $pow_site_subdomain;

// Se define la variable general de rutas físicas
$pow_site_root = $pow_site_document_root;
$pow_site_root.= $pow_site_subdomain;





/*  DEFINICIÓN DE VARIABLES MODULARES
    ---------------------------------

	Desde aquí se define las variables $pow['module'], útiles para manejar las configuraciones generales de los módulos.

*/

$pow_module_root = $pow_root."modules/";
$pow_module_base = $pow_base."modules/";





/*  DEFINICIÓN DE VARIABLES PARA UPLOADS
    ------------------------------------

	Desde aquí se define las variables $pow['upload'], útiles para manejar las rutas de archivos cargados.

*/

// Rutas físicas de descargas

$pow_upload_root = $pow_site_root."upload/";


// Rutas virtuales de descargas

$pow_upload_base = $pow_site_base."upload/";
$pow_upload_base_img = $pow_upload_base."images/";
$pow_upload_base_imgxs = $pow_upload_base_img."crop-xs/";
$pow_upload_base_imgsm = $pow_upload_base_img."crop-sm/";
$pow_upload_base_imgmd = $pow_upload_base_img."crop-md/";
$pow_upload_base_imglg = $pow_upload_base_img."crop-lg/";
$pow_upload_base_imgmsm = $pow_upload_base_img."crop-msm/";
$pow_upload_base_imgmlg = $pow_upload_base_img."crop-mlg/";





/*  INCLUSIÓN DE LIBRERÍAS GENERALES
    --------------------------------

	Aquí se invoca a las librerías necesarias para el funcionamiento de SuperPow!! CMS.

*/

$pathLib = $pow_root."libraries";
$dirLib = opendir($pathLib);
while ($lib = readdir($dirLib)) {
	if(($lib!=".")&&($lib!="..")&&(substr($lib,0,1)!="_")) :
		$loadLib = $pathLib."/".$lib;
		include($loadLib);
	endif;
}
closedir($dirLib);





/*  INCLUSIÓN DE LIBRERÍAS MODULARES
    --------------------------------

	Aquí se invoca a las librerías necesarias para el funcionamiento de los módulos.

*/


$funciones = "includes/html/".$pow_get['seccion']."/___funciones.php";

if(file_exists($funciones) && !is_dir($funciones)) {
	include($funciones);
}

$modconfig = "includes/html/".$pow_get['seccion']."/___config.php";

if(file_exists($modconfig) && !is_dir($modconfig)) {
	include($modconfig);
}


include($pow_root."config/variables.php");


?>
