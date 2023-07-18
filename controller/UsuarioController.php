<?php
include_once "../model/Usuario.php";
$usuario = new Usuario();
$usuario->lista_usuarios_username("jampierzcode");
$nombre = "Maicol";
$apellido = "Bohorquez";
$username = "maicol_admin";
$password = "maicol_admin";
$usuario->create_usuarios($nombre, $apellido, $username, $password);
echo $usuario->mensaje;
$usuario->lista_usuarios();
