<?php 

namespace Model; 

class Usuario extends ActiveRecord {
    // BAse de Datos 
    protected static $tabla = 'usuarios'; 
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'telefono', 'admin', 'confirmado', 'token']; 

    public $id; 
    public $nombre; 
    public $apellido; 
    public $email; 
    public $passsword; 
    public $telefono; 
    public $admin; 
    public $confirmado; 
    public $token; 

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null; 
        $this->nombre = $args['nombre'] ?? ''; 
        $this->apellido = $args['apellido'] ?? ''; 
        $this->email = $args['email'] ?? ''; 
        $this->passsword = $args['passsword'] ?? ''; 
        $this->telefono = $args['telefono'] ?? ''; 
        $this->admin = $args['admin'] ?? null; 
        $this->confirmado = $args['confirmado'] ?? null; 
        $this->token = $args['token'] ?? ''; 
    }
}