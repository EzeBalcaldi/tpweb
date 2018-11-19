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
    echo "destino_final: ".$destino_final;
    var_dump($destino_final);
    move_uploaded_file($imagen, $destino_final);
    var_dump($imagen);

    return $destino_final;
  }

  function InsertarJugador($nombre_jugador, $procedencia, $id_equipo, $tempPath){
    $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre_jugador, procedencia, id_equipo) VALUES(?,?,?)");
    $sentencia->execute(array($nombre_jugador, $procedencia, $id_equipo));
    $lastId = $this->db->lastInsertId();
    for ($i = 0; $i < 1; $i++) {
      $path = $this->subirImagen($tempPath[$i]);
      $this->InsertarImagen($path, $lastId);
}
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
    $sentencia = $this->db->prepare("select * from jugadores where id_equipo=?");
    $sentencia->execute(array($id_equipo));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarImagen($ruta, $id_jugador){
    $sentencia = $this->db->prepare("INSERT INTO imagenes(ruta, id_jugador) VALUES(?,?)");
    $sentencia->execute(array($ruta, $id_jugador));
  }
  function GetImagen($id_jugador){
  $sentencia = $this->db->prepare("SELECT * FROM imagenes i, jugadores j WHERE i.id_jugador = j.id_jugador and j.id_jugador=?");
  $sentencia->execute(array($id_jugador[0]));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
}
