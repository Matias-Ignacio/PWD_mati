<?php
$titulo = "Probandolo";
include_once '../../Estructura/header.php';
?>


<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="divformulario">
<form class="row g-3 needs-validation" action="../Accion/ejeprueba-accion.php" method="post" id="formLogin" name="formLogin" novalidate>

  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" minlength="2" maxlength="30" pattern="^\s*[A-z]+(\s[A-z]+)*\s*$" title="Ingrese solo letras" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Ingrese un nombre.</div>
  </div>

  <div class="col-md-4">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" minlength="2" maxlength="30" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" title="Ingrese solo letras" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Ingrese apellido</div>
  </div>

  
  <div class="col-md-4">
    <label for="dni" class="form-label">D.N.I</label>
    <input type="text" class="form-control" id="dni" name="dni" placeholder="11222333" pattern="[0-9]{6,8}"  required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">dni no válido.</div>
  </div>

  <div class="col-md-4">
    <label for="usuario" class="form-label">Nombre de usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" aria-describedby="inputGroupPrepend" minlength="6" maxlength="30" pattern="[A-9]{6, 30}"  required>
      <div class="valid-feedback">¡Ok!</div>
      <div class="invalid-feedback">Por favor, elije un nombre de usuario.</div>
    </div>
  </div>

  <div class="col-md-4">
    <label for="clave" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="clave" placeholder="Contraseña" minlength="8" maxlength="30" name="clave" pattern="[A-z0-9][A-z0-9]+[0-9A-z]+"  required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, contraseña</div>
  </div>

  <div class="col-md-4">
    <label for="clave2" class="form-label">Repetir Contraseña</label>
    <input type="password" class="form-control" id="clave2" name="clave2" pattern=""  required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, contraseña</div>
  </div>

  <div class="col-md-2">
    <label for="prefijo" class="form-label">Código Area</label>
    <input type="text" class="form-control" id="prefijo" name="prefijo" placeholder="123" pattern="[0-9]{2,3}"  required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">prefijo no válido.</div>
  </div>

  <div class="col-md-4">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="2333678" pattern="[0-9]{6,9}"  required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Telefono no válido.</div>
  </div>

  <div class="col-md-6">
    <label for="email"  class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="correo@correo.com" required pattern="[A-z0-9-_/.][@]{1}[A-z]{3}[/.][A-z]{2,3}">
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
  </div>

  <div class="col-md-4">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion 123" pattern="^\s*[A-Za-z0-9]+(\s[A-Za-z0-9]+)*\s*$" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, ingrese la dirección.</div>
  </div>

  <div class="col-md-4">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" minlength="2" maxlength="30" pattern="^\s*[A-Za-z]+(\s[A-Za-z]+)*\s*$" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, elije una ciudad.</div>
  </div>

  <div class="col-md-4">
    <label for="provincia" class="form-label">Provincia</label>
    <select class="form-select" id="provincia" required>
      <option selected disabled value="">Elige...</option>
      <option>Chubut</option>
      <option>La Pampa</option>
      <option>Mendoza</option>
      <option>Neuquén</option>
      <option>Río Negro</option>
      <option>Salta</option>
      <option>Santa Cruz</option>
    </select>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, elije un nombre de usuario.</div>
  </div>

  <div class="col-md-4">
    <label for="patente" class="form-label">Patente</label>
    <input type="text" class="form-control" id="patente" name="patente" placeholder="AAA 123   ó   AA 456 AA" pattern="[A-z]{3}[0-9]{3}||[A-z]{2}[0-9]{3}[A-z]{2}" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, ingrese la patente.</div>
  </div>

  <div class="col-md-2">
    <label for="modelo" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="2023" min="1930" max="2024" pattern="[0-9]{4}" required>
    <div class="valid-feedback">¡Ok!</div>
    <div class="invalid-feedback">Por favor, el año.</div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los términos y condiciones
      </label>
      <div class="invalid-feedback">
        Debe estar de acuerdo antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
    <button type="reset" class="btn btn-secondary">Borrar</button>
    <button type="button" class="btn btn-info">Guardare lo dato</button>
  </div>
</form>

</div>

<?php
include_once '../../Estructura/footer.php';
?>



<script>
$(document).ready(function(){
  $("#clave2").blur(function(){
    var password1 = $("#clave").val();
    var password2 = $("#clave2").val();
    if(password1 === password2){
      $(this).attr("pattern","*");
    }else{$(this).attr("pattern","");}
  });
});

    //seleccionamos el formulario
    var objform = document.getElementById("formLogin")
    //definimos un evento para validar
    objform.addEventListener('submit', evento => {
        if (!objform.checkValidity() || !validarContra()) {//revisamos si algun campo es invalido
            event.preventDefault()
            event.stopPropagation()
            }
        objform.classList.add('was-validated')
    })


function validarContra(){
    var usuario = $("#usuario").val().trim();
    var password = $("#clave").val().trim();
    var password2 = $("#clave2").val().trim();
    var exito = true;
    var regexNumero = /\d/;
    var regexLetra = /[a-zA-Z]/;
    if(password.length < 8) {exito = false;        }
    if(password === usuario){ exito = false  }
    if(password != password2){ exito = false  }
    if(!regexNumero.test(password) || !regexLetra.test(password)) { exito = false }

    return exito;
}

    












   /* $(document).ready(function() {

        var objform = document.getElementById("formLogin")

        $(objform).on('submit', function(event) {
            var usuario = $("#usuario").val().trim();
            var password = $("#clave").val().trim();
            var exito = "";
            var regexNumero = /\d/;
            var regexLetra = /[a-zA-Z]/;

            if (!objform.checkValidity()) {//revisamos si algun campo es invalido
                event.preventDefault()
                event.stopPropagation()
                }
            objform.classList.add('was-validated')

            if(password.length < 8) {exito += "- La contraseña debe tener al menos 8 caracteres.\n";        }
            if(password === usuario){ exito += "- La contraseña no puede ser igual al nombre de usuario.\n";        }
            if(!regexNumero.test(password) || !regexLetra.test(password)) { exito += "- La contraseña debe contener al menos una letra y un número.\n";  }
            if(exito != ""){
                alert(exito);
                event.preventDefault();
            }
        });
});*/
</script>  