<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('ADM', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/equiposAdmin');
define('ADMJUG', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/jugadoresadmin');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      '' => 'VisitanteController#Home',
      'home' =>'VisitanteController#Home',
      'equipos'=>'VisitanteController#TablaEquipos',
      'jugadoresOrdenados' => 'VisitanteController#TablaOrdenada',
      'jugadores' => 'VisitanteController#TablaJugadores',
      'borrar'=> 'NBAController#BorrarEquipo',
      'agregar'=>'NBAController#InsertarEquipo',
      'lista' => 'NBAController#CargarLista',
      'editar' => 'NBAController#EditarEquipo',
      'update' => 'NBAController#UpdateEquipo',
      'agregarJugador' => 'NBAController#InsertarJugador',
      'borrarJugador' => 'NBAController#BorrarJugador',
      'editarJugador' => 'NBAController#EditarJugador',
      'updateJugador' => 'NBAController#UpdateJugador',
      'verJugador' => 'VisitanteController#VerJugador',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin' => 'LoginController#verificarLogin',
      'equiposAdmin' => 'NBAController#TablaEquipos',
      'jugadoresadmin' => 'NBAController#TablaJugadores',
      'jugadoresordenadosadmin' => 'NBAController#TablaOrdenada',
      'homeAdmin' => 'NBAController#home',
      'verJugadores' => 'NBAController#verJugadores',
      'registro' => 'VisitanteController#registro',
      'agregarUsuario' => 'UsuarioController#agregar',
      'jugadoresUsuario' => 'UsuarioController#jugadores',
      'verJugadorAdmin' => 'NBAController#VerJugador'
    ];
}
 ?>
