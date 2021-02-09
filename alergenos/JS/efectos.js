
 		$(document).ready(function () {
              $("#cuestionario").fadeIn(1500);
        });

		function siguiente() {
         document.getElementById('seleccion2').style.visibility='visible';
         document.getElementById('seleccion2').style.display='block';
         document.getElementById('seleccion1').style.visibility='hidden';
         document.getElementById('seleccion1').style.display='none';
      }

      function atras() {
         document.getElementById('seleccion1').style.visibility='visible';
         document.getElementById('seleccion1').style.display='flex';
         document.getElementById('seleccion2').style.visibility='hidden';
         document.getElementById('seleccion2').style.display='none';
      }

      $(window).bind("pageshow", function() {
     // update hidden input field

});


