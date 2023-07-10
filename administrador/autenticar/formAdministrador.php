<?php

class formAdministrador
{

    public function formAdministradorShow()
    {



?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>EarlyCervix - Admin</title>
            <!-- <link rel="stylesheet" href="../administrador/stylesadmi.css" /> -->
            <link rel="stylesheet" href="assets/css/estilos.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        </head>

        <body>

            <style>
                .contenedor__login-register {
                    top: 0;
                    margin: 0 auto;
                    margin-top: -30px;
                }
                .contenedor__login-register form {
                    position: inherit;
                }
                input[type="submit"]:hover {
                    cursor: pointer;
                }
            </style>

            <div class="titulo">
                <br>
                <a href="#" class="logo" style="font-size: 2rem;
                    text-decoration: none;
                    font-weight: bolder;
                    color: #666;
                    margin: 20px;
                    padding: 15px;">
                    <i class="fa-solid fa-user-doctor"></i> EarlyCervix</a>
            </div>
            
            <main>
                <!-- <div class="contenedor__todo"> -->
                    <!-- <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya tienes una cuenta?</h3>
                            <p>Inicia sesión para entrar en la página</p>
                            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no tienes una cuenta?</h3>
                            <p>Regístrate para que puedas iniciar sesión</p>
                            <button id="btn__registrarse">Regístrarse</button>
                        </div>
                    </div> -->

                    <!--Formulario de Login y registro-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="autenticar/getAdministrador.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="usuario" id="usuario" name="usuario" required>
                            <input type="password" placeholder="Contraseña" id="password" name="password" required>
                            <input type="submit" class="btn btn-primary btnEnviar" name="btnEnviar" value="Ingresar" required>
                        </form>

                        
                    </div>
                <!-- </div> -->

            </main>

            

            <script src="assets/js/script.js"></script>
        </body>

        </html>

<?php
    }
}

?>