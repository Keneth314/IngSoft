<?php
error_reporting(0);

function validarCamposVacios(...$array){
    $vacio = false;
    foreach($array as $valor){
        if(empty(trim($valor)) == true && (trim($valor) != 0))
            $vacio = true;
    }
    return !$vacio;
}

function validarCantPrivilegios($array){
    if(count($array) > 0)
        return true;
    else
        return false;
}

function validarDatos($usuario, $password, $nombre, $correo ){

    if((strlen($usuario) > 4 &&  (strlen($usuario) <= 40)) && 
       (strlen($password) > 4 &&  (strlen($password) <= 30)) && 
       (strlen($nombre) > 4 &&  (strlen($nombre) <= 30)) &&
       (strlen($correo) > 4 &&  (strlen($correo) <= 40)) && 
       filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else{
        return false;
    }
}

function validarPasswordIguales($password, $repassword){
    if($password == $repassword)
        return true;
    else
        return false;
}


if(isset($_POST["btnRegistrar"]) == true){


    //session_start();
    //if(isset($_SESSION["usuario"]) == true && isset($_SESSION["privilegios"]) == true)
    //if(isset($_SESSION["usuario"]) == true){
    //    session_write_close();

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        // die();   

        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"]; // array
        // echo $usuario;

        if(validarCamposVacios($usuario, $password, $correo, $nombre) == true){

           
                if(validarDatos($usuario, $password, $nombre, $correo ) == true){

                    include_once("controlRegistrarUsuario.php");
                    $objControlRegistrar = new controlRegistrarUsuario;     
                    $objControlRegistrar->comprobarUsuarioUnico($usuario, $password, $nombre, $correo );

                    if(validarPasswordIguales($password, $repassword) == true){
                        include_once("controlRegistrarUsuario.php");
                        $objControlRegistrar = new controlRegistrarUsuario;     
                        $objControlRegistrar->comprobarUsuarioUnico($usuario, $password, $privilegio);

                    }
                    else{
                        include_once("../shared/mensajeSistema.php");
                        $objmensaje = new mensajeSistema;   
                        $objmensaje->mensajeSistemaShow("Las contraseñas deben ser iguales", "../index.php");  
                    }
                    
                }
                else{
                    // echo "<pre>";
                    // var_dump(validarDatos($usuario, $password, $repassword));
                    // echo "</pre>";

                    include_once("../shared/mensajeSistema.php");
                    $objmensaje = new mensajeSistema;   
                    $objmensaje->mensajeSistemaShow("Los campos deben de tener entre 6 y 15 caracteres", "../index.php");    
                    }

          
        }
        else{
            include_once("../shared/mensajeSistema.php");
            $objmensaje = new mensajeSistema;   
            $objmensaje->mensajeSistemaShow("Completa todos los cambios", "../index.php");    
        }
    }
        else{
    include_once("../shared/mensajeSistema.php");
    $objmensaje = new mensajeSistema;   
    $objmensaje->mensajeSistemaShow("Error, acceso no permitido", "../index.php");        
    //header("Location: ../index.php"); 

     }


?>