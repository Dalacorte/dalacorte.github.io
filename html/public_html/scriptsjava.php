 <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- User scripts -->
    <script type="text/javascript" src="pagina.js"></script>

<script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){ //Previni o Botão direito do mouse
        alert('Codigo protegido!');}
    }
    document.onmousedown=protegercodigo
    
    $(document).keydown(function (event) {
    if (event.keyCode == 123) { // Previni o F12 Codigo da tecla 123 == F12
        return false; //Retorna o Valor falso para o navegador entender que nada foi pressionado   //Evento Ctrl   Evento Shift      codigo da teclar == 73 == I
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Previni Ctrl+Shift+I        
        return false;//Retorna o Valor falso para o navegador entender que nada foi pressionado
    }
});
</script>
