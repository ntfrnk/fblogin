<?

$estados_civiles = array(
    'Soltero/a', 
    'Casado/a', 
    'Divorciado/a', 
    'Viudo/a'
);

foreach($estados_civiles as $key => $estado){
    if(isset($_SESSION['valores']['estado_civil'])){
        if($estado == $_SESSION['valores']['estado_civil']){
            $sel = $key;
        }
    } else {
        if($estado == $_SESSION['u']['perfil']['estado_civil']){
            $sel = $key;
        }
    }
}

?>

<section id="content">

	<div class="container">

		<div class="row marT50 justify-content-center">

            <div class="col-12">
                
                <h1>Gestionar mis datos</h1>

                <p class="f18">En este espacio puedes gestionar todos tus datos. Te recomendamos mantenerlos siempre completos y actualizados.</p>

                <div class="menu-datos">
                    <ul>
                        <li class="active">Datos personales</li>
                        <li><a href="config/data-contacto/">Datos de contacto</a></li>
                        <li><a href="config/data-perfil/">Perfil de postulante</a></li>
                        <li><a href="config/data-referencia/">Personas de referencia</a></li>
                        <li><a href="config/data-documentos/">Documentos importantes</a></li>
                    </ul>
                </div>
                
                <div class="card card-form-new">
                    <div class="card-header b">
                        Datos personales
                    </div>
                    <div class="card-body">
                        <form action="process/user-data-personal.php" method="POST">
                            <div class="form-new">

                                <div class="form-group row justify-content-center row-form-new">    
                                    <? if($_SESSION['resp']=="ok"): ?>
                                        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                            <strong>¡Perfecto!</strong> Los cambios se guardaron correctamente.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <? unset($_SESSION['resp']) ?>
                                    <? elseif($_SESSION['resp']=='error'): ?>
                                        <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                            <strong>¡Ups!</strong> No se pudieron guardar los cambios.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <? unset($_SESSION['resp']) ?>
                                    <? endif; ?>
                                </div>

                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nombre" class="col-md-4 col-xs-12 marT5">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" value="<? if(isset($_SESSION['valores']['nombre'])) { echo $_SESSION['valores']['nombre']; } else { echo $_SESSION['u']['perfil']['nombre']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Nombre" autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="apellido" class="col-md-4 col-xs-12 marT5">Apellido:</label>
                                    <input type="text" name="apellido" id="apellido" value="<? if($_SESSION['valores']['apellido']){ echo $_SESSION['valores']['apellido']; }else{ echo $_SESSION['u']['perfil']['apellido']; } ?>" class="form-control col-md-6 col-xs-12" placeholder="Apellido" autocomplete="off" pattern="[a-zA-Z\. áéíóúÑÁÉÍÓÚÑ]{3,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nacimiento" class="col-md-4 col-xs-12 marT5">Fecha de nacimiento:</label>
                                    <input type="date" name="nacimiento" id="nacimiento" value="<? if($_SESSION['valores']['nacimiento']){ echo $_SESSION['valores']['nacimiento'];}else{ echo $_SESSION['u']['perfil']['nacimiento'];} ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="dni" class="col-md-4 col-xs-12 marT5">Nº documento de identidad:</label>
                                    <input type="number" name="dni" id="dni" value="<? if($_SESSION['valores']['dni']){ echo $_SESSION['valores']['dni'];}else{ echo $_SESSION['u']['perfil']['dni'];} ?>" class="form-control col-md-6 col-xs-12" autocomplete="off" pattern="[0-9\.-]{5,20}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="nacionalidad" class="col-md-4 col-xs-12 marT5">Nacionalidad:</label>
                                    <input type="text" name="nacionalidad" id="nacionalidad" value="<? if($_SESSION['valores']['nacionalidad']){ echo $_SESSION['valores']['nacionalidad'];}else{ echo $_SESSION['u']['perfil']['nacionalidad'];} ?>" class="form-control col-md-6 col-xs-12" placeholder="Nacionalidad" autocomplete="off" pattern="[a-zA-Z]{4,30}" required>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="estado_civil" class="col-md-4 col-xs-12 marT5">Estado civil:</label>
                                    <select name="estado_civil" id="estado_civil" class="form-control col-md-6 col-xs-12" required>
                                        <? foreach($estados_civiles as $k => $estado_civil): ?>
                                            <option value="<?=$estado_civil?>"<? if($k == $sel){ echo ' selected'; } else { echo ''; } ?>><?=$estado_civil?></option>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center row-form-new">
                                    <label for="" class="d-none d-md-block col-md-3 col-xs-12 marT5">&nbsp;</label>
                                    <div class="col-xs-12 col-md-6 padLR0">
                                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

		</div>
		
	</div>

</section>