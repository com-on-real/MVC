<?php
require ('controller/controller.php');
require ('session.php');
//echo $users['firstname'];
try
{
  switch ($_GET['page'])
  {
      case 'login':
        viewLogin();
      break;

      case 'register':
        viewRegister();
      break;

      case 'admin':
          if ($users['permission'] == "admin")
          {
            viewAdmin();
          }
          else{
            throw new Exception ("Vous n'avez pas la permission");
          }
      break;

      default:
        viewIndex();
        break;
  }
}
catch(Exception $e)
{
    $messageError = $e->getMessage();
    //echo $messageError;
    require('view/error.php');
    require('view/template/dashboard.php');

}
