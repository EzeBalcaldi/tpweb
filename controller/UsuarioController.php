<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;
  function __construct()
  {
    parent::__construct();
    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }
  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }
  function agregar(){
      if((!empty($_POST['userForm']))&&(!empty($_POST['passForm']))){
         $nombre = $_POST['userForm'];
         $contraseña = $_POST['passForm'];
         $db = $this->model->GetUser($nombre);
         if(empty($db)){
            $hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $this->model->InsertarUsuario($nombre, $hash);
            session_start();
            $_SESSION['User'] = $nombre;
            $_SESSION['admin'] = 0;
            header(HOME);
         }else{
           $this->VisitanteView->registro('usuario ya existente');
         }
    }
}
}
 ?>
