$(document).ready(function(){
    
    $('.sticky').css({ position: 'fixed', top: 0, right:0});
    $('a[href^="#"]').click(function() {
        var destino = $(this.hash);
        if (destino.length == 0) {
          destino = $('a[name="' + this.hash.substr(1) + '"]');
        }
        if (destino.length == 0) {
          destino = $('html');
        }
        $('html, body').animate({ scrollTop: destino.offset().top }, 500);
        return false;
      });



function muestra_oculta(id){
  if (document.getElementById){ //se obtiene el id
  var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
  el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
  }
  }
  window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
  muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
  }

});