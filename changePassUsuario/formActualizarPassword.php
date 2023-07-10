<?php

class formActualizarPassword
{

    public function formActualizarPasswordShow()
    {


        // session_start();
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // session_write_close();
?>

        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>EarlyCervix</title>
            <link href="../assets/css/stylesEditar2.css" rel="stylesheet">
            <link href="../administrador/stylesadmi.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>

        <body>
            <style>
                body{
                    background-color: #007bff;
                }
            </style>
            <br><br>
            <form action="../changePassUsuario/getActualizarPassword.php" method="POST">
                <h1>Actualizar Contraseña</h1>
                <label for="formGroupExampleInput" class="form-label">Contraseña Anterior</label><br>
                <input type="text" class="form-control" id="oldpass" name="oldpass" required><br>
                <label for="inputPassword4" class="form-label">Contraseña Nueva</label>
                <input type="password" class="form-control" id="newpass" name="newpass" required><br>

                <label for="inputPassword4" class="form-label">Repita la Contraseña Nueva</label>
                <input type="password" class="form-control" id="newpass2" name="newpass2" required><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit" name="btnPassword">Actualizar</button><br>
                </div>
            </form><br><br>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; EarlyCervix 2023</div>
                            <div>
                                <a href="#">Politica de Privacidad</a>
                                &middot;
                                <a href="#">Terminoss y Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../assets/js/scripts.js"></script>
        </body>

        </html>

<?php
    }
}

?>