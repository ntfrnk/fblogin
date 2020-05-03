<?

include("../config/config.php");

$filename = date('Y-m-d')."_USUARIOS-EPASI.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$filename);

$sql = "Select * from pow_users as u, pow_users_perfil as p 
		where u.Id=p.userID order by apellido asc";

$gente = query($sql);

$columnas = array(
	"apellido" => "Apellido",
	"nombre" => "Nombre",
	"email" => "E-mail",
	"nacimiento" => "Fecha de nacimiento",
	"dni" => "Identificación estatal",
	"estado_civil" => "Estado civil",
	"pais" => "País",
	"provincia" => "Provincia",
	"ciudad" => "Ciudad",
	"direccion" => "Dirección",
	"cp" => "Código postal",
	"celular" => "Celular",
	"fijo" => "Teléfono fijo",
	"nacionalidad" => "Nacionalidad",
	"religion" => "Religión",
	"proaborto" => "Postura ante el aborto",
	"tratamiento" => "Tratamientos psicológicos / psiquiátricos",
	"medicacion" => "Consumo de medicamentos",
	"trabajo" => "Trabajo con niños",
	"referencia1_nombre" => "Referencia 1: Nombre",
	"referencia1_email" => "Referencia 1: E-mail",
	"referencia1_celular" => "Referencia 1: Celular",
	"referencia2_nombre" => "Referencia 2: Nombre",
	"referencia2_email" => "Referencia 2: E-mail",
	"referencia2_celular" => "Referencia 2: Celular",
	"razones" => "Razones para formarse como preventor",
	"concepcion" => "Concepción de familia"
);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.cabecera {
			font-weight: bold;
			color: #FFFFFF;
			background-color: green;
		}
		.celdas {
			border: solid 1pt #CCC;
			height: 22px;
			vertical-align: middle;
		}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<? foreach($columnas as $col){ ?>
					<th class="cabecera"><?=utf8_decode($col)?></th>
				<? } ?>
			</tr>
		</thead>
		<tbody>
			<? foreach($gente as $persona){ ?>
				<tr>
					<? foreach($columnas as $key => $col){ ?>
						<td class="celdas"><?=utf8_decode($persona[$key])?></td>
					<? } ?>					
				</tr>
			<? } ?>
		</tbody>
	</table>

</body>
</html>