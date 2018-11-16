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

  function InsertarJugador($nombre_jugador, $procedencia, $id_equipo){
    $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre_jugador, procedencia, id_equipo) VALUES(?,?,?)");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_equipo));
  }
  function BorrarJugador($id_jugador){
    $sentencia = $this->db->prepare( "delete from jugadores where id_jugador=?");
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
    $sentencia = $this->db->prepare("select* from jugadores where id_equipo=?");
    $sentencia->execute(array($id_equipo));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}
