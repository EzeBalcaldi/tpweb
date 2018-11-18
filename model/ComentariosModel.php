<?php
class ComentariosModel
{
  private $db;
  function __construct()
  {
    $this->db = $this->Connect();
  }
  private function Connect()
  {
    return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
  }
  function GetComentarioById($id_jugador){
    $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id_jugador = ?");
    $sentencia->execute($id_jugador);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getAll(){
  $sentencia = $this->db->prepare("SELECT * FROM comentarios");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
function InsertarComentario($comentario, $calificacion){
  $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, calificacion) VALUES(?,?)");
  $sentencia->execute(array($comentario, $calificacion));
}
}
 ?>
