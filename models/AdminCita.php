<?php

namespace Model;

class AdminCita extends ActiveRecord {
    protected static $tabla = 'citasServicios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'telefono', 'confirmado', 'admin'];
  
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $confirmado;
    public $admin;

    public function __construct()
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '';
        $this->admin = $args['admin'] ?? '';
    }
}