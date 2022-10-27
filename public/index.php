<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\UsuarioController;
use Controllers\AdminController;
use MVC\Router;

$router = new Router();
$router->get('/', [LoginController::class, 'login']); //cuando visite esta url buscar el metodo login
$router->post('/', [LoginController::class, 'login']); //para iniciar session y sea enviado el formulario
$router->get('/logout', [LoginController::class, 'logout']); //Para cerrar la session(cuando precione el enlace se redirreciona a logout)

//Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']); //Cuando olvide mi password puedo visitar esa url
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']); //cuando recibe el email, para validar, tiene que 
$router->post('/recuperar', [LoginController::class, 'recuperar']); //el puede con el post sobre escribir el password

//Crear Cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar Cuenta
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);

// Mensaje Cuenta Creada
$router->get('/mensaje', [LoginController::class, 'mensaje']);

// Area Privada
$router->get('/usuario', [UsuarioController::class, 'inicioUsuario']);
$router->get('/estandar', [UsuarioController::class, 'estandar']);
$router->get('/porcentaje', [UsuarioController::class, 'porcentaje']);
$router->get('/cientifica', [UsuarioController::class, 'cientifica']);
$router->get('/basica', [UsuarioController::class, 'basica']);
$router->get('/binario', [UsuarioController::class, 'binario']);

// Area Administrador
$router->get('/admin', [AdminController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $router->get("/reestablecer?token=$token", [LoginController::class, "reestablecer"]);
    $router->post("/reestablecer?token=$token", [LoginController::class, "reestablecer"]);
    }else{
    $router->get("/reestablecer", [LoginController::class, "reestablecer"]);
    $router->post("/reestablecer", [LoginController::class, "reestablecer"]);
  }
