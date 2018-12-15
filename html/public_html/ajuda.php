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
if(isset($_SESSION['logado'])): 
$msg = 0;
@$msg = $_REQUEST['msg'];
?>
<html>
<?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Class Ajuda</title>
    <body id="topo">
<?php include 'navbar4.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#333333">Contate-nos</h1><br><br>
          <?php if($msg == "enviada"): ?>
          <h1>Mensagem enviada Com Sucesso!</h1>
          <?php endif ?>
          <div class="contato">
  <form id="contact" name="contact" method="POST" accept-charset="utf-8" action="processaContato.php">
    <label><span>Nome</span><input name="nome" type="text" placeholder="Nome"/></label>
    <label><span>Email</span><input name="email" type="email" placeholder="Email"/></label>
    <label><span>Mensagem</span><textarea name="mensagem" placeholder="Mensagem"></textarea></label><button class="configbtn" style="border-radius:2.4px;
">Confirmar &nbsp<i class="far fa-check-circle"></i></button>
  </form>
          </div>
<br><br><br><br><br>
          
          <h2>Mapa do Site</h2>
          <br><br>
          <img name="Mapa do Site" src="mapa.png" style="margin-left:-230px;">
          <br><br><br><br><br>
          <h2>Caso de Uso – Sistema</h2>
          <br><br>
          <img name="Caso de uso" src="casodeuso.png" style="margin-left:230px;"><br>
          <br><br>
          <h2>DER – Diagrama de Entidade e Relacionamento</h2>
          <img name="DER – Diagrama de Entidade e Relacionamento" src="entidade.png" style="margin-left:90px;"><br>
          <text style="color:#333333;font-weight:bolder;text-decoration:none">Qualquer duvida mande uma mensagem de contato!</text>
          <a class="topobtn" style="float:right;font-weight:bolder;text-decoration:none;border:2px solid #333333;
    border-radius: 6px;
    padding: 5px;" href="#topo">Voltar ao Topo&nbsp&nbsp<i class="far fa-arrow-alt-circle-up"></i></a>
        </div>
    </section>
<?php include 'footer.php';?>
<?php include 'scriptsjava.php';?>
    </body>
</html>
<link rel="stylesheet" type="text/css" href="form.css">

<style type="text/css" media="screen">
h1{text-align:left;}
 h2{
    text-align: left;
} 
</style>


<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>