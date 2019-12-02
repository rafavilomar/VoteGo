

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
                          <form class="" action="index.html" method="post">
                            <!--nombre-->
                            <div class="form-group">
                              <label for="nombre" class="sr-only">Nombre/s:</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombre de Usuario" id="nombre" required/>
                              </div>
                            </div>

                            <!--apellido-->
                            <div class="form-group">
                                    <label for="email" class="sr-only">Apellido/s:</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Apellidos del Usuario" id="apellido"required/>
                                    </div>
                                </div>
                            
                            <!--contraseña-->
                            <div class="form-group">
                              <label for="contraseña" class="sr-only">Contraseña:</label>
                              <div class="input-group">
                                <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" required/>
                              </div>
                            </div>
                            <!--cedula-->
                            <div class="form-group">
                              <label for="contraseña" class="sr-only">Cédula:</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cédula" id="contraseña" required/>
                              </div>
                            </div>
                            <!--boton registrarse-->
                            <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" id="registrarse" value="Registrarse"/>
                          </div>
                          </form>

                          <!--En caso de no tener cuenta-->
                          <section class="opcion2">
                              <p>Ya tienes una cuenta?
                              Puedes iniciar sesión <br>
                              <a href="<?= base_url('configuracion/sesion');?>" class="linkRegistrarse">Iniciar Sesión</a></p>
                          </section>
                          
                        </div>
                      </article>
                      
                <!-------------------FIN DE INICIAR SESION------------------------------------>
                
            </section>
        </div>
    </div>