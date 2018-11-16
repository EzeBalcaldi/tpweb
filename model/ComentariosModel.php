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
  function GetComentarios($id_jugador){
      $sentencia = $this->db->prepare( "select * from comentarios where id_jugador=?");
      $sentencia->execute(array($id_jugador));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarComentario($comentario, $calificacion){
    $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, calificacion) VALUES(?,?)");
    $sentencia->execute(array($comentario, $calificacion));
  }
}
 ?>
