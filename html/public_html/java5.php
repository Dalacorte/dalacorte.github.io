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
        <h2>Aponte seu lápis</h2>
        <h3>Veja como é fácil escrever código Java</h3>
        <p>Tente adivinhar o que cada linha de código está fazendo... <br> As respostas estão <a href="file:///C:/Users/archwinlinu/Desktop/AlgoritmoJavaPaginas/AlgoritmoJavaPagina5/AlgoritmoJavaPagina5.txt" style="color:#fe412e">aqui</a></p>
        <p>int tamanho = 27;</p>
        <p>String nome = "<?php echo $titulo; ?>";</p>
        <p>Codigo meuCodigo = new Codigo(nome, <?php echo $titulo; ?>);</p>
        <p>x = <?php echo $titulo; ?> - 5;</p>
        <p>if (x < 15 ) meuCodigo.executa(8);</p>
        <p>while (x > 3) { <br>
        &nbsp &nbsp &nbsp &nbsp meuCodigo.compila();<br></p>
        }
        <p>int[] numLista = {2,4,6,8};</p>
        <p>System.out.print("Olá Mundo!");</p>
        <p>System.out.print("Meu nome é:" + nome);</p>
        <p>String num = "8";</p>
        <p>int z = Integer.parseInt(num);</p>
        <p>try { <br>
        &nbsp &nbsp &nbsp &nbsp leiaArquivo("meuArquivo.txt);<br>
        }</p>
        <p>catch(ArquivoNaoEncontradoExcecao ex){ <br>
        System.out.print("Arquivo Não Encontrado"); <br>
        }</p>
        <p>Ainda não é preciso se preocupar em entender tudo isso!</p>
        <p>Tudo que se encontra aqui é explicado com maiores detalhes neste curso, grande parte nos primeiros capítulos. Se o Java lembra uma linguagem que você usou no passado, alguns desses itens parecerão simples. Caso contrário, não se preocupe com isso. Chegaremos lá...</p>

        <a href="java6.php"><button class="javabtn" style="border-radius:2.4px;
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