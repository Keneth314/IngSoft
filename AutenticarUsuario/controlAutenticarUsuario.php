<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();

class controlAutenticarUsuario{

    public function verificarUsuario($usuario, $password){

        include_once("../modelo/entidadUsuario.php");
        // Crear un objeto de la clase "entidadUsuario"
        $objUsuario = new entidadUsuario;
        $registrado = $objUsuario->validarLogin($usuario);
        
        if($registrado == true){ 


            include_once("../modelo/entidadUsuario.php");
            // Crear un objeto de la clase "entidadUsuario"
            $objUsuario = new entidadUsuario;
            $respuesta = $objUsuario->validarPasswordUsuario($usuario, $password);
          
            if($respuesta== true){       
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    
                // echo "<pre>";
                // print_r($_SESSION);
                // print_r($listaPrivilegios);
                // echo "</pre>";
                    session_write_close();
                // die();        
                    include_once("../shared/principal.php");
                    $objFormPrincipal = new Principal;
                    $objFormPrincipal -> principalShow();                   
            }
            else{
                include_once("../shared/mensajeSistema.php");
                $objmensaje = new mensajeSistema;   
                $objmensaje->mensajeSistemaShow("No coincide la contraseña", "../index.php");
                }
        }
        else{
            include_once("../shared/mensajeSistema.php");
            $objmensaje = new mensajeSistema;   
            $objmensaje->mensajeSistemaShow("No existe ese usuario", "../index.php");  

        }
    }

}

?>