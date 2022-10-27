<?php 
namespace Controllers;

use MVC\Router;

class UsuarioController{
    public static function inicioUsuario( Router $router ){

        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/inicioUsuario', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }

    public static function estandar( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/estandar', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }

    public static function porcentaje( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/porcentaje', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }
    public static function binario( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/binario', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }
  
    public static function kda( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/kda', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }

    public static function cientifica( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/cientifica', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }

    public static function basica( Router $router ){
        session_start(); //para que se pueda usar si se inicio session.

        $router->renderUsuario('usuario/basica', [
            'nombre' => $_SESSION['nombre'],
        ]);
    }
   
}
