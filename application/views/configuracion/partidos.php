<?= $header?>
<?php
        //!Datos recibdos de la creacion de la eleccion
        if(isset($_POST['eleccion'])){
            
            $p=new stdClass();
            $p->nombre = $_POST['nombre'];
            $p->fecha = $_POST['fecha'];
            $p->descripcion = $_POST['descripcion'];
    
            saveEleccion($p); //Validando al votante
        }
?>
<div class="container">
    <div class="contenedorConf border-bottom encabezado border-dark">
        <h4>Configura los partidos</h4>
        <p>Los partidos son las diferentes agrupaciones que participaran en la elección</p>
        
    </div>
    <div>
        <form method="POST" action="<?= base_url('configuracion/candidatos')?>">
        <!--------------Partidos----------------------------->
        <div class="cuerpo">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="nombre" aria-describedby="" placeholder="Ingresa el Nombre del partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Siglas</label>
                <input type="text" class="form-control" name="siglas" placeholder="Siglas del Partido">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Color</label>
                <input type="text" class="form-control" name="color" placeholder="Color que representa al partido">
            </div>
            <div class="form-group">
                <label for="" class="">Partido:</label>
                    <input readonly value="<?= (isset($_POST['eleccion']))?$p->nombre: ""; ?>" name="" type="text" class="form-control" id="inputEmail" readonly="readonly">
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-success btn-block" name="crear">Crear Partido</button>
            </div>
        </div>
        <!--------------Fin de Partidos----------------------------->
            <div class="border-bottom encabezado border-dark border-top">
                <h4>Listado</h4>
                <p>Administre y gestione los partidos creados hasta el momento</p>
                
            </div>
        <!--------------Candidatos de los partidos---------------------------->
        <div class="cuerpo">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Siglas</th>
                    <th scope="col">Color</th>
                    <th scope="col">Cantidad de empleados</th>
                    <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody id="f_tbody">
                    <td>Ejemplo nom</td>
                    <td>Ejemplo siglas</td>
                    <td>Ejemplo color</td>
                    <td>Ejemplo cant</td>
                    <td>
                        <button onclick="" type="button" class="btn btn-danger">Del</button>
                        <button name="candidatos" onclick="" type="submit" class="btn btn-info">Candidatos</button>
                    </th>
                </tbody>
                </table>
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


<?= $footer?>