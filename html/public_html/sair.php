<?php 
session_start();
unset($_SESSION['logado']);
unset($_SESSION['email']);
header("location:entrar.php");



?>
