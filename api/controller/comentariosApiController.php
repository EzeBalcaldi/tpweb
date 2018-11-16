<?php

require_once "Api.php";
require_once "./../model/ComentariosModel.php";
class comentariosApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }
  function GetComentarios(){
      $data  =  $this->model->GetComentarios();
      if (isset($data)) {
        return $this->json_response($data, 200);
      }else {
        return $this->json_response(null, 404);
      }
  }
  function InsertarComentario(){
    $comentario=$_POST["comentarioForm"];
    $valoracion=$_POST["valoracionForm"];
    $this->model->InsertarComentario($comentario, $valoracion);
  }
}
  ?>
