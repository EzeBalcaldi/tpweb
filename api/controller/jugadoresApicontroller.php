<?php

require_once "Api.php";
require_once "./../model/JugadoresModel.php";

class jugadoresApiController extends Api
{
private $model;

  function __construct(){
    parent::__construct();
    $this->model = new JugadoresModel();
  }
function GetJugadores($param = null){
  if (isset($param)) {
    $id_jugador = $param[0];
    $data  =  $this->model->getJugador($id_jugador);
  }else {
    $data = $this->model->getJugadores();
}
    if (isset($data)) {
      return $this->json_response($data, 200);
    }else {
      return $this->json_response(null, 404);
    }
}
  function BorrarJugador($param){
  if (count($param)==1) {
    $id_Jugador = $param[0];
    $r = $this->model->BorrarJugador($id_Jugador);
    return  $this->json_response("funciono", 200);
  }else {
    return $this->json_response("no funciono", 404);
  }
  }
  function InsertarJugador($param = null){
      $arreglo= $this->getJSONData();
      $r = $this->model->InsertarJugador($arreglo->nombre_jugador, $arreglo->procedencia, $arreglo->id_equipo);
      return $this->json_response($r, 200);
  }
  function UpdateJugador($param = null){
    if (count($param)==1) {
    $id_jugador = $param[0];
    $arreglo= $this->getJSONData();
    $r= $this->model->UpdateJugador($arreglo->nombre_jugador, $arreglo->procedencia, $id_jugador);
    return $this->json_response($r, 200);

  }else {
    return $this->json_response("no funciono", 404);
  }
  }
}




 ?>
