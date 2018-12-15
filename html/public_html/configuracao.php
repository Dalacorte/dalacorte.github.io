<!--
           _                  _ _                   
     /\   | |                (_) |                  
    /  \  | | __ _  ___  _ __ _| |_ _ __ ___   ___  
   / /\ \ | |/ _` |/ _ \| '__| | __| '_ ` _ \ / _ \ 
  / ____ \| | (_| | (_) | |  | | |_| | | | | | (_) |
 /_/    \_\_|\__, |\___/|_|  |_|\__|_| |_| |_|\___/ 
              __/ |                                 
             |___/                                  
-->
<?php
@session_start();
@include 'verifica_login.php';
include 'conexao.php';
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$curosTerminados = $dado['cursosTerminados'];
$nome = $dado['nome'];
$senha = $dado['senha'];

if(isset($_SESSION['logado'])):
?>
<html>
<?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Class Perfil</title>
    <body>
<?php include 'navbar3.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#0b208e">Perfil</h1><br><br>
<form>
    <p><img class="imgPerfil" src="defaultuser2.png"></p>
    <div class="info">
    <text class="perfil">Nome: </text><input value="<?php echo $nome?>" title="Nome(Completo)" id="nome" name="name" required="required" type="text" placeholder="Nome"/></text><br><br>
    <text class="perfil">Email: </text><text><input value="<?php echo $_SESSION['email']?>"  name="email" required="required" type="email" placeholder="Email"/></text><br><br>
    <text class="perfil">Cursos Terminados: </text><text><?php echo $curosTerminados?></text><br><br>
      <button disabled class="configbtn" style="border-radius:2.4px;
">Confirmar Alteração &nbsp<i class="far fa-check-circle"></i></button>
    </div>
</form><!--
    <h2>Alterar Dados</h2><br><br>
          <div class="contato">
  <form id="contact" name="contact" method="post" accept-charset="utf-8">
    <label><span>Nome</span><input value="<?php echo $nome?>" title="Nome(Completo)" name="name" required="required" type="text" placeholder="Nome"/></label>
    <label><span>Email</span><input value="<?php echo $_SESSION['email']?>" id="email" name="email" required="required" type="email" placeholder="Email"/></label>
    <label><span>PIN Atual</span><input title="PIN(APENAS NUMEROS)" placeholder="PIN Atual" pattern="[0-9]+$" required="required" type="password"></label>
      <label style="margin-top:16px"><span>PIN Novo</span><input pattern="[0-9]+$" title="PIN(APENAS NUMEROS)" required="required" placeholder="PIN Novo" type="password"></label><br>
      <button class="configbtn" style="border-radius:2.4px;
">Confirmar Alteração &nbsp<i class="far fa-check-circle"></i></button>
  </form>
          </div>-->
          <br>
          <br>
          <br>
        <a style="color:#0b208e;font-weight:bolder;text-decoration:none">Qualquer duvida mande uma mensagem de contato na aba de ajuda!</a>
        </div>
    </section>
<?php include 'footer.php';?>
<?php include 'scriptsjava.php';?>
    </body>
</html>
<link rel="stylesheet" type="text/css" href="form.css">
<style>
.imgPerfil{
    border-radius:50%;
}
input
{
    border:1px solid #ccc;
}
    h1{
        text-align:left;
    }
    h2{
        text-align:left;
    }
    .info button{
        margin-right:90px;
    }
    #nome{
        width:365px;
    }#email{
        width:365px;
    }
    .info{
        width:500px;
        margin-left:320px;
        margin-top:-225px;
        position:absolute;
    }
    .perfil{
        font-size:20px;
        font-weight:bolder;
        color:#0b208e;
    }
</style>
<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>