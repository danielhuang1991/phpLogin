<?php

session_start();

$email = $name = $password = "";
$error = 0;


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $error++; 
  } 
  else 
  {
    $email = $_POST["email"]; 
    if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z]{3,3})$/", $email))
    {
      $error++;
    }
  }
  
  if (empty($_POST["name"])) 
  {
    $error++;
  } 
  else 
  {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["password"])) 
  {
    $error++; 
  } 
  else 
  {
    $password = $_POST["password"]; 
    if(strlen("$password") < 6)
    {
      $error++;
    }
    
  }

  if($error == 0)
  {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["name"] = $_POST["name"];
    header("location: welcome.php"); 
  }
  else if($error > 0)
  {
    header("location: login.html");
  }

}
   
          
?>