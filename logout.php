<?php
session_start();
session_unset($_SESSION['email']);
session_unset($_SESSION['name']);
echo "You have been logged out";
?>