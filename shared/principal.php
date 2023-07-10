<?php

class principal
{

    public function principalShow(){

        session_start();
        $usuario = $_SESSION["usuario"];
        // echo "<pre>";
        // print_r($usuario);
        // echo "</pre>";
        session_write_close();

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>EarlyCervix</title>
            <!-- font awesome cdn link -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- custom css file link -->
            <link rel="stylesheet" href="../assets/css/styles.css">
            <!-- Bootstrap CSS v5.2.1 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        </head>

        <body>


            <!-- header section starts -->
            <header>
                <a href="#" class="logo"><i class="fa-solid fa-user-doctor"></i> EarlyCervix</a>
                <div id="menu-bar" class="fas fa-bars"></div>
                <nav class="navbar">
                    <a href="#home">Inicio</a>
                    <a href="#explicacion">Explicación</a>
                    <a href="#speciality">Especialidad</a>
                    <!-- <a href="#programa">Explicacion</a> -->
                    <div class="dropdown">
                        <!--    <a href="#">Usuario <i class="fa-solid fa-user"></i></a> -->
                        <a href="#"><?= $usuario ?> <i class="fa-solid fa-user"></i></a>
                        <!--    <label> </label> <i class="fa-solid fa-user"></i>  -->
                        <div class="dropdown-content">
                            <a href="../shared/controlador.php?btnActualizarPassword=true" class="update-password" style="width: 170px; font-size: 1.5rem;text-align: left; padding-right: -05px;">Actualizar contraseña</a>
                            <a href="../shared/controlador.php?btnLogout=true" class="logout" style="width: 170px; font-size: 1.5rem; padding-left: -05px;">Cerrar Sesión</a>
                        </div>
                    </div>
                </nav>
            </header>
            <!--home section starts -->
            <section id="home" class="home">

                <div class="content">
                    <h3>Virtual Dectector de Cáncer Vaginal</h3>
                    <p>Sistema Experto Brinda una solución efectiva accesible y fácil de usar para la detección temprana del cáncer de cuello úterino.</p>
                    <a href="#explicacion" class="btn">Continuar</a>
                </div>
                <div class="image">
                    <img src="../assets/images/fondo-incio.jpg" alt="image">
                </div>
            </section>
            <!--home section ends -->


            <!--Explicacion section starts -->

            <section id="explicacion" class="explicacion">

                <div class="content">
                    <h3>Plataforma de Detección de Cáncer Vaginal</h3>
                    <p>Trabajaremos con Conocimiento de Expertos Médicos y tecnológias para garantizar que la plataforma sea fácil de usar, segura y efectiva. Los usuarios podrán ingresar sus síntomas en base a preguntas de opción múltiple y luego la plataforma procesrá las respuestas para determianr el porcentaje de contraer cáncer de cuello uterino.</p>
                    <a href="#speciality" class="btn">Continuar</a>
                </div>
                <div class="image">
                    <img src="../assets/images/antecedente.jpg" alt="image">
                </div>
            </section>
            <!--home section ends -->

            ?>

            <!-- Speciality sectiion starts -->
            <section class="speciality" id="speciality">

                <h1 class="heading"> 3 <span>Aspecto</span> del Programa</h1>

                <div class="box-container">
                    <div class="box">
                        <img class="image" src="../assets/images/1.jpg" alt="">
                        <div class="content">
                            <img src="../assets/images/logo-img2.jpg" alt="">
                            <h3>Sintomas Primarios</h3>
                            <p>En esta Sección consultaremos su sintomas mas directos relacioandos al cáncer Vaginal</p>
                        </div>
                    </div>

                    <div class="box">
                        <img class="image" src="../assets/images/secundarios.jpg" alt="">
                        <div class="content">
                            <img src="../assets/images/logo-img2.jpg" alt="">
                            <h3>Sintomas Secundarios</h3>
                            <p>En esta Sección consultaremos su sintomas que muestren indicios relacioandos al cáncer Vaginal.</p>
                        </div>
                    </div>

                    <div class="box">
                        <img class="image" src="../assets/images/grande.jpg" alt="">
                        <div class="content">
                            <img src="../assets/images/logo-img2.jpg" alt="">
                            <h3>Antecedentes</h3>
                            <p>Preguntaremos sobre su vida sexual y su vida historial familiar.</p>
                        </div>
                    </div>
                </div>
                <h1 class="heading"><br>
                    <a href="../shared/controlador.php?btnProlog=true" class="btn">COMENZAR</a>
                </h1>
            </section>

            <!-- Speciality sectiion ends -->

            <!-- custom js file link -->
            <script src="../assets/js/script.js"></script>
        </body>

        </html>


<?php

    }
}

session_start();
$usuario = $_SESSION["usuario"];
// echo "<pre>";
// print_r($usuario);
// echo "</pre>";
session_write_close();

if(isset($_GET["inicio"]) && $_SESSION["usuario"]){
    $objFormPrincipal = new Principal;
    $objFormPrincipal -> principalShow();    
}

   

?>