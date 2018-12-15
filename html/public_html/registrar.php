<?php
$msg = 0;
@$msg = $_REQUEST['msg'];

?>
<link rel="stylesheet" type="text/css" href="registrar.css">
<link rel="shortcut icon" type="image/png" href="icone.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Elixir - Registar</title>
<div class="login-wrapper">
  <div class="login-left">
    <img src="1.jpg">
      <?php if(@$msg == "erro"): ?>
          <h1 class="erro">Não foi possivel cadastrar o usuario!</h1>
      <?php elseif(@$msg == "erroe"): ?>
      <h1 class="erro">Os campos não podem ficar vazios!</h1>
      
          <?php endif ?>
    <div class="h1">Elixir<h2>Clique aqui</h2></div>
  </div>
  <div class="login-right">
      <form method="post" action="cadastrar.php">
    <div class="h2">Registrar</div>
    <div class="form-group">
      <input name="nome" pattern="^[A-Za-zÀ-ú\s]+$" title="Nome(Apenas Letras)" required="required" type="text" id="full-name" placeholder="Nome">
      <label for="full-name">Nome</label>    
    </div>
    <div class="form-group">
      <input name="email" title="Email Valido" required="required" type="email" id="Email" placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <div class="form-group">
      <input name="senha"  title="PIN(APENAS NUMEROS)" required="required" type="password" pattern="[0-9]+$" id="Password" placeholder="PIN">
      <label title="Apenas Numeros" for="senha">PIN</label>    
    </div>
    <div class="checkbox-container">
      <input required="required" type="checkbox">
      <div class="text-checkbox">Prometo continuar aprendendo</div>
    </div> 
    <div class="button-area">
      <a class="btn btn-secondary" href="entrar.php"style="text-decoration:none">Entrar</a>
      <a href="entrar.php" style="text-decoration:none"><button class="btn btn-primary">Registrar</button></a>
    </div>
      </form>
  </div>
</div>
<script src="registrar.js"></script> 
<style>

    
    .erro{
        text-align:center;
        border:5px solid #d2322d  ;
        background-color: #d2322d ;
        color: white;
        position: absolute;
        margin:0;
        top:0;
        left:0;
        right:0;
    }
</style>