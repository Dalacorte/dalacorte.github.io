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
<?php @include 'verifica_login.php';
if(isset($_SESSION['logado'])): ?>
<html>
<?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
        
<?php include 'navbar2.php';?>
    <section id="java">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#fe412e">Java - Introdução</h1>
        
        
        <a class="tooltip">"Computadores são inúteis, eles apenas dão respostas"<p class="tooltiptext"  >Uma frase do escultor, ceramista, cenógrafo, poeta e dramaturgo espanhol Picasso</p></a>
        <p>O Java está na maioria das plataformas, entretanto, muitas pessoas não a conhecem ou sequer sabem que ela existe.</p>
        <p>Java é uma <a class="tooltip">Linguagem de Programação<span class="tooltiptext" >Linguagem de programação é basicamente uma linguagem especifica usada na programação ou seja é a "linguagem usada para programar"</span></a>&nbsp&nbsp<a class="tooltip">Orientada a Objeto<span class="tooltiptext"> É uma maneira de programar que tem como foco trazer objetos do mundo real para o digital</span></a>. A característica mais marcante dessa linguagem é que programas criados nela não são compilados em código nativo da plataforma. Programas em Java são compilados para um <a class="tooltip2">ByteCode<span class="tooltiptext">É um codigo que é transeferido por uma máquina virtual, o que permite aos desenvolvedores criarem um programa uma única vez e depois executar este em qualquer uma das plataformas suportadas pela tecnologia.</span></a> Esta afim de aprender mais sobre esse fantástico mundo e estar por dentro dos seus conceitos como ByteCode ou o que é uma linguagem de programação então venha e embarque nesse incrivel curso de Java que vai te impressionar!</p> 
        <a href="java2.php"><button class="javabtn" style="border-radius:2.4px;
">Aprender &nbsp<i class="fab fa-java" style="font-size:1.5em;"></i></button>
          </a>
        <text style="color:#fe412e;font-weight:bolder;text-decoration:none">Passe o mouse nas palavras laranjas para ver suas definições!</text><br><br><br><br>
          <h2 style="text-align:center;">Comentarios Sobre o Curso</h3>
      <?php include 'comentario.php';?>
    </section>
<?php include 'botoes.php';?>
<?php include 'footer.php';?>
<?php include 'scriptsjava.php';?>
    </body>
</html>
<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>