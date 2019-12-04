<?php
  if($_POST){
    $p=new stdClass();
            $p->usuario = $_POST['usuario'];
            $p->cedulaA = $_POST['cedula'];
            $p->contraseña = $_POST['contraseña'];
            $p->nombres = $_POST['nombre'];
            $p->apellidos = $_POST['apellido'];
    
            saveAdmin($p);
    header('Location: '.base_url('sesion/login'));
  }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url();?>assets/css/generalStyle.css">
    <div class="continer-fluid">
        <div class="contenedorLogin">
            <section class="titulo">
                <h4>Registrarse </h4>
            </section>
            <section class="datos">
                <!-------------------REGISTRARSE------------------------------------>
                <article class="formulario_registrate col-xs-12 col-sm-12 col-md-12">
                        <div class="container">
                          <form class="" action="" method="post">
                            <!--usuario-->
                            <div class="form-group">
                              <label for="nombre" class="sr-only">Usuario:</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" required/>
                              </div>
                            </div>
                            <!--contraseña-->
                            <div class="form-group">
                              <label for="contraseña" class="sr-only">Contraseña:</label>
                              <div class="input-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required/>
                              </div>
                            </div>
                            <!--nombre-->
                            <div class="form-group">
                                    <label for="email" class="sr-only">Nombre/s:</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nombre/s" name="nombre"required/>
                                    </div>
                                </div>

                            <!--apellido-->
                            <div class="form-group">
                                    <label for="email" class="sr-only">Apellido/s:</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Apellido/s" name="apellido"required/>
                                    </div>
                                </div>
                            
                            <!--cedula-->
                            <div class="form-group">
                              <label for="contraseña" class="sr-only">Cédula:</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cédula" name="cedula" required/>
                              </div>
                            </div>
                            <!--boton registrarse-->
                            <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" name="registrarse" value="Registrarse"/>
                          </div>
                          </form>

                          <!--En caso de no tener cuenta-->
                          <section class="opcion2">
                              <p>Ya tienes una cuenta?
                              Puedes iniciar sesión <br>
                              <a href="<?= base_url('sesion/login');?>" class="linkRegistrarse">Iniciar Sesión</a></p>
                          </section>
                          
                        </div>
                      </article>
                      
                <!-------------------FIN DE INICIAR SESION------------------------------------>
                
            </section>
        </div>
    </div>