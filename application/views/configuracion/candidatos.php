<?= $header?>
<?php
    //!Consultando la cedula
    if($_GET){
        $partido = $_GET['nombre'];
        $cedula = $_GET['cedula'];

        //Cunsulta api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://173.249.49.169:88/api/test/consulta/{$cedula}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);  

        $d = json_decode($output);
        
        $edad = calculaedad($d->FechaNacimiento);
        echo $partido;

    }
    
    
    //!Datos recibdos de la creacion del partido
    if(isset($_POST['crear']) || isset($_POST['candidatos'])){
        $d=new stdClass();
        $d->nombre = $_POST['nombre'];
        $d->siglas = $_POST['siglas'];
        $d->color = $_POST['color'];
        $d->eleccion = $_POST['eleccion'];
        $nombre_partido = $d->nombre;

        savePartidos($d);
    }

    //!Guardando los candidatos
    if(isset($_POST['agregarCand'])){
        $d=new stdClass();
        $d->nombre = $_POST['nombre'];
        $d->apellido = $_POST['apellido'];
        $d->cedula = $_POST['cedula'];
        $d->foto = $_POST['foto'];
        $d->partido = $_POST['partido'];
        $d->nivel = $_POST['nivel'];
        saveCandidatos($d);
    }
?>

<!---------------Formulario para ingresar los datos---------------------------------->
<div class="container">
<form action="" method="POST">
    <!--<input type="hidden" id="id" name="id" value="<?//php echo $id; ?>">-->
    <div class="row contenedorConf">
        <!--Ingresar datos------------------------------->
        <div class="col-md-10" id="ingresar_datos">
            <h4 class="text-center text-secondary">Agregar Candidatos</h4>
            <input type="hidden" name="foto" value="<?= isset($d->Foto)? $d->Foto:"";?>">
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Nombre/s:</label>
                <div class="col-sm-8">
                    <input value="<?=isset($d->Nombres)? $d->Nombres:"";?>" readonly name="nombre" type="text" class="form-control" id="inputNombre" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Apellido/s:</label>
                <div class="col-sm-8">
                    <input value="<?=isset($d->Apellido1)? $d->Apellido1:"";?> <?=isset($d->Apellido2)? $d->Apellido2:"";?>" readonly name="apellido" type="text" class="form-control" id="inputNombre" placeholder="">
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Cedula:</label>
                <div class="col-sm-8">
                    <input value="<?=isset($d->Cedula)? $d->Cedula:"";?>" readonly name="cedula" type="text" class="form-control" id="inputApellido" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Fecha de Nacimiento:</label>
                <div class="col-sm-8">
                    <input value="<?=isset($d->FechaNacimiento)? $d->FechaNacimiento:"";?>" readonly name="FNacimiento" type="text" class="form-control" id="inputTel" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Lugar de Nacimiento:</label>
                <div class="col-sm-8">
                    <input value="<?=isset($d->LugarNacimiento)? $d->LugarNacimiento:"";?>" readonly name="LNacimiento" type="text" class="form-control" id="inputTel" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Nivel a postularse:</label>
                <div class="col-sm-8">
                    <input value="" name="nivel" type="text" class="form-control" id="inputTel" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Partido:</label>
                <div class="col-sm-8">
                    <input readonly value="<?= (isset($_POST['crear']) || isset($_POST['candidatos']))?$_POST['nombre']: $partido; ?>" name="partido" type="text" class="form-control" id="inputEmail" readonly="readonly">
                </div>
            </div>
        </div>
    <!------------boton------------------>
         <div class="col-md-2" id="botones_basicos mx-auto">
            <div>
                <img src="<?= isset($d->Foto)? $d->Foto:"" ?>" alt="Imagen del candidato" class="imgCandidato">
            </div>
                <div class="btnBasico"><br><br>
                    <button name="consultar" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#consultar">Consultar cédula</button>
                    <button name="agregarCand" type="submit" class="btn btn-success btn-block">Agregar</button>
                </div>

            </div>
        </div>
</form>
<!--------------Fin del formulario para ingresar los datos-------------------------------->

<!----------------Tabla que muestra a los candidatos de este partido--------------------->

<form method="POST" action="">
    <div class=" container justify-content-center">
        <!--Tabla con datos de personal------------>
        <div class="">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Lugar de Nacimiento</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Partido</th>
                    <th scope="col">Foto</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <?php 
                    //$candidatos = showCandidatos();
                    //foreach($candidatos as $candidato){
                ?>
                        <!--<tr>
                        <th scope="row"><?=$candidato->id?></th>
                        <td><?=$candidato->nombre?></td>
                        <td><?=$candidato->apellido?></td>
                        <td><?=$candidato->cedula?></td>
                        <td><?=$candidato->motivo?></td>
                        <td><img src="<?=$candidato->foto?>" alt=""></td>-->
                        </tr>
                    <?php
                       // }
                    ?>
            </table>
        </div>
    </div>
</form>

<br><br><a href="<?= base_url('configuracion/partidos')?>"><button type="button" class="btn btn-secondary btn-block">Volver a crear Mas partidos</button></a>

<!----------FIn de la atala de candidatos------------------------------>



    <!-- Modal Para consultar la cedula-->
    <form action="" method="GET" id="frm2">
                <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalTitle">Consultar cédula</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <div>
                                        <input class="form-control text-center" type="text" placeholder="Ingrese la Cedula" name="cedula" id="cedula" onKeyPress="return soloNumeros(event)">
                                        <input value="<?= (isset($_POST['crear']))?$_POST['nombre']: ""; ?>" name="nombre" type="text" class="form-control" id="nombre" hidden>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Consultar</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!--Fin de Modal----------->
            </form>

<?= $footer?>