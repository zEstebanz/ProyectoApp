<?php   

namespace Model;

class Usuario extends ActiveRecord{
    // Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre','apellido', 'email', 'password', 'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    //Definir el constructor 
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? 0;
        $this->confirmado = $args['confirmado'] ?? 0;
        $this->token = $args['token'] ?? '';
    }
    //Mensajes de validacion para la creacion de una cuneta
    public function validarNuevaCuenta(){
        if(!$this->nombre){ //this objeto que se esta instanciando, aca estoy diciendo que si no hay un nombre entonces: 
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        } 
        if(!$this->apellido){ //this objeto que se esta instanciando, aca estoy diciendo que si no hay un apellido entonces: 
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        } 
        if(!$this->telefono){
            self::$alertas['error'][] = 'El Telefono es Obligatorio';
        }
        if(!$this->email){
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }
        if(strlen($this->password) < 6) { //Validacion para que la contraseña no sea menor a 6 caracteres
            self::$alertas['error'][] = 'El Password debe contener almenos 6 caracteres';

        }
        return self::$alertas;
    }

    // Validaciones
    public function validarLogin(){
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }
        return self::$alertas;
    }
    //Email
    public function validarEmail(){
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        return self::$alertas;
    }
    //Password (Recuperacion)
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El password es obligatorio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        }
        return self::$alertas;
    }
    //Revisa si el usuario ya existe
    public function existeUsuario(){
        $query = " SELECT * FROM " .self::$tabla. " WHERE email = '". $this->email ."' LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado->num_rows){
            self::$alertas['error'][]='El Usuario ya esta registrado';
        }
        return $resultado;
    }

    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);//metodo para hashear el password
    }

    public function crearToken(){
        $this->token = uniqid(); // Sirve para generar un id unico.
    }
    public function comprobarPasswordAndVerificado($password){ // Verificacion de Password Correcto.
        $resultado = password_verify($password, $this->password);
        if(!$resultado || !$this->confirmado){
            self::$alertas['error'][] = 'Password Incorrecto o tu Cuenta no ha sido confirmada';
        } else{
            return true;
        }
    }
}