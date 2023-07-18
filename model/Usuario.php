<?php
include_once "Conexion.php";
class Usuario
{
    var $datos; //no es propia de la clase
    var $mensaje; //no es propia de la clase
    public $conexion; //propio de la clase = variable publica

    public function __construct()
    {
        $db = new Conexion(); //instancia de la clase conexion $db
        $this->conexion = $db->pdo;
        //$this = $usuario
        // $usuario = new Ususario() // $usuario = $this en la clase
    }
    function lista_usuarios()
    {
        $sql = 'SELECT * FROM usuario';
        $sth = $this->conexion->prepare($sql);
        $sth->execute();
        $red = $sth->fetchAll();
        print_r($red);
    }
    function lista_usuarios_username($username)
    {
        $sql = 'SELECT * FROM usuario WHERE username = :username';
        $sth = $this->conexion->prepare($sql);
        $sth->execute(array(':username' => $username));
        $red = $sth->fetchAll();
        print_r($red);
    }
    function create_usuarios($nombre, $apellido, $username, $password)
    {
        $sql = 'INSERT INTO usuario (nombres, apellidos, username, password)
        VALUES (:nombres, :apellidos, :username, :password)';
        $sth = $this->conexion->prepare($sql);
        $sth->execute(array(':nombres' => $nombre, ':apellidos' => $apellido, ':username' => $username, ":password" => $password));
        $this->mensaje = "Se agrego correctamente";
        return $this->mensaje;
    }
}
