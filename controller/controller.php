<?php

function viewLogin()
{
  require('view/login.php');
  require('view/template/dashboard.php');
  throw new Exception ("Vous n'avez pas la foi");
}
function viewRegister()
{
  require("view/register.php");
  require('view/template/dashboard.php');
}
function viewIndex()
{
  require("view/index.php");
  require('view/template/dashboard.php');
}
function viewAdmin()
{
  require("view/admin.php");
  require('view/template/dashboard.php');
}