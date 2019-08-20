<?php
require ('controller/controller.php');

try
{
  switch ($_GET['page'])
  {
      case 'login':
        viewLogin();
      break;

      case 'register':
        viewregister();
      break;
  }
} catch(Exception $e)
{


}
