<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-10">
                
                <h1>Proceso de inscripción</h1>

                <p class="f18">A través de estos pasos podrás inscribirte en el curso que seleccionaste. Por favor, rellena todos los datos que se te solicitan para agilizar el proceso de admisión. Si los datos ya están cargados y son correctos, sólo haz click en "Continuar al paso siguiente".</p>

                <div class="pasos">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li class="active">5</li>
                        <li>6</li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-header b">
                        Documentación importante
                    </div>
                    <div class="card-body">
                        <div class="padLR30 padTB20">
                            <form action="process/user-inscription-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center">
                                    <label class="col-md-10 col-xs-12 marT5">Certificado de antecedentes penales <small class="f13">(o equivalente en su país)</small>: (<a href="javascript:;" onclick="open_alert('Uno de los requisitos para formarse en EPASI es la presentación del Certificado de Antecedentes Penales (Certificado de Buena Conducta) emitido por la policía. Tenga a bien solicitarlo con tiempo y adjuntarlo en este formulario. El mismo no puede tener una antigüedad mayor a un año. El mismo podrá ser presentado durante el cursado. Es requisito para ser certificado como participante.')">?</a>):</label>
                                    <? if($antecedentes): ?>
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
                            <form action="process/user-inscription-upload.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center row-form-new a-center marT25">
                                    <label for="antecedentes" class="col-md-10 col-xs-12 marT5">Video de presentación (<a href="javascript:;" onclick="open_alert('Video en forma de entrevista personal. Por favor haga click en el link «Guía para el video», donde encontrará las indicaciones correspondientes. Si prefiere puede grabar el video ingresando directamente desde su celular.');">?</a>) <small><a href="javascript:;" onclick="open_alert2('Estimado/a, aquí le dejamos las preguntas que le servirán como guía para que usted filme su video, el mismo debe durar entre 3 y 5 minutos.<br><br>1) Nombre y Apellido<br>2) Edad<br>3) Ocupación o Profesión<br>4) ¿Cómo está compuesta su familia?<br>5) ¿Por qué razón eligió tomar este curso?<br>6) ¿Cómo te enteraste del curso?<br>7) ¿Nos puede contar su experiencia de trabajar con niños? (si la tuvo).<br>8) Cuéntenos brevemente como fue su infancia.<br>9) Ante algún inconveniente, ¿a quién podríamos dirigirnos? ¿Quién puede responder por usted?<br>10) ¿Cuáles son las expectativas que tiene con respecto a este curso?');">Guía para el video</a></small>:</label>
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
                            <form action="process/user-inscription-upload.php" method="POST" enctype="multipart/form-data">
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
                            <form action="process/user-inscription-upload.php" method="POST" enctype="multipart/form-data">
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
                            <div class="form-group row justify-content-center row-form-new marT50">
                                <label for="" class="col-md-3 col-xs-12 marT5">&nbsp;</label>
                                <div class="col-md-6 padL0">
                                    <a href="cursos/inscripcion-sixth/" class="btn btn-primary<?// if($next_ok<2){ echo ' disabled'; } ?>">Continuar al paso siguiente »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>