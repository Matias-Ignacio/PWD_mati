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
  <h1>Input validados</h1>
<form id="miFormulario" class="row g-3 needs-validation" novalidate>
    
<div class="col-md-6 campos" id="div_nombre">
    <label for="lnombre">Nombre:</label>
    <div class="grupoISD mb-3">
      <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese nombre">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/fonts.svg"></span>
      <div class="subtitulo">Complete este campo...</div>
    </div>
</div>    

<div class="col-md-6" id="div_apellido">
    <label for="lapellido">Apellido:</label>
    <div class="input-group mb-3">
      <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Ingrese apellido">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/fonts.svg"></span>
    </div>
    <div class="subtitulo">Complete este campo...</div>
</div> 

<div class="col-md-6" id="div_email">
    <label for="lemail">Email:</label>
    <div class="input-group mb-3">
      <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese email válido">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/envelope-at.svg"></span>
    </div>  
    <div class="subtitulo">Complete este campo...</div>
</div> 

<div class="col-md-6" id="div_telefono">
    <label for="ltelefono">Telefono:</label>
    <div class="input-group mb-3" id="div_telefono">
      <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Ingrese número">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/telephone-x-fill.svg"></span>
    </div> 
    <div class="subtitulo">Complete este campo...</div>
</div>  

<div class="col-md-6" id="div_usuario">
  <label for="lusuario">Usuario:</label>
  <div class="input-group mb-3">
    <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Ingrese nombre de usuario">
    <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/person.svg"></span>
  </div> 
  <div class="subtitulo">Complete este campo...</div>
</div> 

<div class="col-md-6" id="div_contrasenia">
  <label for="lcontrasenia">Contraseña:</label>
  <div class="input-group mb-3" id="div_contrasenia">
    <input class="form-control" type="password" id="contrasenia" name="contrasenia" placeholder="Ingrese contraseña">
    <span class="input-group-text" id="spanContrasenia"><img src="../../Librerias/node_modules/bootstrap-icons/icons/eye-slash.svg"></span>
  </div> 
  <div class="subtitulo">Complete este campo...</div>
</div> 

<div class="col-md-4" id="div_dni">
    <label for="ldni">DNI:</label>
    <div class="input-group mb-3" id="div_dni">
      <input class="form-control" type="text" id="dni" name="dni" placeholder="Ingrese D.N.I.">
      <span class="input-group-text"><img src="../../Librerias/node_modules/bootstrap-icons/icons/pass.svg"></span>
    </div> 
    <div class="subtitulo">Complete este campo...</div>
</div>  

<div class="col-md-4" id="div_ciudad">
    <label for="ciudad">Ciudad:</label>
    <div class="input-group mb-3" id="div_ciudad">
      <select class="form-control" id="ciudad" name="ciudad">
        <option value="" selected disabled>Elige una opción...</option>
        <option value="ciudad1">Neuquén</option>
        <option value="ciudad2">Cipolletti</option>
        <option value="ciudad3">Centenario</option>
        <!-- Agrega más opciones aquí -->
      </select>
    </div>
    <div class="subtitulo">Complete este campo...</div>
</div> 

<div class="col-md-4" id="div_fecha">
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <div class="input-group mb-3" id="div_fecha">
      <input class="form-control" type="text" id="dia" name="dia" placeholder="D&iacute;a">  
      <input class="form-control" type="text" id="mes" name="mes" placeholder="Mes"> 
      <input class="form-control" type="text" id="anio" name="anio" placeholder="A&ntilde;o">
    </div>
    <div class="subtitulo">Complete este campo...</div>
</div> 

    <div id="divUsoOpcional"></div>
    <h2 id="cartel">Complete correctamente los datos requeridos</h2>

    <input type="submit" value="Enviar"  onclick="return validar();">
    <input type="reset" name="reset" id="reset" value="Borrar">
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
      validarEmail($("#div_email"));
    });
    $("#telefono").blur(function(){
      validarDni($("#div_telefono"));
    }); 
    $("#dni").blur(function(){
      validarDni($("#div_dni"));
    }); 
    $("#ciudad").blur(function(){
      validarCiudad();
    });
    $("#usuario").blur(function(){
      validarUsuario($("#div_usuario"));
    }); 
    $("#contrasenia").blur(function(){
      validarContrasenia($("#div_contrasenia"));
    }); 
    $("#spanContrasenia").click(function(){
      contraseniaVisible($("#div_contrasenia"))
    });
  });

  document.getElementById("dia").addEventListener("blur", function(){
    obj = document.getElementById("dia");
    var cadena = parseInt(obj.value);
   
    if (((cadena <= fechaActual.getFullYear()) && (cadena >= 2000)) || ((cadena <= 99) && (cadena >= 30))){
        obj.setCustomValidity('');  // Restablecer la validez 
        return true;
    }else{
        obj.setCustomValidity(' '); 
        return false;
    }
  });

 // document.getElementById("dia").addEventListener("blur", validarFecha);
 // document.getElementById("mes").addEventListener("blur", validarFecha);
 // document.getElementById("anio").addEventListener("blur", validarFecha);
</script>

