$(document).ready(function() {
    $("#form3").on('submit', function(event) {
        var usuario = $("#usuario").val().trim();
        var password = $("#clave").val().trim();
        var mensaje = "";
        var regexNumero = /\d/;
        var regexLetra = /[a-zA-Z]/;

        if(usuario === "" || password === ""){
            mensaje += "- Debes completar ambos campos.\n";
        }

        if(password.length < 8) {
            mensaje += "- La contraseña debe tener al menos 8 caracteres.\n";
        }

        if(password === usuario){
            mensaje += "- La contraseña no puede ser igual al nombre de usuario.\n";
        }

        if(!regexNumero.test(password) || !regexLetra.test(password)) {
            mensaje += "- La contraseña debe contener al menos una letra y un número.\n";
        }

        if(mensaje != ""){
            alert(mensaje);
            event.preventDefault();
        }
    });
});