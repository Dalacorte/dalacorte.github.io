<?php 
include 'conexao.php';
session_start();//inicia sessão
   if (empty($_REQUEST['email']) ||  empty($_REQUEST['senha'] )) {
    header("location:entrar.php?msg=erro");
       exit();
   } 
//SQL INJECTION
$email = mysqli_real_escape_string( $connect,$_REQUEST['email']);
$senha = mysqli_real_escape_string($connect,md5($_REQUEST['senha']));  

$SQL = "select email, senha from cadastro WHERE email = '$email' ";
$result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
$total = mysqli_num_rows($result_id); 

if($total) 
{ 
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
$dados = mysqli_fetch_array($result_id); 
 
// Agora verifica a senha 
if(($senha == $dados["senha"])) 
{

setcookie("test_cookie", "test", time() + 3600, '/');
if(count($_COOKIE) > 0) {
    unset($_COOKIE['test_cookie']);
} else {?>
    <script>alert("Ative os Cookies");</script>
<?php }

if(isset($_GET['matenhaConectado'])){
    setcookie("manterConexao", "manter", time() + 86400);
}


$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$emailr = $dado['email'];
$_SESSION['logado'] = true;
$_SESSION['email'] = $emailr; 
header("Location: pagina.php?msg=sucesso"); 
}
else{
header("Location: entrar.php?msg=erro"); 
    exit;
}
}
?>