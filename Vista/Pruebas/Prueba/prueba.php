<?php
$titulo = "Ejercicio 1";
include_once "../../Estructura/header.php";
?>
<link rel="stylesheet" type="text/css" href="est.css">
<script type="text/javascript" src="fun.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>



<div class="container mt-3">
<h1>Trabajo Obligatorio JS PEyLW 2024</h1>

  <form id="miFormulario">

    <label for="nombre">Nombre:</label>
    <div class="input-group">
        <span class="input-group-text">!</span>
        <input class="form-control" type="text" id="nombre" name="nombre">
    </div>

    <label for="apellido">Apellido:</label>
    <div class="input-group mb-3">
      <input class="form-control" type="text" id="apellido" name="apellido">
      <span class="input-group-text">!</span>
    </div>

    <label for="apellido">Email:</label>
    <input type="text" id="email" name="email">

    <label for="obras_sociales">Obras Social:</label>
    <select id="obras_sociales" name="obras_sociales">
      <option value=""></option>
      <option value="obra1">SOSUNC</option>
      <option value="obra2">ISSN</option>
      <option value="obra3">OSDE</option>
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



<br/>

<div id="enunciado">
  <h1>Enunciado</h1>
  Al presionar el boton "Enviar" deben realizarse las siguientes validaciones:

  </div>

<script> 

  document.addEventListener('DOMContentLoaded', function() {
    // Captura el formulario por su ID
    var form = document.getElementById('miFormulario');

    // Agrega un controlador de eventos para el evento 'submit'
    form.addEventListener('submit', function(event) {
      // Evita que el formulario se envíe
 
       // event.preventDefault();
     
    });
  });   

  document.getElementById("nombre").addEventListener("blur", function(){ validarNombre(this);});
  document.getElementById("apellido").addEventListener("blur", function(){ validarNombre(this);});
  document.getElementById("email").addEventListener("blur", validarEmail);
  document.getElementById("obras_sociales").addEventListener("blur", validarObra);
  document.getElementById("dia").addEventListener("blur", validarFecha);
  document.getElementById("mes").addEventListener("blur", validarFecha);
  document.getElementById("anio").addEventListener("blur", validarFecha);
</script>


