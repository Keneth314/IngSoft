<?php

class formAutenticarUsuario
{

    public function formAutenticarUsuarioShow()
    {


        // session_start();
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // session_write_close();
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EarlyCervix</title>

            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
            <link rel="stylesheet" href="assets/css/estilos.css">
        </head>

        <body>

            <style>
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
                <div class="contenedor__todo">
                    <div class="caja__trasera">
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
                    </div>

                    <!--Formulario de Login y registro-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="autenticarUsuario/getAutenticarUsuario.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="usuario" id="usuario" name="usuario" required>
                            <input type="password" placeholder="Contraseña" id="password" name="password" required>
                            <input type="submit" class="btn btn-primary btnEnviar" name="btnEnviar" value="Ingresar" required>
                        </form>

                        <!--Register-->
                        <form action="autenticarUsuario/getRegistrarUsuario.php" method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre completo" id="nombre" name="nombre" required>
                            <input type="text" placeholder="Correo Electronico" id="correo" name="correo" required>
                            <input type="text" placeholder="Usuario" name="usuario" id="usuario" required>
                            <input type="password" placeholder="Contraseña" id="password" name="password">
                            <button type="submit" class="btn btn-primary btnEnviar" name="btnRegistrar">Regístrarse</button>
                        </form>
                    </div>
                </div>

            </main>

            <script src="assets/js/script.js"></script>
        </body>

        </html>

<?php
    }
}

?>