<?php

require_once "Api.php";
require_once "./../model/ComentariosModel.php";
class comentariosApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }
  function GetComentarios($id_jugador = null){
    if(isset($id_jugador)){
      $comentario = $this->model->GetComentarioById($id_jugador);
    }else{
      $comentario = $this->model->getAll();
    }
    if (isset($comentario)) {
      return $this->json_response($comentario, 200);
    }else {
      return $this->json_response(null, 404);
    }

  }
  function InsertarComentario($param){
    $id_jugador = $param[0];
    $comentario = $this->getJSONData();
    $r = $this->model->InsertarComentario($comentario->comentario, $comentario->valoracion, $id_jugador);
    return $this->json_response($r, 200);
  }
  function BorrarComentario($param){
    if(count($param)==1){
      $id_comentario = $param[0];
      $r= $this->model->BorrarComentario($id_comentario);
      return $this->json_response("funciono", 200);
    }else {
      return $this->json_response(null, 404);
    }
  }
}
?>
