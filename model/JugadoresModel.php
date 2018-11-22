<?php
/**
*
*/
class JugadoresModel
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

  function GetJugadores(){
    $sentencia = $this->db->prepare( "select * from jugadores J join equipos E on J.id_equipo = E.id_equipo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetJugadoresOrdenados(){
    $sentencia = $this->db->prepare("select * from jugadores J join equipos E on J.id_equipo = E.id_equipo order by E.id_equipo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function subirImagen($imagen){
    $destino_final = 'imagenes/' . uniqid() . '.jpg';
    move_uploaded_file($imagen, $destino_final);
    return $destino_final;
  }

  function InsertarJugador($nombre_jugador, $procedencia, $id_equipo, $tempPath){
    $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre_jugador, procedencia, id_equipo) VALUES(?,?,?)");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_equipo));
    $lastId = $this->db->lastInsertId();
    $path = $this->subirImagen($tempPath);
    $this->InsertarImagen($path, $lastId);
    header(ADMJUG);

}
  function BorrarJugador($id_jugador){
    $sentencia = $this->db->prepare( "delete from jugadores where id_jugador=?");
    $this->BorrarImagen($id_jugador);
    $sentencia->execute(array($id_jugador));
  }
  function GetJugador($id){
    $sentencia = $this->db->prepare( "select * from jugadores J join equipos E on J.id_equipo = E.id_equipo where J.id_jugador=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function UpdateJugador($nombre_jugador, $procedencia, $id_jugador){
    $sentencia = $this->db->prepare( "update jugadores set nombre_jugador = ?, procedencia = ? where id_jugador=?");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_jugador));
  }
  function GetJugadoresEquipo($id_equipo){
    $sentencia = $this->db->prepare("select * from jugadores where id_equipo=?");
    $sentencia->execute(array($id_equipo));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarImagen($path, $id_jugador){
    $sentencia = $this->db->prepare("INSERT INTO imagenes(ruta, id_jugador) VALUES(?,?)");
    $sentencia->execute(array($path, $id_jugador));
  }
  function GetImagen($id_jugador){
  $sentencia = $this->db->prepare("select * from imagenes where id_jugador=?");
  $sentencia->execute(array($id_jugador));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
  function BorrarImagen($id_jugador){
    $sentencia = $this->db->prepare( "delete from imagenes where id_jugador=?");
    $sentencia->execute(array($id_jugador));
  }

}
