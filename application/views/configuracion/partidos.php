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
                <input type="date" class="form-control" id="siglas" placeholder="Siglas del Partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Color</label>
                <input type="date" class="form-control" id="color" placeholder="Color que representa al partido">
            </div>
        </div>
        <!--------------Fin de Partidos----------------------------->
            <div class="border-bottom encabezado border-dark border-top">
                <h4>Candidatos</h4>
                <p>Registre a los candidatos que pertenecen a este partido, asi como el puesto al que se estarán postulando.</p>
                
            </div>
        <!--------------Niveles de las elecciones---------------------------->
        <div class="cuerpo">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody id="f_tbody">
                    <th><input name="nvlNombre[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="nvlDescripcion[]" value="" class="form-control" type="text" placeholder=""></th>
                </tbody>
                </table>
                <div class="text-center">
                    <button onclick="nuevaFila()" type="button" class="btn btn-primary">Agregar nuevo nivel</button>
                </div>
                
            
                <textarea id="text_plantilla" hidden>
                    <th><input required name="nvlNombre[]" value="{nombre}" class="form-control" type="text" placeholder=""></th>
                    <th><input required name="nvlDescripcion[]" value="{descripcion}" class="form-control" type="text" placeholder=""></th>
                    
                </textarea>
        </div>
            
        <!--------------Niveles de las elecciones---------------------------->

                <!-------------------Botones finales---------------------->
                <hr>
                <div class="row justify-content-between">
                    <div class="col-4">

                    </div>
                    <div class="col-4 text-right">
                        <!--<a href="<?= base_url('configuracion/partidos')?>"><button type="submit" class="btn btn-success">Siguiente</button></a>-->
                        <a href="<?= base_url('configuracion/partidos')?>" type="submit" class="btn btn-success">Siguiente</a>
                    </div>
                </div>
        </form>
    </div>
</div>

<script>
    function nuevaFila() {
        obj = {};
        obj.nombre = "";
        obj.descripcion = "";
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
</script>
<?= $footer?>