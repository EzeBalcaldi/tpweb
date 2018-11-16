<?php
require_once('libs/Smarty.class.php');
/**
*
*/
class VisitanteView
{

  function Home($Titulo){
    $smarty =new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/homeVisitante.tpl');
  }

  function Tabla($Titulo, $Equipos)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Equipos',$Equipos);
    $smarty->display('templates/equiposVisitante.tpl');

  }

  function Login($Titulo)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/login.tpl');
  }
  function registro($Titulo)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/registro.tpl');
  }

  function Jugadores($Titulo, $Jugadores)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Jugadores',$Jugadores);
    $smarty->display('templates/jugadoresVisitante.tpl');
  }
  function JugadoresOrdenados($Titulo, $Jugadores)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Jugadores',$Jugadores);
    $smarty->display('templates/jugadoresOrdenadosVisitante.tpl');
  }

  function MostrarJugador($Titulo ,$Jugador, $Equipo)
  {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->assign('Jugador',$Jugador);
      $smarty->assign('Equipo',$Equipo);
      $smarty->display('templates/verJugadorVisitante.tpl');
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

  }
}
