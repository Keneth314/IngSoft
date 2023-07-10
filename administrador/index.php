<?php


session_start();
if(isset($_SESSION["usuario"]) == true ){
    session_write_close();

    header("Location: shared/principalAdministrador.php?inicio=true");
}
else{
    session_write_close();
    include_once("../administrador/autenticar/formAdministrador.php");
    $objLogin = new formAdministrador;
    $objLogin->formAdministradorShow();
}
