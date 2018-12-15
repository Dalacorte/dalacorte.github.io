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
        <h2>Estrutura do código</h2>
        <h3>O que existe em um arquivo-FONTE?</h3>
        <p>um arquivo de código-fonte (com a extensão Java) contém uma definição de classe. A classe representa uma parte do seu programa, embora um aplicativo muito pequeno possa precisar apenas de uma classe. A classe deve ficar dentro de uma par de chaves</p>
        <p>public class <?php echo $titulo; ?> { <br><br>
        }</p>
        <h3>O que existe em uma CLASSSE?</h3>
        <p>Uma classe tem um ou mais métodos. Na classe <?php echo $titulo; ?>, o método programar conterá instruções de como o cão deve latir. Seus métodos devem ser declarados denro de uma classe (em outras palavras, dentro das chaves da classe).</p>
        <p>public class <?php echo $titulo; ?> { <br>
          &nbsp &nbsp &nbsp &nbsp void programar() { <br><br>
        } <br>
        }</p>
        <h3>O que existe em um MÉTODO?</h3>
        <p>Dentro das chaves de um método, escreva as instruções de como ele deve ser executado. O código do método é basicamente um conjunto de instruções, e por enquanto você pode considerar o método como se fosse uma função ou procedimento.</p>
        <p>public class <?php echo $titulo; ?> { <br>
        &nbsp &nbsp &nbsp &nbsp void programar() { <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp instrução1; <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp instrução2; <br>
        } <br>
        }</p>
        <h3>Anatomia de uma classe</h3>
        <p>Quando a JVM começar a ser executada, procurará a classe que você forneceu na linha de comando. Em seguida, começará a procurar um método especialmente escreito que se pareça exatamente com:</p>
        <p>public static void main (String[] args) { <br>
        &nbsp &nbsp &nbsp &nbsp // seu código aqui <br>
        }</p>
        <p>Depois a JVM executará tudo que estiver entre as chaves { } de seu método principal. Todo aplicativo Java precisa ter menos uma classe e um método main (nao um método main por calsse, apenas um por aplicativo).</p>
        <p>public class MeuPrimeiroCodigo { <br>
        &nbsp &nbsp &nbsp &nbsp pubic static void main (String[] args) { <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp System.out.println("<?php echo $titulo; ?>"); <br>
        &nbsp &nbsp } <br>
        }</p>
        <h3 style="color:#fe412e">Julio, tudo isso deverá ficar num daqueles "links" em que você passa o mouse e ele te dá um balãozinho</h3>
        <p>public = pública para que todos possam acessá-la</p>
        <p>class = esse é um classe</p>
        <p>MeuPrimeiroCodigo = o nome dessa classe</p>
        <p>{ chave de abertura da classe</p>
        <p>public = pública para que todos possam acessá-la</p>
        <p>static = abordaremos depois</p>
        <p>void = tipo de retorno. void significa que não há valor de retorno</p>
        <p>main = nome desse método</p>
        <p>(String[] args) = argumentos do método. Esse método deve receber uma matriz de strings, e a matriz se chamará args</p>
        <p>{ = chave de abertura do método</p>
        <p>System.out.print = essa instrução significa exibir na saída padrão (o parão é a linha de comando)</p>
        <p>("<?php echo $titulo; ?>") = a string que você quer exibir</p>
        <p>; = toda instrução DEVE terminar com ponto-e-vírgular!</p>
        <p>} = chave de fechamento do método main</p>
        <p>} = chave de fechamento da classe MeuPrimeiroCodigo</p>
        <h3 style="color:#fe412e">Julio, cada comando desses acima, deverá ficar em uma balãozinho diferente, por isso, coloquei cada um em um "< p >" diferente</h3>
        <h3>Criando uma classe com método main</h3>
        <p>Em Java, tudo é inserido em uma classe. Você criará seu arquivo de código-fonte (com extensão .java) e, em seguida, o converterá em um novo arquivo de class (com extensão .class). Quando executar seu programa, na verdade estará executando uma classe.</p>
        <p>Executar um programa significa informar à Java Virtual Machine (JVM) para "carregar a classe MeuPrimeiroCodigo e, em seguida, execute seu método main(). Continue executando até todo o código de main ter terminado".</p>
        <p>No Capítulo 2, nos aprofundaremos no assunto das classes, mas, por enquanto, você só precisa pensar nisto: como escrever um código Java de modo que ele seja executado? E tudo começa com main().</p>
        <p>O método main() é onde seu programa começará a ser executado.</p>
        <p>Independente do tamanho do seu programa (em outras palavras, não importa quantas classes o seu programa vai usar), é precisa que java um método main() que dê início ao processo.</p>
        <h3>O que você pode inserir no método main?</h3>
        <p>Quando você estiver dentro da main (ou de qualquer método), a diversão começará. Você pode inserir todas as coisas que costumam ser usadas na maioria das linguagens de programação para fazer o computador executar algo.</p>
        <p>Seu código pode instruir a JVM a:</p>
        <h4>fazer algo <br>
        Instruções: declarações, atribuições, chamadasa de método, etec.</h4>
        <p>int x = 3;</p>
        <p>String nome = "<?php echo $titulo; ?>";</p>
        <p>x = x * 17;</p>
        <p>System.out.print("x é " + x);</p>
        <p>double d = Math.random();</p>
        <p>// isto é um comentário</p>
        <h4>fazer açgp repetidamente <br>
        Loops: for e while</h4>
        <p>while (x > 12) { <br>
        &nbsp &nbsp &nbsp &nbsp x = x - 1; <br>
        }</p>
        <p>for (int x = 0; x < 10; x = x + 1) { <br>
        &nbsp &nbsp &nbsp &nbsp System.out.print("x agora é " + x ); <br>
        }</p>
        <h4>fazer algo sob essa condição <br>
        Ramificação: teste if/else</h4>
        <p>if (x == 10) { <br>
        &nbsp &nbsp &nbsp &nbsp System.out.print("x deve ser 10"); <br>
        } else { <br>
        &nbsp &nbsp &nbsp &nbsp System.out.print("x não é 10"); <br>
        }</p>
        <p>if ((x < 3) & (nome.equals("<?php echo $titulo; ?>"))) { <br>
        &nbsp &nbsp &nbsp &nbsp System.out.println("Codigo"); <br>
        }</p>
        <p>System.out.print("essa linha rodará não importa o que aconteça");</p>
        <h3>A brincadeira da sintaxe</h3>
        <p>- Cada instrução deve terminar com ponto-e-vírgula.</p>
        <p>x = x + 1;</p>
        <p>- Um comentário de linha única começa com duas barras.</p>
        <p>x = 22;</p>
        <p>// esta linha me incomoda</p>
        <p>- A maioria dos espaços em branco não é importante</p>
        <p>x &nbsp &nbsp = &nbsp &nbsp 3 &nbsp &nbsp ;</p>
        <p>- As variáveis são declaradas com um nome e um tipo (você aprenderá todos os tipos Java no Capítulo 3).</p>
        <p>int <?php echo $titulo; ?>;</p>
        <p>// tipo: int, nome: <?php echo $titulo; ?></p>
        <p>- As classes e métodos devem ser definidos dentro de uma par de chaves.</p>
        <p>public void go() { <br>
        // o código entra aqui <br>
        }</p>
        <a href="java7.php"><button class="javabtn" style="border-radius:2.4px;
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