<?php
session_start();
if(!$_SESSION['logado']){
    header('Location:entrar.php');
    exit();
}