<?php include("conexao.php");

$erro[] = "";
if(@isset($_POST[ok])){
    $email = mysqli_real_escape_string($connect,$_REQUEST['email']);
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail Inválido.";
     
    }
    
    $sql_code =  "SELECT senha,id FROM cadastro WHERE email = '$email'";
    $sql_query = mysqli_query($connect,$sql_code);
    $dado = mysqli_fetch_array($sql_query);
    $total = mysqli_num_rows($sql_query);
    
    if($total == 0) {
        $erro[] = "O email informado não existe";
    }
    
    if($total > 0){
    $novasenha = substr((time()),0,8)*rand();
    $nscriptografada = md5($novasenha);
 
    
    $numero_aleatorio = rand();
    $codigo = base64_encode($email);
    $data_expirar = date('Y-m-d H:i:s ', strtotime('+1 day'));
    $corpo = "<strong>Nova Senha Requisitada(Esqueceu Senha)!</strong><br><br>";
    $corpo .= "<br><strong>Caso não seja sua,não abra o link!,caso contrario abra o link abaixo.</strong><br>";
    $corpo .= "https://elixirtcc.000webhostapp.com/recuperar.php?codigo=$codigo";
    $header = "Content-Type: text/html; charset= utf-8\n";
    $header .= "From: ElixirTCC@hotmail.com <dont-Reply-to: ElixirTCC@hotmail.com> \n";
    
    
    if(mail($email,"Esqueceu Senha",$corpo,$header)){
    $sql_code =  "INSERT INTO codigos (codigo,data) VALUES ('$codigo','$data_expirar')";
    $busca = mysqli_query($connect,$sql_code);
        if($sql_query){
            $erro[] = "Email Enviado com Sucesso";
        }
            }
        }      
    }

?>
<html>
<?php include 'header.php';?>
            <title><?php echo $titulo; ?> - Recuperação de Senha</title>
<body>
    <?php if(count(@$erro) > 0)
    foreach($erro as $msg){
        echo "<p class='erro'>$msg</p>";
    }
    ?>
<form id="form" method="post">
    <label><span>Email: </span><input  id="email" name="email" required="required" type="email" placeholder="Email"/></label>
    <button name="ok" class="configbtn" style="border-radius:2.4px;
">Nova Senha &nbsp<i class="far fa-check-circle"></i></button>
    <a class="configbtn" style="padding: 0.5em;
        margin-right:15px;
        font: 300 100%/1.2 Ubuntu, sans-serif;" href="entrar.php"><i class="fas fa-angle-double-left"></i>&nbsp;Voltar</a>
        <div class="aviso"><h3>Aviso!</h3>
        <br><br>
        <p>O email provavelmente ira para a caixa de spam!<br><text>Gmail demora um pouco!</text></p>
        </div>
</form>
<?php include 'footer.php';?>
    </body>
    </html>
<link rel="stylesheet" type="text/css" href="form.css">
<style>
    .aviso text{
        margin-left:82px;
    }
    .aviso p {
        font-weight:bold;
        padding:12px;
        font-size:15px;
    }
    .aviso h3{
        font-size:25px;
        font-weight:bolder;
        text-align:center;
    }
    .aviso{
    margin:0;
    margin-left:50%;
    margin-top:100px;
    background-color:#fff9c4;
    border:4px solid #fff176  ;
    width:350px;
    height:180px;
    }
    
    #form{
        margin-top:20%;
        margin-right:20%;
    }
    
    body{
    overflow: hidden;
    background-image: url(4.jpg);
    background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
    }
    
.erro{
        font-size:20px;
        text-align:center;
        border:5px solid #333  ;
        background-color: #333 ;
        color: white;
        position: absolute;
        margin:0;
        top:0;
        left:0;
        right:0;
    }
        #comentario{
        position:absolute;
        bottom:0;
        left:0;
        right:0;
    }
</style>

