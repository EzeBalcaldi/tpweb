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
function InsertarComentario($comentario, $calificacion, $id_jugador){
  $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, valoracion, id_jugador) VALUES(?,?, ?)");
  $sentencia->execute(array($comentario, $calificacion, $id_jugador));
}
function BorrarComentario($id_comentario){
  $sentencia = $this->db->prepare("delete from comentarios where id_comentario = ?");
  $sentencia->execute(array($id_comentario));
}
}
 ?>
