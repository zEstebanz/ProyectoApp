<?php 
namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController{
    public static function index( Router $router ){

        session_start();

        isAdmin();
        
        // Consultar la base de datos
        $consulta = "SELECT ";
        $consulta .= "usuarios.id, usuarios.nombre, usuarios.apellido, usuarios.email, usuarios.telefono, usuarios.confirmado, usuarios.admin";
        $consulta .= " FROM usuarios";

        $citas = AdminCita::SQL($consulta);

        $router->renderAdmin('admin/index', [
            'nombre' => $_SESSION['nombre'],
            'citas' => $citas
        ]);
    }
}
?>