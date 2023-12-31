<?php

class principalAdministrador
{

    public function   principalAdministradorShow($listaUsuarios)
    {


        session_start();
        $usuario = $_SESSION["usuario"];
        // echo "<pre>";
        // print_r($usuario);
        // echo "</pre>";
        session_write_close();

?>

        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>EarlyCervix - Admin</title>
            <link href="../stylesadmi.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        </head>

        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <a class="navbar-brand" href="principal.html">Sistema Web</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $usuario ?><i class="fas fa-user fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../shared/controlador.php?btnActualizarPassword=true">Cambiar Contraseña</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../shared/controlador.php?btnLogout=true">Salir</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <a class="nav-link" href="principal.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    EarlyCervix
                                </a>
                                <!-- <div class="sb-sidenav-menu-heading">Diseños</div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Diseños de Vista
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Diseño oscuro</a><a class="nav-link" href="layout-sidenav-light.html">Diseño claro</a></nav>
                                </div> -->
                                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Opciones de Usuario
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Autentificación
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Registrar</a><a class="nav-link" href="password.html">Recuperar contraseña</a></nav>
                                        </div>
                                    </nav>
                                </div> -->
                                <div class="sb-sidenav-menu-heading">Secciones</div>
                                <!-- <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Gráficos
                                </a> -->
                                <a class="nav-link" href="principalAdministrador.php?inicio=true">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Usuarios
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Conectado como:</div>
                            Administrador
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            <h1 class="mt-4">EarlyCervix</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Vista Principal</li>
                            </ol>
                            <div class="row">
                                <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Cantidad de Pacientes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                                <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Paciente de 0-22%</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Paciente de 22-44%</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Paciente de 44 a mas%</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                            <div class="row">
                                <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area C. Pacientes x Mes</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Area P. Pacientes x Mes</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div> -->
                            </div>
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-table mr-1"></i>Tabla de Registros</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Password</th>
                                                    <th>Correo </th>
                                                    <th>Estado</th>
                                                    <!-- <th>Resultado</th> -->
                                                    <!-- <th></th>
                                                    <th></th> -->
                                                </tr>
                                            </thead>
                                            <!-- <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Password</th>
                                                    <th>Correo </th>
                                                    <th>Resultado</th>
                                                    <th>Opciones</th>
                                                    <th></th>

                                                </tr>
                                            </tfoot> -->

                                            <tbody>
                                                <?php foreach ($listaUsuarios as $usuario) : ?>
                                                    <tr>
                                                        <td><?php echo $usuario['idusuario']; ?></td>
                                                        <td><?php echo $usuario['usuario']; ?></td>
                                                        <td><?php echo $usuario['nombre']; ?></td>
                                                        <td><?php echo $usuario['password']; ?></td>
                                                        <td><?php echo $usuario['correo']; ?></td>
                                                        <td> Activo</td>
                                                        <!-- <td></td> -->
                                                        <!-- <td><button type="button" class="btn btn-primary">Editar</button></td>
                                                        <td><button type="button" class="btn btn-danger">Eliminar</button></td> -->
                                                    </tr>
                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
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
            <script src="../js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="../assets/demo/datatables-demo.js"></script>
        </body>

        </html>



<?php

    }
}
// Que este logeado => inicio principal administrador


session_start();
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : NULL;
session_write_close();

if (isset($usuario) && isset($_GET["inicio"])) {
    
    session_start();
    $listaUsuarios = $_SESSION["listaUsuarios"];
    session_write_close();

    // echo "<pre>";
    // var_dump($listaUsuarios);
    // echo "</pre>";
    // die();

    $objLogin = new principalAdministrador;
    $objLogin->principalAdministradorShow($listaUsuarios);
}
else{
    header("Location: ../index.php");
}
?>