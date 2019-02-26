<?php
session_start();
if(!isset($_SESSION["email"])  || !isset($_SESSION["name"]))
{
  header("location: login.html");
}
  echo "Welcome :".$_SESSION["name"].".<br/><br/>";
  echo "<a href='logout.php'>Log Out</a>";
?>