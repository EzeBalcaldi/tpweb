<?php

require_once "Api.php";
require_once "./../model/EquiposModel.php";
class equiposApiController extends Api{

  private $EquiposModel;
  function __construct(){
    parent::__construct();
    $this->model = new EquiposModel();
  }
  function GetEquipos($param = null){
    if (isset($param)) {
      $id_equipo = $param[0];
      $data  =  $this->model->GetEquipo($id_equipo);
    }else {
      $data  =  $this->model->GetEquipos();
  }

      if (isset($data)) {
        return $this->json_response($data, 200);
      }else {
        return $this->json_response(null, 404);
      }
  }
  function BorrarEquipo($param){
  if (count($param)==1) {
    $id_Equipo = $param[0];
    $r = $this->model->BorrarEquipo($id_Equipo);
    return  $this->json_response("funciono", 200);
  }else {
    return $this->json_response("no funciono", 404);
  }
}
function InsertarEquipo($param = null){
    $arreglo= $this->getJSONData();
    $r = $this->model->InsertarEquipo($arreglo->nombre_equipo, $arreglo->partidos_ganados, $arreglo->partidos_perdidos);
    return $this->json_response($r, 200);
}
function UpdateEquipo($param = null){
  if (count($param)==1) {
  $id_equipo = $param[0];
  $arreglo= $this->getJSONData();
  $r= $this->model->UpdateEquipo($arreglo->nombre_equipo,$arreglo->partidos_ganados, $arreglo->partidos_perdidos, $id_equipo);
  return $this->json_response($r, 200);

}else {
  return $this->json_response("no funciono", 404);
}
}


}

?>
