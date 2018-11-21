<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'equipo#GET'=> 'equiposApiController#GetEquipos',
      'equipo#DELETE'=> 'equiposApiController#BorrarEquipo',
      'equipo#POST'=> 'equiposApiController#InsertarEquipo',
      'equipo#PUT'=> 'equiposApiController#UpdateEquipo',
      'jugador#GET' => 'jugadoresApiController#GetJugadores',
      'jugador#DELETE' => 'jugadoresApiController#BorrarJugador',
      'jugador#POST' => 'jugadoresApiController#InsertarJugador',
      'jugador#PUT' => 'jugadoresApiController#UpdateJugador',
      'comentario#GET' => 'comentariosApiController#GetComentarios',
      'comentario#POST' => 'comentariosApiController#InsertarComentario',
      'comentario#DELETE' => 'comentariosApiController#BorrarComentario'


    ];

}

 ?>
