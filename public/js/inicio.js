var imgCubo = [];
imgCubo[0] = '/images/inicio/cubo_empresas2.png' ; //'/images/inicio/cubo_empresas.png';
imgCubo[1] = '/images/inicio/cubo_estudiantes2.png';
imgCubo[2] = '/images/inicio/cubo_universidades2.png';

var altCubo = [];
altCubo[0] = 'Empresas';
altCubo[1] = "Estudiantes";
altCubo[2] = "Universidades";

var i=0;

window.onload = function() {
slide();

};

function slide(){
 //confirm("Press a button!0" + document.getElementById("imageCubo").alt);
 //document.getElementById("imageCubo").alt= "hola";
 //confirm("Press a button!0" + document.getElementById("imageCubo").alt);
 document.getElementById("imgCubo").src= imgCubo[i];
 document.getElementById("imgCubo").alt= altCubo[i];
 i++;
 //confirm("Press a button!" + i);
 if(i==imgCubo.length){
  i=0;
 }
 setTimeout(function(){ slide(); },2000);
}
