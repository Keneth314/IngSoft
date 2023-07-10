<?php


session_start();
if(isset($_SESSION["usuario"]) == true ){
    session_write_close();
    header("Location: shared/principal.php?inicio=true");
}
else{
    session_write_close();
    include_once("autenticarUsuario/formAutenticarUsuario.php");
    $objLogin = new formAutenticarUsuario;
    $objLogin->formAutenticarUsuarioShow();
}



?>

