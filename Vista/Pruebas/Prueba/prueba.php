<?php
$titulo = "Probandolo";
include_once "../../Estructura/header.php";
?>
<link rel="stylesheet" type="text/css" href="est.css">
<script type="text/javascript" src="fun.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>



<div class="container mt-3">
<h1>Trabajo Obligatorio JS PEyLW 2024</h1>
<form id="miFormulario" novalidate>
    
    <label for="lnombre">Nombre:</label>
    <div class="input-group mb-3" id="div_nombre">
      <input class="form-control" type="text" id="nombre" name="nombre">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/fonts.svg">
 
    </div>

    <label for="lapellido">Apellido:</label>
    <div class="input-group mb-3" id="div_apellido">
      <input class="form-control" type="text" id="apellido" name="apellido">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/fonts.svg">
    </div>

    <label for="lemail">Email:</label>
    <div class="input-group mb-3" id="div_email">
      <input class="form-control" type="text" id="email" name="email">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/envelope-at.svg">
    </div>  

    <label for="ldni">DNI:</label>
    <div class="input-group mb-3" id="div_dni">
      <input class="form-control" type="text" id="dni" name="dni">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/fonts.svg">
    </div>  

    <label for="ciudad">Ciudad:</label>
    <select id="ciudad" name="ciudad">
      <option value="" selected disabled>Elige una opción...</option>
      <option value="ciudad1">Neuquén</option>
      <option value="ciudad2">Cipolletti</option>
      <option value="ciudad3">Centenario</option>
      <!-- Agrega más opciones aquí -->
    </select>


    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <div class="date-inputs">
      <input type="text" id="dia" name="dia" placeholder="D&iacute;a">  
      <input type="text" id="mes" name="mes" placeholder="Mes"> 
      <input type="text" id="anio" name="anio" placeholder="A&ntilde;o">
    </div>



    <label for="observaciones">Observaciones:</label>
    <textarea id="observaciones" name="observaciones"></textarea>

    <div id="divUsoOpcional"></div>
    <h2 id="cartel">Complete correctamente los datos requeridos</h2>

    <input type="submit" value="Enviar"  onclick="return validar();">
  </form>
</div>


<script> 

  $(document).ready(function(){
    $("#nombre").blur(function(){
      validarNombre($("#div_nombre"));
    });
    $("#apellido").blur(function(){
      validarNombre($("#div_apellido"));
    });    
    $("#email").blur(function(){
      validarEmail("#div_email");
    });
    $("#dni").blur(function(){
      validarDni("#div_dni");
    }); 
    $("#ciudad").blur(function(){
      validarCiudad();
    });
  });


  //document.getElementById("nombre").addEventListener("blur", function(){ validarNombre(this);});
  //document.getElementById("apellido").addEventListener("blur", function(){ validarNombre(this);});
  //document.getElementById("email").addEventListener("blur", validarEmail);
  //document.getElementById("ciudad").addEventListener("blur", validarciudad);
  document.getElementById("dia").addEventListener("blur", validarFecha);
  document.getElementById("mes").addEventListener("blur", validarFecha);
  document.getElementById("anio").addEventListener("blur", validarFecha);
</script>


<span class="input-group-text input-valido"><img src="../../Librerias/node_modules/bootstrap-icons/icons/check-circle.svg"></span>
<span class="input-group-text input-novalido"><img src="../../Librerias/node_modules/bootstrap-icons/icons/exclamation-triangle.svg"></span>
