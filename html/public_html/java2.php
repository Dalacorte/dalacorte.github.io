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
<?php if(isset($_SESSION['logado'])): ?>
<html>
    <?php include 'header.php';?>
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
    <?php include 'navbar2.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#fe412e">Java - Capitulo 1</h1>
        <h2>Linguagem de programação, o que é?</h2>
        <p>Uma linguagem de programação é um método padronizado para comunicar instruções para um computador. É um conjunto de regras sintáticas e semânticas usadas para definir um programa de computador. Permite que um programador especifique precisamente sobre quais dados um computador vai atuar, como estes dados serão armazenados ou transmitidos e quais ações devem ser tomadas sob várias circunstâncias. Linguagens de programação podem ser usadas para expressar <a class="tooltip">algoritmos<span class="tooltiptext">Algoritmo é uma sequência finita de instruções bem definidas e não ambíguas, cada uma das quais devendo ser executadas mecânica ou eletronicamente em um intervalo de tempo finito e com uma quantidade de esforço finita</a></span> com precisão.</p>
        <p>O conjunto de certas palavras, compostos de acordo com as regras da linguagem, constituem o código fonte de um software. Esse código fonte é depois traduzido para <a class="tooltip">código de máquina<span class="tooltiptext">Este codigo é composto somente por números, representados de forma binária ou seja 0 e 1, que sob o ponto de vista do computador, representam as operações e os operandos que serão usados no processamento do programa! Para um ser humano, a linguagem de máquina é dificílima de se compreender. Por isto usamos programas para programar.</a></span>, que é executado pelo microprocessador.</p>
        <p>Uma das principais metas das linguagens de programação é que programadores tenham uma maior produtividade, permitindo expressar suas intenções mais facilmente do que quando comparado com a <a class="tooltip2">linguagem que um computador entende nativamente.<span class="tooltiptext">A Forma que o computador entende nativamente é basicamente o que retratamos no "código de maquina" a maquina nativamente só entende este tipo de codigo(0 e 1) o que o programa faz é ser um interprete ou um tradutor para a maquina</a></span> Assim, linguagens de programação são projetadas para adotar uma sintaxe de nível mais alto, que pode ser mais facilmente entendida por programadores humanos. Linguagens de programação são ferramentas importantes para que programadores e engenheiros de software possam escrever programas mais organizados e com maior rapidez.</p>
        <p>Site para usar o compilador online caso não queira instalar o NetBeans: <a style="color:#fe412e;" href="https://www.compilejava.net">Compilador Online Java</a></p>
         <a href="java3.php"><button class="javabtn" style="border-radius:2.4px;
">Proxima Pagina &nbsp<i class="fab fa-java" style="font-size:1.5em;"></i></button></a>
        </div>
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