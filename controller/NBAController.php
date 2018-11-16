  <?php
  require_once "./view/NBAView.php";
  require_once "./model/EquiposModel.php";
  require_once "./model/JugadoresModel.php";
  require_once "SecuredController.php";
  class NBAController extends SecuredController
  {
    private $view;
    private $EquiposModel;
    private $JugadoresModel;
    private $Titulo = "NBA";
    private $Equipos;
    private $Jugadores;

    function __construct(){
      parent::__construct();
      $this->view = new NBAView();
      $this->EquiposModel = new EquiposModel();
      $this->JugadoresModel = new JugadoresModel();
      $this->Titulo = "AdminNBA";
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

    function InsertarEquipo(){
      $equipo=$_POST["equipoForm"];
      $p_ganados =$_POST["ganadosForm"];
      $p_perdidos=$_POST["perdidosForm"];
      $this->EquiposModel->InsertarEquipo($equipo, $p_ganados, $p_perdidos);
      header(ADM);
    }
    function InsertarJugador(){
      $nombre_jugador=$_POST["nombreForm"];
      $procedencia =$_POST["lugarForm"];
      $id_equipo =$_POST["idForm"];
      $this->JugadoresModel->InsertarJugador($nombre_jugador, $procedencia, $id_equipo);
      header(ADMJUG);
    }
    function BorrarEquipo($param){
      $this->EquiposModel->BorrarEquipo($param[0]);
      header(ADM);
    }
    function BorrarJugador($param){
      $this->JugadoresModel->BorrarJugador($param[0]);
      header(ADMJUG);
    }
    function CargarLista(){
      $this->view->Lista($this->Titulo);
    }
    function CargarLogin(){
      $this->view->Login($this->Titulo);
    }
  function EditarEquipo($param){
      $id_equipo = $param[0];
      $Equipo = $this->EquiposModel->GetEquipo($id_equipo);
      $this->view->UpdateEquipo("Editar Equipo", $Equipo);
  }
  function UpdateEquipo(){
      $id_equipo = $_POST["idForm"];
      $nombre_equipo = $_POST["nombreForm"];
      $partidos_ganados = $_POST["pgForm"];
      $partidos_perdidos = $_POST["ppForm"];
      $this->EquiposModel->UpdateEquipo($nombre_equipo, $partidos_ganados, $partidos_perdidos, $id_equipo);
      header(ADM);
    }
    function EditarJugador($param){
        $id_jugador = $param[0];
        $Jugador = $this->JugadoresModel->GetJugador($id_jugador);
        $this->view->UpdateJugador("Jugador", $Jugador);
    }
    function UpdateJugador(){
        $id_jugador = $_POST["idForm"];
        $nombre_jugador = $_POST["nombreForm"];
        $procedencia = $_POST["lugarForm"];
        $this->JugadoresModel->UpdateJugador($nombre_jugador, $procedencia, $id_jugador);
        header(ADMJUG);
      }
    function VerJugador($param){
      $id_jugador = $param[0];
      $Jugador = $this->JugadoresModel->GetJugador($id_jugador);
      $id_equipo = $param[0];
      $Equipo = $this->EquiposModel->GetNombreEquipo($id_equipo);
      $this->view->MostrarJugador("Jugador", $Jugador, $Equipo);
  }
    function verJugadores($param){
      $id_equipo = $param[0];
      $Jugadores = $this->JugadoresModel->GetJugadoresEquipo($id_equipo);
      $this->view->MostrarJugadores("Jugadores", $Jugadores);
    }
}
