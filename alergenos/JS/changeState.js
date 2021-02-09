$(document).ready(function(){ 

  $("#checkboxGlutenID").prop('checked', false);
  $("#checkboxHuevosID").prop('checked', false);
  $("#checkboxPescadosID").prop('checked', false);
  $("#checkboxCacahuetesID").prop('checked', false);
  $("#checkboxSojaID").prop('checked', false);
  $("#checkboxLacteosID").prop('checked', false);
  $("#checkboxFrutosSecosID").prop('checked', false);
  $("#checkboxApioID").prop('checked', false);
  $("#checkboxMostazaID").prop('checked', false);
  $("#checkboxSesamoID").prop('checked', false);
  $("#checkboxAzufreID").prop('checked', false);
  $("#checkboxMoluscosID").prop('checked', false);
  $("#checkboxAltramusesID").prop('checked', false);

  $("#checkboxDulceID").prop('checked', false);
  $("#checkboxSaladoID").prop('checked', false);


  $("#imagenG").css('transition', 'all .5s ease-in-out');
  $("#imagenH").css('transition', 'all .5s ease-in-out');
  $("#imagenP").css('transition', 'all .5s ease-in-out');
  $("#imagenCC").css('transition', 'all .5s ease-in-out');
  $("#imagenS").css('transition', 'all .5s ease-in-out');
  $("#imagenL").css('transition', 'all .5s ease-in-out');
  $("#imagenFC").css('transition', 'all .5s ease-in-out');
  $("#imagenA").css('transition', 'all .5s ease-in-out');
  $("#imagenM").css('transition', 'all .5s ease-in-out');
  $("#imagenGS").css('transition', 'all .5s ease-in-out');

  $("#dulceID").css('transition', 'all .5s ease-in-out');
  $("#saladoID").css('transition', 'all .5s ease-in-out');


          $banderaG = false;
          $("#imagenG").click(function() { 
            if($banderaG == false){
              $("#imagenG").css('border-radius', '50%');
              $("#imagenG").css('border', 'solid 4px grey');

              $("#imagenG").css('filter', 'grayscale(70%)');
              $("#imagenG").css('transform', 'rotate(360deg)');


              $("#checkboxGlutenID").prop('checked', true);
              $banderaG = true;
            }else if($banderaG == true){
              $("#imagenG").css('border-radius', '50%');
              $("#imagenG").css('border', 'solid 4px transparent');

              $("#imagenG").css('filter', 'grayscale(0%)');

              $("#imagenG").css('filter', 'grayscale(0%)');
              $("#imagenG").css('transform', 'rotate(0deg)');

              $("#checkboxGlutenID").prop('checked', false);
              $banderaG = false;
            }
          }); 

          $banderaH = false;
          $("#imagenH").click(function() { 
            if($banderaH == false){
              $("#imagenH").css('border-radius', '50%');
              $("#imagenH").css('border', 'solid 4px grey');

              $("#imagenH").css('filter', 'grayscale(70%)');
              $("#imagenH").css('transform', 'rotate(360deg)');
              



              $("#checkboxHuevosID").prop('checked', true);
              $banderaH = true;
            }else if($banderaH == true){
              $("#imagenH").css('border-radius', '50%');

              $("#imagenH").css('border', 'solid 4px transparent');

              $("#imagenH").css('filter', 'grayscale(0%)');
              $("#imagenH").css('transform', 'rotate(0deg)');


              $("#checkboxHuevosID").prop('checked', false);
              $banderaH = false;
            }
          }); 

          $banderaP = false;
          $("#imagenP").click(function() { 
            if($banderaP == false){
              $("#imagenP").css('border-radius', '50%');
              $("#imagenP").css('border', 'solid 4px grey');

              $("#imagenP").css('filter', 'grayscale(70%)');
              $("#imagenP").css('transform', 'rotate(360deg)');

              $("#checkboxPescadosID").prop('checked', true);
              $banderaP = true;
            }else if($banderaP == true){
              $("#imagenP").css('border-radius', '50%');
              $("#imagenP").css('border', 'solid 4px transparent');

              $("#imagenP").css('filter', 'grayscale(0%)');
              $("#imagenP").css('transform', 'rotate(0deg)');

              $("#checkboxPescadosID").prop('checked', false);
              $banderaP = false;
            }
          }); 

          $banderaCC = false;
          $("#imagenCC").click(function() { 
            if($banderaCC == false){
              $("#imagenCC").css('border-radius', '50%');
              $("#imagenCC").css('border', 'solid 4px grey');

              $("#imagenCC").css('filter', 'grayscale(70%)');
              $("#imagenCC").css('transform', 'rotate(360deg)');

              $("#checkboxCacahuetesID").prop('checked', true);
              $banderaCC = true;
            }else if($banderaCC == true){
              $("#imagenCC").css('border-radius', '50%');
              $("#imagenCC").css('border', 'solid 4px transparent');

              $("#imagenCC").css('filter', 'grayscale(0%)');
              $("#imagenCC").css('transform', 'rotate(0deg)');

              $("#checkboxCacahuetesID").prop('checked', false);
              $banderaCC = false;
            }
          });

          $banderaS = false;
          $("#imagenS").click(function() { 
            if($banderaS == false){
              $("#imagenS").css('border-radius', '50%');
              $("#imagenS").css('border', 'solid 4px grey');

              $("#imagenS").css('filter', 'grayscale(70%)');
              $("#imagenS").css('transform', 'rotate(360deg)');


              $("#checkboxSojaID").prop('checked', true);
              $banderaS = true;
            }else if($banderaS == true){
              $("#imagenS").css('border-radius', '50%');
              $("#imagenS").css('border', 'solid 4px transparent');

              $("#imagenS").css('filter', 'grayscale(0%)');
              $("#imagenS").css('transform', 'rotate(0deg)');


              $("#checkboxSojaID").prop('checked', false);
              $banderaS = false;
            }
          }); 

          $banderaL = false;
          $("#imagenL").click(function() { 
            if($banderaL == false){
              $("#imagenL").css('border-radius', '50%');
              $("#imagenL").css('border', 'solid 4px grey');

              $("#imagenL").css('filter', 'grayscale(70%)');
              $("#imagenL").css('transform', 'rotate(360deg)');


              $("#checkboxLacteosID").prop('checked', true);
              $banderaL = true;
            }else if($banderaL == true){
              $("#imagenL").css('border-radius', '50%');
              $("#imagenL").css('border', 'solid 4px transparent');

              $("#imagenL").css('filter', 'grayscale(0%)');
              $("#imagenL").css('transform', 'rotate(0deg)');

              $("#checkboxLacteosID").prop('checked', false);
              $banderaL = false;
            }
          }); 

          $banderaFC = false;
          $("#imagenFC").click(function() { 
            if($banderaFC == false){
              $("#imagenFC").css('border-radius', '50%');
              $("#imagenFC").css('border', 'solid 4px grey');


              $("#imagenFC").css('filter', 'grayscale(70%)');
              $("#imagenFC").css('transform', 'rotate(360deg)');

              $("#checkboxFrutosSecosID").prop('checked', true);
              $banderaFC = true;
            }else if($banderaFC == true){
              $("#imagenFC").css('border-radius', '50%');
              $("#imagenFC").css('border', 'solid 4px transparent');

              $("#imagenFC").css('filter', 'grayscale(0%)');
              $("#imagenFC").css('transform', 'rotate(0deg)');


              $("#checkboxFrutosSecosID").prop('checked', false);
              $banderaFC = false;
            }
          }); 

          $banderaA = false;
          $("#imagenA").click(function() { 
            if($banderaA == false){
              $("#imagenA").css('border-radius', '50%');
              $("#imagenA").css('border', 'solid 4px grey');

              $("#imagenA").css('filter', 'grayscale(70%)');
              $("#imagenA").css('transform', 'rotate(360deg)');


              $("#checkboxApioID").prop('checked', true);
              $banderaA = true;
            }else if($banderaA == true){
              $("#imagenA").css('border-radius', '50%');
              $("#imagenA").css('border', 'solid 4px transparent');

              $("#imagenA").css('filter', 'grayscale(0%)');
              $("#imagenA").css('transform', 'rotate(0deg)');


              $("#checkboxApioID").prop('checked', false);
              $banderaA = false;
            }
          }); 

          $banderaM = false;
          $("#imagenM").click(function() { 
            if($banderaM == false){
              $("#imagenM").css('border-radius', '50%');
              $("#imagenM").css('border', 'solid 4px grey');

              $("#imagenM").css('filter', 'grayscale(70%)');
              $("#imagenM").css('transform', 'rotate(360deg)');


              $("#checkboxMostazaID").prop('checked', true);
              $banderaM = true;
            }else if($banderaM == true){
              $("#imagenM").css('border-radius', '50%');
              $("#imagenM").css('border', 'solid 4px transparent');

              $("#imagenM").css('filter', 'grayscale(0%)');
              $("#imagenM").css('transform', 'rotate(0deg)');


              $("#checkboxMostazaID").prop('checked', false);
              $banderaM = false;
            }
          }); 

          $banderaGS = false;
          $("#imagenGS").click(function() { 
            if($banderaGS == false){
              $("#imagenGS").css('border-radius', '50%');
              $("#imagenGS").css('border', 'solid 4px grey');

              $("#imagenGS").css('filter', 'grayscale(70%)');
              $("#imagenGS").css('transform', 'rotate(360deg)');


              $("#checkboxSesamoID").prop('checked', true);
              $banderaGS = true;
            }else if($banderaGS == true){
              $("#imagenGS").css('border-radius', '50%');
              $("#imagenGS").css('border', 'solid 4px transparent');

              $("#imagenGS").css('filter', 'grayscale(0%)');
              $("#imagenGS").css('transform', 'rotate(0deg)');


              $("#checkboxSesamoID").prop('checked', false);
              $banderaGS = false;
            }
          }); 

          $banderaDULCE = false;
          $("#dulceID").click(function() { 
            if($banderaDULCE == false){
              $("#dulceID").css('border-radius', '50%');
              $("#dulceID").css('border', 'solid 4px grey');

              $("#dulceID").css('filter', 'grayscale(70%)');
              $("#dulceID").css('transform', 'rotate(360deg)');

              $("#checkboxDulceID").prop('checked', true);
              $banderaDULCE = true;
            }else if($banderaDULCE == true){
              $("#dulceID").css('border', 'solid 4px transparent');

              $("#dulceID").css('filter', 'grayscale(0%)');
              $("#dulceID").css('transform', 'rotate(0deg)');


              $("#checkboxDulceID").prop('checked', false);
              $banderaDULCE = false;
            }
          }); 

          $banderaSALADO = false;
          $("#saladoID").click(function() { 
            if($banderaSALADO == false){
              $("#saladoID").css('border-radius', '50%');
              $("#saladoID").css('border', 'solid 4px grey');

              $("#saladoID").css('filter', 'grayscale(70%)');
              $("#saladoID").css('transform', 'rotate(360deg)');


              $("#checkboxSaladoID").prop('checked', true);
              $banderaSALADO = true;
            }else if($banderaSALADO == true){
              $("#saladoID").css('border', 'solid 4px transparent');

              $("#saladoID").css('filter', 'grayscale(0%)');
              $("#saladoID").css('transform', 'rotate(0deg)');


              $("#checkboxSaladoID").prop('checked', false);
              $banderaSALADO = false;
            }
          });

          // function siguiente(){
          //   document.getElementById('seleccion2').style.display='inline-block';
          //   document.getElementById('seleccion2').style.display='inline-block';
          //           // document.getElementById('seleccion2').style.visibility='visible';
          //           // document.getElementById('seleccion2').style.display='inline-block';
          //           // document.getElementById('seleccion2').style.textAlign= "center";
          //           // document.getElementById('seleccion2').style.margin="auto";
          //           // document.getElementById('formulario').style.margin="auto";
          //           // document.getElementById('formulario').style.textAlign= "center";
          //           // document.getElementById('seleccion2').style.visibility='visible';
          //           // document.getElementById('seleccion2').style.display='inline-block';
          //           // document.getElementById('seleccion2').style.width='100%';

          //           // document.getElementById('botonForm').style.visibility='visible';
          //           // document.getElementById('botonForm').style.display='inline-block';


          //           // document.getElementById('seleccion1').style.visibility='hidden';
          //           // document.getElementById('seleccion1').style.display='none';

          //         }

      });  