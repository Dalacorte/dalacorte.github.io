<?php
//Conectar ao BD

$server = "localhost";
$user = "id8024191_julio";
$pass = "vertrigo";
$db = "id8024191_elixir"; 

$connect = mysqli_connect($server,$user,$pass,$db) or die(mysqli_error());

?>