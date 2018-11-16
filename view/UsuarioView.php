<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{
  function Jugadores($Titulo, $Jugadores)
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Jugadores',$Jugadores);
    $smarty->display('templates/jugadores.tpl');
  }
  function MostrarJugador($Titulo ,$Jugador, $Equipo)
  {
      $smarty = new Smarty();
      $smarty->assign('Titulo',$Titulo);
      $smarty->assign('Jugador',$Jugador);
      $smarty->assign('Equipo',$Equipo);
      $smarty->display('templates/verJugador.tpl');
      $smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
  }

 ?>
