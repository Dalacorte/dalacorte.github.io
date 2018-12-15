<?php 
include "conexao.php";
include "header.php";

$codigo = $_REQUEST['codigo'];
$sql_code =   "SELECT codigo FROM codigos WHERE codigo = '$codigo'  and data > NOW() ";
$busca = mysqli_query($connect,$sql_code); 
$total = mysqli_num_rows($busca);

if($total >= 1 ){
$email_codigo = base64_decode($codigo);
$sql_code =   "SELECT * FROM codigos WHERE codigo = '$codigo'  and data > NOW() ";
$busca = mysqli_query($connect,$sql_code); 
$total = mysqli_num_rows($busca);

if(@isset($_POST[ok])){
    $senha = $_REQUEST['senha'];
    $senha2 = $_REQUEST['senha2'];
    if($senha != $senha2 || $senha = "" || $senha2 = ""){
    echo "<p class='erro'>Senhas Diferentes ou Senhas Invalidas</p>";
    }
    else if($total >= 1){
    $nova_senha = $_POST['senha'];
    $senha_codificada = md5($nova_senha);
    $atualizar = mysqli_query($connect,"UPDATE cadastro SET senha = '$senha_codificada' WHERE email = '$email_codigo'");
   if($atualizar){
       $mudar = mysqli_query($connect,"DELETE FROM codigos WHERE codigo = '$codigo'");
        header("location:entrar.php?msg=sucessor");?>
                <script language= "JavaScript">
                location.href="entrar.php?msg=sucessor";
                </script><?php
}}}
?>
<title><?php echo $titulo; ?> - Recuperação de Senha</title>
<h1>Digite a Nova Senha</h1>
<form action="" method="post" enctype="multipart/form-data">
<input name="senha"  title="PIN(APENAS NUMEROS)" required="required" type="password" pattern="[0-9]+$" id="Password" placeholder="Novo PIN">
<input name="senha2"  title="PIN(APENAS NUMEROS)" required="required" type="password" pattern="[0-9]+$" id="Password2" placeholder="Repetir Novo PIN"> 
<button name="ok" class="configbtn" style="border-radius:2.4px;
">Nova Senha &nbsp<i class="far fa-check-circle"></i></button>
</form> 
<?php include 'footer.php';?>
<?php }

else{  
?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php } ?> 

<link rel="stylesheet" type="text/css" href="form.css">
<style>

form input{
    margin-left:280px;
}
form button{
    position:absolute;
    top:22%;
    left:280px;
}
h1{
    margin-top:50px;
}
    body{
    overflow: hidden;
    background-image: url(4.jpg);
    background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
    }
    
    #comentario{
        position:absolute;
        bottom:0;
        left:0;
        right:0;
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
</style>