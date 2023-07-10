<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();

class controlAdministrador{

    public function verificarUsuario($usuario, $password){

        include_once("../modelo/entidadAdministrador.php");
        // Crear un objeto de la clase "entidadUsuario"
        $objUsuario = new entidadAdministrador;
        $registrado = $objUsuario->validarLogin($usuario);
        
        if($registrado == true){ 


            include_once("../modelo/entidadAdministrador.php");
            // Crear un objeto de la clase "entidadUsuario"
            $objUsuario = new entidadAdministrador;
            $respuesta = $objUsuario->validarPasswordUsuario($usuario, $password);
          
            if($respuesta== true){        
                
                include_once("../modelo/entidadUsuario.php");
                // Crear un objeto de la clase "entidadUsuario"
                $objUsuario = new entidadUsuario;
                $listaUsuarios = $objUsuario->obtenerDatosUsuario();


                session_start();
                $_SESSION['usuario'] = $usuario;
                $_SESSION['listaUsuarios'] = $listaUsuarios;
                
                // echo "<pre>";
                // var_dump($listaUsuarios);
                // var_dump($_SESSION['listaUsuarios']);
                // var_dump($_SESSION);
                // echo "</pre>";                
                session_write_close();
                // die();
                    
                include_once("../shared/principalAdministrador.php");
                $objFormPrincipal = new principalAdministrador;
                $objFormPrincipal -> principalAdministradorShow($listaUsuarios);                   
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