<?php @session_start();?>
<?php @include 'verifica_login.php';
if(isset($_SESSION['logado'])): ?>
<html>

    <?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Main</title>
    <body>   
     <?php include 'imageshrink.php';?>
    <?php include 'navbar.php';?>
    <section id="pagina">
      <div class="content">
        <h1 style="color:#26b3fb">O que é o Elixir?</h1>
        <p style="line-weight:25px">O Elixir é um projeto idealizado e esquematizado por dois jovens programadores. Visando levar a programação para as pessoas que não a conhecem ou que querem aperfeiçoar suas habilidades. Temos preferência para os usuários que estão na faixa etária de 12 ~ 18 anos. O Elixir é uma plataforma de e-learning com foco na linguagem Java; futuramente, pretendemos acrescentar mais algumas linguagens: <text style="color:#4a3560">Elixir</text> e <text style="color:#0072c6">SQL</text>. Trazendo a melhor sintaxe possível, de forma mais limpa e organizada para que todos os nossos alunos consigam entender a sintaxe sem muitas dificuldades.
Elixir irá possui um visual limpo, com poucas cores. Pensado para que possua poucos objetos em tela, assim, tomando cuidado para não desfocar o aluno. Páginas simples e bem organizadas, com textos alinhados. É aquilo que estamos tentando buscar a todo o momento.
Outras versões estão por vir, serão off-line. Estamos visando todos os contratempos na hora do aprendizado. 
</p>
        <p style="float:right;">-Julio e Victor</p>
          <p style="float:left;font-weight:bolder;">Qualquer duvida vá para nossa aba de ajuda no menu superior direito!</p><br><br><br><br>
          <h2 style="text-align:center;">Comentarios</h2>
        <?php include 'comentario.php';?>
    </section>
  <?php include 'footer.php';?>
    <?php include 'scriptsjava.php';?>
     <?php include 'shrink.php';?>
    </body>
</html>
<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>