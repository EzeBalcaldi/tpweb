<?php
class EquiposModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
    $this->JugadoresModel = new JugadoresModel();
  }

  private function Connect()
  {
    return new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
  }

  function GetEquipos(){
    $sentencia = $this->db->prepare( "select * from equipos");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetJugadoresOrdenados(){
    $sentencia = $this->db->prepare("select * from jugadores J join equipos E on J.id_equipo = E.id_equipo order by E.id_equipo");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarEquipo($equipo, $p_ganados, $p_perdidos){
    //$path = $this->JugadoresModel->subirImagen($tempPath);
    $sentencia = $this->db->prepare("INSERT INTO equipos(nombre_equipo, partidos_ganados, partidos_perdidos) VALUES(?,?,?)");
    $sentencia->execute(array($equipo, $p_ganados, $p_perdidos));
    $lastId =  $this->db->lastInsertId();
    return $this->GetEquipo($lastId);
  }

  function BorrarEquipo($id_equipo){
    $sentencia = $this->db->prepare( "delete from equipos where id_equipo=?");
    $sentencia->execute(array($id_equipo));
  }

  function GetEquipo($id){
    $sentencia = $this->db->prepare( "select * from equipos where id_equipo=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function UpdateEquipo($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo){
    $sentencia = $this->db->prepare( "update equipos set nombre_equipo = ?, partidos_ganados = ?, partidos_perdidos = ? where id_equipo=?");
    $sentencia->execute(array($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo));
  }

  function GetNombreEquipo($id)
  {
    $sentencia = $this->db->prepare("select E.nombre_equipo FROM jugadores J inner join equipos E on J.id_equipo = E.id_equipo where J.id_jugador = ? ");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function VerEquipo($id_jugador)
  {
    $sentencia = $this->db->prepare( "select * from jugadores where id_equipo=?");
    $sentencia->execute(array($id));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
}
?>
