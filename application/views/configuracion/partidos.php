<?= $header?>
<div class="container">
    <div class="contenedorConf border-bottom encabezado border-dark">
        <h4>Configura los partidos</h4>
        <p>Los partidos son las diferentes agrupaciones que participaran en la elección</p>
        
    </div>
    <div>
        <form method="POST">
        <!--------------Partidos----------------------------->
        <div class="cuerpo">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="" placeholder="Ingresa el Nombre del partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Siglas</label>
                <input type="text" class="form-control" id="siglas" placeholder="Siglas del Partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Color</label>
                <input type="text" class="form-control" id="color" placeholder="Color que representa al partido">
            </div>
        </div>
        <!--------------Fin de Partidos----------------------------->
            <div class="border-bottom encabezado border-dark border-top">
                <h4>Candidatos</h4>
                <p>Registre a los candidatos que pertenecen a este partido, asi como el puesto al que se estarán postulando.</p>
                
            </div>
        <!--------------Candidatos de los partidos---------------------------->
        <div class="cuerpo">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Lugar de Nacimiento</th>
                    <th scope="col">Nivel a postularse</th>
                    <th scope="col">Foto</th>
                    <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody id="f_tbody">
                    <th><input name="candNombre[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candApellido[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candCedula[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFNacimiento[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candLNacimiento[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candNivel[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFoto[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candAccion[]" value="" class="form-control" type="text" placeholder=""></th>
                </tbody>
                </table>
                <div class="text-center">
                    <button onclick="nuevaFila()" type="button" class="btn btn-primary">Agregar nuevo nivel</button>
                </div>
                
            
                <textarea id="text_plantilla" hidden>
                    <th><input name="candNombre[]" value="{nombre}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candApellido[]" value="{apellido}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candCedula[]" value="{cedula}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFNacimiento[]" value="{FNacimiento}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candLNacimiento[]" value="{LNacimiento}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candNivel[]" value="{nivel}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFoto[]" value="{foto}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candAccion[]" value="{accion}" class="form-control" type="text" placeholder=""></th>
                    
                </textarea>
        </div>
            
        <!--------------Fin de candidatos de las elecciones--------------------------->

                <!-------------------Botones finales---------------------->
                <hr>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <a href="<?= base_url('configuracion/index')?>"><button type="button" class="btn btn-secondary">Atras</button></a>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= base_url('configuracion/partidos')?>"><button type="submit" class="btn btn-success">Siguiente</button></a>
                    </div>
                </div>
                <!--------------Fin de botones Finales------------------------------->
        </form>
    </div>
</div>


<textarea id="pagina_plantilla">
        <div class="cuerpo">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="" placeholder="Ingresa el Nombre del partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Siglas</label>
                <input type="text" class="form-control" id="siglas" placeholder="Siglas del Partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Color</label>
                <input type="text" class="form-control" id="color" placeholder="Color que representa al partido">
            </div>
        </div>
        <!--------------Fin de Partidos----------------------------->
            <div class="border-bottom encabezado border-dark border-top">
                <h4>Candidatos</h4>
                <p>Registre a los candidatos que pertenecen a este partido, asi como el puesto al que se estarán postulando.</p>
                
            </div>
        <!--------------Candidatos de los partidos---------------------------->
        <div class="cuerpo">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Lugar de Nacimiento</th>
                    <th scope="col">Nivel a postularse</th>
                    <th scope="col">Foto</th>
                    <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody id="f_tbody">
                    <th><input name="candNombre[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candApellido[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candCedula[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFNacimiento[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candLNacimiento[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candNivel[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFoto[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candAccion[]" value="" class="form-control" type="text" placeholder=""></th>
                </tbody>
                </table>
                <div class="text-center">
                    <button onclick="nuevaFila()" type="button" class="btn btn-primary">Agregar nuevo nivel</button>
                </div>
                
            
                <textarea id="text_plantilla" hidden>
                    <th><input name="candNombre[]" value="{nombre}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candApellido[]" value="{apellido}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candCedula[]" value="{cedula}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFNacimiento[]" value="{FNacimiento}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candLNacimiento[]" value="{LNacimiento}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candNivel[]" value="{nivel}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candFoto[]" value="{foto}" class="form-control" type="text" placeholder=""></th>
                    <th><input name="candAccion[]" value="{accion}" class="form-control" type="text" placeholder=""></th>
                    
                </textarea>
        </div>
</textarea>

<script>
    //!Funciones para los candidatos
    function nuevaFila() {
        obj = {};
        obj.nombre = "";
        obj.apellido = "";
        obj.cedula = "";
        obj.FNacimiento = "";
        obj.LNacimiento = "";
        obj.nivel = "";
        obj.foto = "";
        obj.accion = "";
        agregarFila(obj);
        
    }
    function agregarFila(obj) {
        tr = document.createElement('tr');
        cont = document.getElementById('text_plantilla').value;

        for(prop in obj){
            cont = cont.replace('{'+prop+'}', obj[prop]);
        }

        tr.innerHTML = cont;

        document.getElementById('f_tbody').appendChild(tr);
    }


    //!Funciones para los partidos
    function nuevaFila() {
        obj = {};
        obj.nombre = "";
        obj.apellido = "";
        obj.cedula = "";
        obj.FNacimiento = "";
        obj.LNacimiento = "";
        obj.nivel = "";
        obj.foto = "";
        obj.accion = "";
        agregarFila(obj);
        
    }
    function agregarPartido(obj) {
        tr = document.createElement('tr');
        cont = document.getElementById('text_plantilla').value;

        for(prop in obj){
            cont = cont.replace('{'+prop+'}', obj[prop]);
        }

        tr.innerHTML = cont;

        document.getElementById('f_tbody').appendChild(tr);
    }
</script>
<?= $footer?>