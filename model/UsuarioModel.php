<?php
/**
 *
 */
class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
  }

  function InsertarUsuario($nombre, $pass){
    $admin = 0;
    $sentencia = $this->db->prepare("INSERT INTO usuarios(usuario, contraseña, admin) VALUES(?,?, ?)");
    $sentencia->execute(array($nombre, $pass, $admin));
  }

  function GetUser($user){

      $sentencia = $this->db->prepare( "select * from usuarios where usuario=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
