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
<?php @session_start();?>
<?php @include 'verifica_login.php'; if(isset($_SESSION['logado'])): ?>
<html>
    <?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
    <?php include 'navbar2.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#fe412e">Java</a></h1>
        <h2>Um histórico bem resumido do Java</h2>
        <h3>Java 1.02</h3>
        <h4>250 classes</h4>
        <h5>Lenta.</h5>
        <p>Nome e logotipo interessantes. Divertido de usar. Muitos erros. Os applets são o destaque.</p>
        <h3>Java 1.1</h3>
        <h4>500 classes</h4>
        <h5>Um pouco mais rápida.</h5>
        <p>Mais recursos, mais amigável. Começando a se tornar muito popular. Código de GUI mais adequado.</p>
        <h3>Java 2 (versões 1.2 -1.4)</h3>
        <h4>2.300 clases</h4>
        <h5>Muito mais rápida.</h5>
        <p>Pode (em algumas situações) ser executada em velocidades conduzintes. Profissinal, poderosa. Vem em três versões: Micro Edition (J2ME), Standart Editionm (J2SE) e Enterpreise Edition (J2EE). Torna-se a linguagem preferida para novos aplicativos empresariais (principalmente os baseados na Web) e móveis.</p>
        <h3>Java 5.0 (versões 1.5 e posterioes)</h3>
        <h4>3.500</h4>
        <h5>Mais recursos, mais fácil de desenvolver</h5>
        <p>Além de adicionar mais de mil classes complementares, a Java 5.0 (conhecida como "Tiger) acrescentou alterações significativas à própria linguagem, tornando-a mais fácil (pelo menos em teoria) para os novos programadores e fornecendo novos recursos que eram populares em outras linguagens.</p>

        <a href="java5.php"><button class="javabtn" style="border-radius:2.4px;
">Proxima Pagina &nbsp<i class="fab fa-java" style="font-size:1.5em;"></i></button>
          </a>
    </section>
<?php include 'footer.php';?>
    <?php include 'scriptsjava.php';?>
    
    </body>
</html>
<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>