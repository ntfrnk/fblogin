<?

$antecedentes_pdf = 'upload/antecedentes/'.md5($_SESSION['user_learn']).'.pdf';
$antecedentes_jpg = 'upload/antecedentes/'.md5($_SESSION['user_learn']).'.jpg';
if(file_exists($antecedentes_pdf)){
    $antecedentes = $antecedentes_pdf;
    $antecedentes_name = md5($_SESSION['user_learn']).'.pdf';
} elseif(file_exists($antecedentes_jpg)){
    $antecedentes = $antecedentes_jpg;
    $antecedentes_name = md5($_SESSION['user_learn']).'.jpg';
}

$id1_pdf = 'upload/identificacion/'.md5($_SESSION['user_learn']).'.pdf';
$id1_jpg = 'upload/identificacion/'.md5($_SESSION['user_learn']).'.jpg';
if(file_exists($id1_pdf)){
    $id1 = $id1_pdf;
    $id1_name = md5($_SESSION['user_learn']).'.pdf';
} elseif(file_exists($id1_jpg)){
    $id1 = $id1_jpg;
    $id1_name = md5($_SESSION['user_learn']).'.jpg';
}

$id2_pdf = 'upload/identificacion/'.md5($_SESSION['user_learn']).'_2.pdf';
$id2_jpg = 'upload/identificacion/'.md5($_SESSION['user_learn']).'_2.jpg';
if(file_exists($id2_pdf)){
    $id2 = $id2_pdf;
    $id2_name = md5($_SESSION['user_learn']).'_2.pdf';
} elseif(file_exists($id2_jpg)){
    $id2 = $id2_jpg;
    $id2_name = md5($_SESSION['user_learn']).'_2.jpg';
}

$video_mp4 = 'upload/video/'.md5($_SESSION['user_learn']).'.mp4';
if(file_exists($video_mp4)){
    $video = $video_mp4;
    $video_name = md5($_SESSION['user_learn']).'.mp4';
}

$next_ok = 0;

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-12">
                
                <h1>Gestionar mis datos</h1>

                <p class="f18">En este espacio puedes gestionar todos tus datos. Te recomendamos mantenerlos siempre completos y actualizados.</p>

                <div class="menu-datos">
                    <ul>
                        <li><a href="config/data-personal/">Datos personales</a></li>
                        <li><a href="config/data-contacto/">Datos de contacto</a></li>
                        <li><a href="config/data-perfil/">Perfil de postulante</a></li>
                        <li><a href="config/data-referencia/">Personas de referencia</a></li>
                        <li class="active">Documentos importantes</li>
                    </ul>
                </div>
                
                <div class="card card-form-new">
                    <div class="card-header b">
                        Documentación importante
                    </div>
                    <div class="card-body">
                        <div class="form-new">

                            <div class="form-group row justify-content-center row-form-new">    
                                <? if($_SESSION['resp']=="ok"): ?>
                                    <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                        <strong>¡Perfecto!</strong> El archivo se cargó correctamente.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <? unset($_SESSION['resp']) ?>
                                <? elseif($_SESSION['resp']=='error'): ?>
                                    <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                        <strong>¡Ups!</strong> No se cargar el archivo.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <? unset($_SESSION['resp']) ?>
                                <? elseif($_SESSION['resp']=='delok'): ?>
                                    <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                        El archivo se eliminó correctamente.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <? unset($_SESSION['resp']) ?>
                                <? endif; ?>
                            </div>

                            <form action="process/user-data-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <label class="col-md-10 col-xs-12 marT5">Certificado de antecedentes penales <small class="f13">(o equivalente en su país)</small>: (<a href="javascript:;" onclick="open_alert('Uno de los requisitos para formarse en EPASI es la presentación del Certificado de Antecedentes Penales (Certificado de Buena Conducta) emitido por la policía. Tenga a bien solicitarlo con tiempo y adjuntarlo en este formulario. El mismo no puede tener una antigüedad mayor a un año. El mismo podrá ser presentado durante el cursado. Es requisito para ser certificado como participante.')">?</a>):</label>
                                    <? if($antecedentes): ?>
                                        <? $next_ok++; ?>
                                        <div class="col-12">
                                            [Archivo cargado] 
                                            <a href="<?=$antecedentes?>" download>Descargar</a> 
                                            <a href="javascript:;" onclick="deletefile('<?=$antecedentes_name?>', 'antecedentes');" class="text-danger">Eliminar</a> 
                                        </div>
                                    <? else : ?>
                                        <div class="row">
                                            <input type="hidden" name="loadtype" value="antecedentes">
                                            <input type="file" name="archivo" class="form-control col-md-8 col-xs-12" accept=".jpg,.pdf" required>
                                            <button type="submit" class="btn btn-success col-md-4 col-xs-12">Cargar archivo</button>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </form>
                            <hr>
                            <form action="process/user-data-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center marT25">
                                    <label for="antecedentes" class="col-md-10 col-xs-12 marT5">Video de presentación (<a href="javascript:;" onclick="open_alert('Video en forma de entrevista personal. Por favor haga click en el link «Guía para el video», donde encontrará las indicaciones correspondientes.');">?</a>) <small><a href="javascript:;" onclick="open_alert2('Estimado/a, aquí le dejamos las preguntas que le servirán como guía para que usted filme su video, el mismo debe durar entre 3 y 5 minutos.<br><br>1) Nombre y Apellido<br>2) Edad<br>3) Ocupación o Profesión<br>4) ¿Cómo está compuesta su familia?<br>5) ¿Por qué razón eligió tomar este curso?<br>6) ¿Cómo te enteraste del curso?<br>7) ¿Nos puede contar su experiencia de trabajar con niños? (si la tuvo).<br>8) Cuéntenos brevemente como fue su infancia.<br>9) Ante algún inconveniente, ¿a quién podríamos dirigirnos? ¿Quién puede responder por usted?<br>10) ¿Cuáles son las expectativas que tiene con respecto a este curso?');">Guía para el video</a></small>:</label>
                                    <? if($video): ?>
                                        <? $next_ok++; ?>
                                        <div class="col-12">
                                            [Archivo cargado] 
                                            <a href="<?=$video?>" download>Descargar</a> 
                                            <a href="javascript:;" onclick="deletefile('<?=$video_name?>', 'video');" class="text-danger">Eliminar</a> 
                                        </div>
                                    <? else : ?>
                                        <div class="row">
                                            <input type="hidden" name="loadtype" value="video">
                                            <input type="file" name="archivo" class="form-control col-md-8 col-xs-12" accept=".mp4" required>
                                            <button type="submit" class="btn btn-success col-md-4 col-xs-12">Cargar archivo</button>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </form>
                            <hr>
                            <form action="process/user-data-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center marT25">
                                    <input type="hidden" name="loadtype" value="identificacion">
                                    <label class="col-md-10 col-xs-12 marT5">Identificación oficial frente: <small class="f12">(DNI, Pasaporte, Cédula, etc)</small>:</label>
                                    <? if($id1): ?>
                                        <? $next_ok++; ?>
                                        <div class="col-12">
                                            [Archivo cargado] 
                                            <a href="<?=$id1?>" download>Descargar</a> 
                                            <a href="javascript:;" onclick="deletefile('<?=$id1_name?>', 'identificacion');" class="text-danger">Eliminar</a> 
                                        </div>
                                    <? else : ?>
                                        <div class="row">
                                            <input type="file" name="archivo" class="form-control col-md-8 col-xs-12" accept=".jpg,.pdf" required>
                                            <button type="submit" class="btn btn-success col-md-4 col-xs-12">Cargar archivo</button>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </form>
                            <hr>
                            <form action="process/user-data-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center marT25">
                                    <input type="hidden" name="loadtype" value="identificacion">
                                    <label class="col-md-10 col-xs-12 marT5">Identificación oficial dorso: <small class="f12">(DNI, Pasaporte, Cédula, etc)</small>:</label>
                                    <? if($id2): ?>
                                        <div class="col-12">
                                            [Archivo cargado] 
                                            <a href="<?=$id2?>" download>Descargar</a> 
                                            <a href="javascript:;" onclick="deletefile('<?=$id2_name?>', 'identificacion');" class="text-danger">Eliminar</a> 
                                        </div>
                                    <? else : ?>
                                        <div class="row">
                                            <input type="hidden" name="id2" value="1">
                                            <input type="file" name="archivo" class="form-control col-md-8 col-xs-12" accept=".jpg,.pdf" required>
                                            <button type="submit" class="btn btn-success col-md-4 col-xs-12">Cargar archivo</button>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>