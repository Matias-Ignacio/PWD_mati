$(document).ready(function(){
    $("#form2").on('submit', function(event){
        var verifica = true; // Usar una sola variable de verificación
        var regexNumeros = /^\d+$/; // Solo números enteros positivos
        
        // Limpiar mensajes de error anteriores
        $(".error").remove();

        // Validar cada día por separado
        $(".dia").each(function() {
            var $campo = $(this); // $(this) refiere al input actual en la iteración
            var valor = $campo.val().trim(); // Obtiene el valor del input actual y lo limpia de espacios
            
            if (valor === "" || !regexNumeros.test(valor)) {
                verifica = false; // Cambia a falso si encuentra un error
                $campo.css({
                    "border-color": "red",
                    "background-color": "#FFB0B0"
                });

                // Crear y mostrar el mensaje de error debajo del campo
                var $aviso = $('<span>').addClass('error').css({
                    "color": "red",
                    "font-size": "12px",
                    "display": "block" // Asegura que el span ocupe una línea.
                }).text("Ingrese un número válido.");

                $campo.after($aviso); // Inserta el mensaje de error después del input actual
            } else {
                // Restablece los estilos si el campo es válido
                $campo.css({
                    "border-color": "",
                    "background-color": ""
                });
            }
        });

        // Prevenir el envío del formulario si hay errores
        if (!verifica) {
            event.preventDefault(); // Detener el envío del formulario si hay al menos un error
        }
    });
});
