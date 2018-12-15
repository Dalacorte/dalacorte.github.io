<?php

$msg = 0;
@$msg = $_REQUEST['msg'];

?>
<link rel="shortcut icon" type="image/png" href="icone.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Elixir - Entrar</title>
<link rel="stylesheet" type="text/css" href="registrar.css">
<body style="z-index:-1">
<div class="login-wrapper">
  <div class="login-left">
    <img src="2.jpg">
      <?php if(@$msg == "erro"): ?>
          <h1 class="erro">Erro no login!</h1>
      <?php elseif(@$msg == "sucesso"):?>
          <h1 class="sucesso">Usuario Cadastrado com Sucesso!</h1>
      <?php elseif(@$msg == "erroj"): ?>
      <h1 class="erro">Ja existe um email cadastrado!</h1>
      <?php elseif(@$msg == "sucessor"): ?>
      <h1 class="sucesso">Senha Redefinida com Sucesso!</h1>
          <?php endif ?>
    <div class="h1">Elixir<h2>Clique aqui</h2></div>
  </div>
  <div class="login-right">
    <div class="h2">Entrar</div>
      <form action="entrarsistema.php">
    <div class="form-group">
      <input required="required" type="email" name="email" id="Email" placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <div class="form-group">
      <input pattern="[0-9]+$" title="PIN(APENAS NUMEROS)" required="required" type="password" name="senha" id="Password" placeholder="PIN">
      <label for="Password">PIN</label>    
    </div>
    <div class="checkbox-container">
      <input id="checkfor" name="matenhaConectado" type="checkbox">
      <div for="checkfor" class="text-checkbox">Mantenha-me conectado!</div>
    </div> 
    <div class="button-area">
      <a href="registrar.php" class="btn btn-secondary" style="text-decoration:none">Registrar</a>
      <a href="pagina.php" style="text-decoration:none"><button class="btn btn-primary">Entrar</button></a>
    </div>
      </form>
      
    <a id="esqueceusenha" href="esqueceusenha.php">Esqueceu a Senha</a>
  </div>
</div>
    </body>

<style>
    #esqueceusenha{
        margin-left:35%;
    }
    
     .sucesso{
        text-align:center;
        border:5px solid #2e7d32   ;
        background-color: #2e7d32  ;
        color: white;
        position: absolute;
        margin:0;
        top:0;
        left:0;
        right:0;
    }
    
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
<script src="registrar.js"></script> 