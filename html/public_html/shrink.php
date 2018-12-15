   <script type="text/javascript">
    $(function(){
 var shrinkHeader = 50;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll == shrinkHeader ) {
           $('.header').addClass('shrink');     
        }
        else {
            $('.header').removeClass('shrink');
            $('.header').removeClass('fixeed');
             $('.header').addClass('abosul');
        }  
  });
   /*    
var sairtela = function (){
    setTimeout(sairtela,5000);
}        
sairtela();
  */
        var recursiva = function () {
            if(getCurrentScroll() == 0){
    window.scrollTo(0, 1);
        }
}
setTimeout(recursiva,4000);
clearTimeout(recursiva);
        
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});

    document.onkeydown = fkey;
    document.onkeypress = fkey
    document.onkeyup = fkey;
    
    function fkey(e){
        e = e || window.event; 

        if (e.keyCode == 116) {
             window.scrollTo(0, 0);
        }
 }  
   </script>

        <style>
            
            .fixeed{ 
    position: fixed;
            }        
.header {
    top: -40;
    left: 0;
    width: 100%;
    color:#fff;
    z-index: 1000;
    height: 120vh;
    overflow: hidden;
    -webkit-transition: height 0.3s;
    -moz-transition: height 0.3s;
    transition: height 0.3s;
    text-align:center;
    line-height:160px;

}
.header.shrink {
    height: 385px;
}
            .header .abosul{
                position: inherit;
            }
</style>