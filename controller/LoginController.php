<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->login();

  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);
      if(isset($dbUser[0])){
          if (password_verify($pass, $dbUser[0]["contraseña"])){
              session_start();
              $_SESSION["User"] = $user;
              if ($dbUser[0]["adm"]){
              header(ADM);
            }else{
              header(HOME);
            }
          }else{
            $this->view->login("Contraseña incorrecta");

          }
      }else{
        //No existe el usario
        $this->view->login("No existe el usario");
      }

  }

}

 ?>
