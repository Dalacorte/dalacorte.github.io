<?php 
include 'conexao.php';
session_start();//inicia sessão
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$senha = md5($_REQUEST['senha']);

$query_select = "SELECT email FROM cadastro WHERE email = '$email'";

$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
@$logarray = $array['$email'];
  if($email == "" || $email == null || $senha == "" || $senha == null || $nome == "" || $nome == null):
   /* echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='entrar.php';</script>";
 */ 
    header("location:registrar.php?msg=erroe");
    
        die();
else:
      if($logarray == $email):
 
       /* echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='entrar.php';</script>";*/
           header("location:entrar.php?msg=erroj");
        die();
 
      else:

        $query = "INSERT INTO cadastro (senha,email,nome) VALUES ('$senha','$email','$nome')";
        $insert = mysqli_query($connect,$query);
         
        if($insert):
            
            header("location:entrar.php?msg=sucesso");
          /*echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='entrar.php'</script>";*/
        else:
            header("location:registrar.php?msg=erro");
            
        die();
          /*echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='registrar.php';</script>";*/
        endif;
        endif;
        endif;
?> 