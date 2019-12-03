<?= $header?>
<?php
    //los datos se estan guardas en el modulo de los archivos
?>
<div class="container">
    <div class="contenedorConf border-bottom encabezado border-dark">
        <h4>Crea una nueva elección</h4>
        <p>Aqui podrás crear una nueva elección, al igual que configurar los partidos y candidatos que participaran en ella</p>
        
    </div>
    <div>
        <form method="POST" action="<?= base_url('configuracion/partidos')?>">
        <!--------------Elecciones----------------------------->
        <div class="cuerpo">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="nombre" aria-describedby="" placeholder="Ingresa el Titulo/Nombre de para esta Elección">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fecha:</label>
                <input type="date" class="form-control" name="fecha" placeholder="Seleccione una fecha">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3" placeholder="Añade mas detalle sobre está elección"></textarea>
            </div>
        </div>
        <!--------------Fin de Elecciones----------------------------->
            <div class="border-bottom encabezado border-dark border-top">
                <h4>Niveles</h4>
                <p>Los niveles determinan los puestos a los cuales aspirarán los candidatos de cada partido.</p>
                <p>Debe agregar por lo menos uno.</p>
                
            </div>
        <!--------------Niveles de las elecciones---------------------------->
        <div class="cuerpo">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
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
                    <th><input name="nvlNombre[]" value="" class="form-control" type="text" placeholder=""></th>
                    <th><input name="nvlDescripcion[]" value="" class="form-control" type="text" placeholder=""></th>
                    
                </textarea>
        </div>
            
        <!--------------Niveles de las elecciones---------------------------->

                <!-------------------Botones finales---------------------->
                <hr>
                <div class="row justify-content-between">
                    <div class="col-4">

                    </div>
                    <div class="col-4 text-right">
                        <a href="<?= base_url('configuracion/partidos')?>"><button type="submit" class="btn btn-success" name="eleccion">Siguiente</button></a>
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