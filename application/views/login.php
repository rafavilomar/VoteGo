<?php
    if ($_POST){
    }
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url();?>assets/css/generalStyle.css">
    <div class="continer-fluid">
        <div class="contenedorLogin">
            <section class="titulo">
                <h4>Iniciar Sesión </h4>
            </section>
            <section class="datos">
                <!-------------------Iniciar Sesion------------------------------------>
                <article class="formulario_registrate col-xs-12 col-sm-12 col-md-12">
                        <div class="container">
                          <form class="" action="" method="post">
                            <!--nombre-->
                            <div class="form-group">
                              <label for="nombre" class="sr-only">Nombre:</label>
                              <div class="input-group">
                                <div class="input-group-text"><img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00MiAwIDUxMiA1MTIuMDAyIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PHBhdGggZD0ibTIxMC4zNTE1NjIgMjQ2LjYzMjgxMmMzMy44ODI4MTMgMCA2My4yMjI2NTctMTIuMTUyMzQzIDg3LjE5NTMxMy0zNi4xMjg5MDYgMjMuOTcyNjU2LTIzLjk3MjY1NiAzNi4xMjUtNTMuMzA0Njg3IDM2LjEyNS04Ny4xOTE0MDYgMC0zMy44NzUtMTIuMTUyMzQ0LTYzLjIxMDkzOC0zNi4xMjg5MDYtODcuMTkxNDA2LTIzLjk3NjU2My0yMy45Njg3NS01My4zMTI1LTM2LjEyMTA5NC04Ny4xOTE0MDctMzYuMTIxMDk0LTMzLjg4NjcxOCAwLTYzLjIxODc1IDEyLjE1MjM0NC04Ny4xOTE0MDYgMzYuMTI1cy0zNi4xMjg5MDYgNTMuMzA4NTk0LTM2LjEyODkwNiA4Ny4xODc1YzAgMzMuODg2NzE5IDEyLjE1NjI1IDYzLjIyMjY1NiAzNi4xMzI4MTIgODcuMTk1MzEyIDIzLjk3NjU2MyAyMy45Njg3NSA1My4zMTI1IDM2LjEyNSA4Ny4xODc1IDM2LjEyNXptMCAwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtNDI2LjEyODkwNiAzOTMuNzAzMTI1Yy0uNjkxNDA2LTkuOTc2NTYzLTIuMDg5ODQ0LTIwLjg1OTM3NS00LjE0ODQzNy0zMi4zNTE1NjMtMi4wNzgxMjUtMTEuNTc4MTI0LTQuNzUzOTA3LTIyLjUyMzQzNy03Ljk1NzAzMS0zMi41MjczNDMtMy4zMDg1OTQtMTAuMzM5ODQ0LTcuODA4NTk0LTIwLjU1MDc4MS0xMy4zNzEwOTQtMzAuMzM1OTM4LTUuNzczNDM4LTEwLjE1NjI1LTEyLjU1NDY4OC0xOS0yMC4xNjQwNjMtMjYuMjc3MzQzLTcuOTU3MDMxLTcuNjEzMjgyLTE3LjY5OTIxOS0xMy43MzQzNzYtMjguOTY0ODQzLTE4LjE5OTIxOS0xMS4yMjY1NjMtNC40NDE0MDctMjMuNjY3OTY5LTYuNjkxNDA3LTM2Ljk3NjU2My02LjY5MTQwNy01LjIyNjU2MyAwLTEwLjI4MTI1IDIuMTQ0NTMyLTIwLjA0Mjk2OSA4LjUtNi4wMDc4MTIgMy45MTc5NjktMTMuMDM1MTU2IDguNDQ5MjE5LTIwLjg3ODkwNiAxMy40NjA5MzgtNi43MDcwMzEgNC4yNzM0MzgtMTUuNzkyOTY5IDguMjc3MzQ0LTI3LjAxNTYyNSAxMS45MDIzNDQtMTAuOTQ5MjE5IDMuNTQyOTY4LTIyLjA2NjQwNiA1LjMzOTg0NC0zMy4wMzkwNjMgNS4zMzk4NDQtMTAuOTcyNjU2IDAtMjIuMDg1OTM3LTEuNzk2ODc2LTMzLjA0Njg3NC01LjMzOTg0NC0xMS4yMTA5MzgtMy42MjEwOTQtMjAuMjk2ODc2LTcuNjI1LTI2Ljk5NjA5NC0xMS44OTg0MzgtNy43Njk1MzItNC45NjQ4NDQtMTQuODAwNzgyLTkuNDk2MDk0LTIwLjg5ODQzOC0xMy40Njg3NS05Ljc1LTYuMzU1NDY4LTE0LjgwODU5NC04LjUtMjAuMDM1MTU2LTguNS0xMy4zMTI1IDAtMjUuNzUgMi4yNTM5MDYtMzYuOTcyNjU2IDYuNjk5MjE5LTExLjI1NzgxMyA0LjQ1NzAzMS0yMS4wMDM5MDYgMTAuNTc4MTI1LTI4Ljk2ODc1IDE4LjE5OTIxOS03LjYwNTQ2OSA3LjI4MTI1LTE0LjM5MDYyNSAxNi4xMjEwOTQtMjAuMTU2MjUgMjYuMjczNDM3LTUuNTU4NTk0IDkuNzg1MTU3LTEwLjA1ODU5NCAxOS45OTIxODgtMTMuMzcxMDk0IDMwLjMzOTg0NC0zLjE5OTIxOSAxMC4wMDM5MDYtNS44NzUgMjAuOTQ1MzEzLTcuOTUzMTI1IDMyLjUyMzQzNy0yLjA1ODU5NCAxMS40NzY1NjMtMy40NTcwMzEgMjIuMzYzMjgyLTQuMTQ4NDM3IDMyLjM2MzI4Mi0uNjc5Njg4IDkuNzk2ODc1LTEuMDIzNDM4IDE5Ljk2NDg0NC0xLjAyMzQzOCAzMC4yMzQzNzUgMCAyNi43MjY1NjIgOC40OTYwOTQgNDguMzYzMjgxIDI1LjI1IDY0LjMyMDMxMiAxNi41NDY4NzUgMTUuNzQ2MDk0IDM4LjQ0MTQwNiAyMy43MzQzNzUgNjUuMDY2NDA2IDIzLjczNDM3NWgyNDYuNTMxMjVjMjYuNjI1IDAgNDguNTExNzE5LTcuOTg0Mzc1IDY1LjA2MjUtMjMuNzM0Mzc1IDE2Ljc1NzgxMy0xNS45NDUzMTIgMjUuMjUzOTA2LTM3LjU4NTkzNyAyNS4yNTM5MDYtNjQuMzI0MjE5LS4wMDM5MDYtMTAuMzE2NDA2LS4zNTE1NjItMjAuNDkyMTg3LTEuMDM1MTU2LTMwLjI0MjE4N3ptMCAwIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiMwMDAwMDAiPjwvcGF0aD48L2c+IDwvc3ZnPg==" alt=""></div>
                                <input type="text" class="form-control" placeholder="Nombre de Usuario" id="nombre" required/>
                              </div>
                            </div>
                            
                            <!--contraseña-->
                            <div class="form-group">
                              <label for="contraseña" class="sr-only">Contraseña:</label>
                              <div class="input-group">
                                <div class="input-group-text"><img class="icono" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MzcuMzMzLDE5MmgtMzJ2LTQyLjY2N0M0MDUuMzMzLDY2Ljk5LDMzOC4zNDQsMCwyNTYsMFMxMDYuNjY3LDY2Ljk5LDEwNi42NjcsMTQ5LjMzM1YxOTJoLTMyICAgIEM2OC43NzEsMTkyLDY0LDE5Ni43NzEsNjQsMjAyLjY2N3YyNjYuNjY3QzY0LDQ5Mi44NjUsODMuMTM1LDUxMiwxMDYuNjY3LDUxMmgyOTguNjY3QzQyOC44NjUsNTEyLDQ0OCw0OTIuODY1LDQ0OCw0NjkuMzMzICAgIFYyMDIuNjY3QzQ0OCwxOTYuNzcxLDQ0My4yMjksMTkyLDQzNy4zMzMsMTkyeiBNMjg3LjkzOCw0MTQuODIzYzAuMzMzLDMuMDEtMC42MzUsNi4wMzEtMi42NTYsOC4yOTIgICAgYy0yLjAyMSwyLjI2LTQuOTE3LDMuNTUyLTcuOTQ4LDMuNTUyaC00Mi42NjdjLTMuMDMxLDAtNS45MjctMS4yOTItNy45NDgtMy41NTJjLTIuMDIxLTIuMjYtMi45OS01LjI4MS0yLjY1Ni04LjI5Mmw2LjcyOS02MC41MSAgICBjLTEwLjkyNy03Ljk0OC0xNy40NTgtMjAuNTIxLTE3LjQ1OC0zNC4zMTNjMC0yMy41MzEsMTkuMTM1LTQyLjY2Nyw0Mi42NjctNDIuNjY3czQyLjY2NywxOS4xMzUsNDIuNjY3LDQyLjY2NyAgICBjMCwxMy43OTItNi41MzEsMjYuMzY1LTE3LjQ1OCwzNC4zMTNMMjg3LjkzOCw0MTQuODIzeiBNMzQxLjMzMywxOTJIMTcwLjY2N3YtNDIuNjY3QzE3MC42NjcsMTAyLjI4MSwyMDguOTQ4LDY0LDI1Niw2NCAgICBzODUuMzMzLDM4LjI4MSw4NS4zMzMsODUuMzMzVjE5MnoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6IzAwMDAwMCI+PC9wYXRoPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" alt=""></div>
                                <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" required/>
                              </div>
                            </div>
                            
                            <!--boton inicia sesion-->
                            <div class="form-group">
                            <a href="<?= base_url('mesa/validar');?>" class="btn btn-success btn-block">Iniciar</a>
                          </div>
                          </form>

                          <!--En caso de no tener cuenta-->
                          <section class="opcion2">
                              <p>No tienes una cuenta?
                              Registrate ahora! <br>
                              <a href="<?= base_url('configuracion/registrarse');?>" class="linkRegistrarse">Registrarse</a></p>
                          </section>
                          
                        </div>
                      </article>
                      
                <!-------------------FIN DE INICIAR SESION------------------------------------>
                
            </section>
        </div>
    </div>