<?php
$titulo = "Probandolo";
include_once '../../Estructura/header.php';
?>


<div class="divtitulo">
    <h1><?php echo $titulo;?></h1>
</div>

<div class="divform">
<form class="row g-3 needs-validation" id="formLogin" name="formLogin" novalidate>
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feed  back">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Por favor, elije un nombre de usuario.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationcontra" class="form-label">Clave</label>
    <input type="password" class="form-control" id="clave" name="clave" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Proporciona una ciudad válida.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Elige...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Selecciona un estado válido.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Proporciona un código postal válido.
    </div>
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
  </div>
</form>

</div>

<?php
include_once '../../Estructura/footer.php';
?>



<script>
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
    var exito = true;
    var regexNumero = /\d/;
    var regexLetra = /[a-zA-Z]/;
    if(password.length < 8) {exito = false;        }
    if(password === usuario){ exito = false  }
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