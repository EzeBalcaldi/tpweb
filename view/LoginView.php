<?php
/**
 *
 */
class LoginView
{
  function login($message = '')
  {
    $smarty = new Smarty();
    $smarty->assign('Titulo',"Login");
    $smarty->assign('Message',$message);
    $smarty->display('templates/login.tpl');
  }
}
?>
