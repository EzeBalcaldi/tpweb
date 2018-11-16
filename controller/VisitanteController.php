<?php
require_once "./view/VisitanteView.php";
require_once "./model/EquiposModel.php";
require_once "./model/JugadoresModel.php";

class VisitanteController
{
  private $view;
  private $EquiposModel;
  private $JugadoresModel;
  private $Titulo = "NBA";
  private $Equipos;
  private $Jugadores;
  function __construct(){
    $this->view = new VisitanteView();
    $this->EquiposModel= new EquiposModel();
    $this->JugadoresModel= new JugadoresModel();
  }
  function Home(){
    $this->view->Home($this->Titulo);
  }

  function TablaEquipos(){
    $Equipos = $this->EquiposModel->GetEquipos();
    $this->view->Tabla($this->Titulo, $Equipos);
  }
  function TablaJugadores(){
    $Jugadores = $this->JugadoresModel->GetJugadores();
    $this->view->Jugadores($this->Titulo, $Jugadores);
  }
  function TablaOrdenada(){
    $Jugadores = $this->JugadoresModel->GetJugadoresOrdenados();
    $this->view->JugadoresOrdenados($this->Titulo, $Jugadores);
  }

  function CargarLogin(){
    $this->view->Login($this->Titulo);
  }

  function VerJugador($param){
    $id_jugador = $param[0];
    $Jugador = $this->JugadoresModel->GetJugador($id_jugador);
    $id_equipo = $param[0];
    $Equipo = $this->EquiposModel->GetNombreEquipo($id_equipo);
    $this->view->MostrarJugador("Jugador", $Jugador, $Equipo);
}
  function registro(){
    $this->view->registro($this->Titulo);
  }
}
 ?>
