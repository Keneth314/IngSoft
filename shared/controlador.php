<?php

class controlador{
    
    public function controladorShow(){

        
    }
}

// ----------------------------------------------------------------
// botones de Keneth


if(isset($_REQUEST["btnProlog"]) == true){

    // include_once("../changePassUsuario/formProlog.php");
    // $objtFormActualizar = new formProlog;
    // $objtFormActualizar->formPrologShow();
    // echo "<pre>";
    // var_dump($_REQUEST["btnProlog=true"]);
    // echo "</pre>";
    // die();

    
    include_once("../prolog/formProlog.php");
    $objtFormProlog = new formProlog;
    $objtFormProlog->formPrologShow();
}

if(isset($_REQUEST["btnActualizarAdministrador"]) == true){
    include_once("../passAdmin/formActualizarAdministrador.php");
    $objtFormActualizar = new formActualizarAdministrador;
    $objtFormActualizar->formActualizarAdministradorShow();
}

if(isset($_REQUEST["btnActualizarPassword"]) == true){
    include_once("../changePassUsuario/formActualizarPassword.php");
    $objtFormActualizar = new formActualizarPassword;
    $objtFormActualizar->formActualizarPasswordShow();
}


?>

<?php
if(isset($_REQUEST["btnLogout"]) == true){

    session_start();
    $_SESSION["usuario"] = NULL;
    $_SESSION["privilegios"] = NULL;
    session_destroy();
    session_write_close();

    header('Location: ../index.php');
} 
?>

