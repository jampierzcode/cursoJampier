<!-- CLASE CONEXION POO(PROGRAMACION ORIENTADA A OBJETOS)-->
<?php
class Conexion
{
    // variables privadas
    private $password = "12345";
    public $nombre;
    public $apellidos;
    // metodos
    function __construct()
    {
        $this->nombre = "Jampier";
        $this->apellidos = $this->password;
    }
    function inicialNombre()
    {
        return $this->nombre = "J";
        // $this->apellidos = "V";
    }
}
// $usuario = $this
$usuario = new Conexion(); //instancia de la clase(objeto)
$editNombre = $usuario->nombre = "New jampier";
echo $editNombre;
echo $usuario->apellidos;
echo $usuario->inicialNombre();
?>