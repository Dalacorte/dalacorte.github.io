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
        <h1 style="color:#fe412e">Java</h1>
        <h2>Como o Java funciona</h2>
        <p>O objetivo é escreve um aplicativo (neste exemplo, um convite de festa interativo) e fazê-lo funcionar em qualquer dispositivo que seus amigos tiverem.</p>
        <h3>Código-fonte</h3>
        <p>Creie um documento para o código-fonte. Use um protocolo estabelecido (nesse caso, a linguagem Java).</p>
        <h3>Compilador</h3>
        <p>Execute seu documento em um compilador de código-fonte. O compilador procurará erros e não deixará você compilar até ter certeza de que tudo será executado corretamente</p>
        <h3>Saída (código)</h3>
        <p>O compilador criará um novo documento, codificado em bytecode Java. Qualquer dispositivo capaz de executar Java conseguirá interpretar/converter esse arquivo em algo que possa processar. O bytecode compilado é independente da plataforma.</p>
        <h3>Maquinas virtuais</h3>
        <p>Seus amigos não têm uma máquina Java física, mas todos têm uma máquina Java virtual (implementada em software) sendo executada dentro de sesus aparelhos eletrônicos. A máquina virtual lerá e executará bytecode.</p>
        <h2>O que você fará em Java</h2>
        <p>Você criará um arquivo de código-fonte, compilará usando o compilador javac, em seguida, executará o bytecode em uma máquina virtual java</p>
        <h3>Código-fonte</h3>
        <p>Digite seu código-fonte. Salve como: <?php echo $titulo; ?>.java</p>
        <h4>Código:</h4><br>
          <div class="codigo">
        <h5 style="
    color: #fe412e">
        package party;<br>
        import java.awt.*; <br>
        import java.awt.event.*; <br>
        class Party{ <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp public void buildInvite(){ <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Frame f = new Frame(); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Label l = new Label("Meu primeiro código Java"); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Button b = new Button ("Adorei"); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Button c = new Button ("Quero mais"); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Panel p = new Panel (); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp p.add(l); <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp // você pode acrescentar mais linhas de código aqui! <br>
        &nbsp &nbsp &nbsp &nbsp &nbsp } <br>
        }<br></h5>
              </div>
        <p>Você também pode copiar o código-fontem, caso queira.<a href="AlgoritmoJavaPaginas/AlgoritmoJavaPagina3/AlgoritmoJavaPagina3.txt" style="color:#fe412e"> Clique aqui!</a></p>
        <h3>Compilador</h3>
        <p>Compile o arquivo <?php echo $titulo; ?>.java executando o javac (aplicativo do compilador). Se não houver erros, você terá um segundo documento chamado <?php echo $titulo; ?>.class. O arquivo <?php echo $titulo; ?>.class gerado pelo compilador é composto de bytecodes.</p>
        <h3>Saído (código)</h3>
        <p>Código Compilado: <?php echo $titulo; ?>.class <br>~Teremos uma imagem aqui</p>
        <h3>Maquinas Virtuais</h3>
        <p>Execute o programa iniciando a Java Virtual Machine (JVM) com o arquivo <?php echo $titulo; ?>.class. A JVM converterá o bytecode em algo que a plataforma subjacente entenda e executará seu programa.</p>

        <a href="java4.php"><button class="javabtn" style="border-radius:2.4px;
">Proxima Pagina &nbsp<i class="fab fa-java" style="font-size:1.5em;"></i></button>
          </a>
        </div>
    </section>
<?php include 'footer.php';?>
    <?php include 'scriptsjava.php';?>
        <style>
        .codigo{
    border:1px solid #222;
    background-color: #222;
    padding:12px;
    border-radius: 8px;
}
        </style>

        <script>
          var copyTextareaBtn = document.querySelector('.copiar');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.textarea');
  copyTextarea.select();
});
        </script>
    </body>
</html>
<?php else: ?>
<script language= "JavaScript">
location.href="entrar.php";
</script>
<?php endif;?>