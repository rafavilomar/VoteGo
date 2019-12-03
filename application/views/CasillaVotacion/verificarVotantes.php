

<?= $header ?>
<<<<<<< HEAD
<?php
    if($_GET){
        header("Location: ". base_url('votaciones/votar'));
    }
?>
=======
>>>>>>> 558a027e19a7986146bb1ad8ef696b3eb1fd3699

<br><br><br>
<div class="contenedor">
 <div class="text-center">
    <button style="margin-top:200px" class="btn btn-outline-info btn-lg btn1" type="button" data-toggle="modal" data-target="#modalV">Verificar Cedula</button>
</div>
<!-- Modal -->
<form action="" method="GET" id="frm2">
    <div class="modal fade" id="modalV" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle">Verificacion de cédula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <input class="form-control text-center" type="text" placeholder="Ingrese la Cedula" name="cedula" id="cedula" onKeyPress="return soloNumeros(event)">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="V" id="V">Verificar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!--Fin de Modal----------->
<?= $footer ?>