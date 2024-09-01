$(document).ready(function(){
    $("#form8").on('submit', function(event){
        var verificaEdad = true;
        var verificaEstudios = true;
        var mensaje = "Por favor, corrija los siguientes errores: \n";
        var regexNumeros = /^\d+$/; // Solo números enteros positivos

        var edad = $("#edad").val().trim();

        // Limpiar mensajes de error anteriores
        $(".error").remove();

        // Validar Edad
        if(edad === "" || !regexNumeros.test(edad)){
            $("#edad").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#edad").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaEdad = false;
        } else {
            $("#edad").css({
                "border-color": "",
                "background-color": ""
            });
        }

        // Verificar si algún radio button del grupo "estudios" está seleccionado
        if(!$("input[name='estudio']:checked").length) {
            // Aplicar estilo de error a los radio buttons
            $(".radio-group").css({
                "border": "1px solid red",
                "background-color": "#FFB0B0",
                "padding": "5px",
                "border-radius": "5px"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "margin-left": "10px",
                "display": "inline-block"
            }).text("Seleccione una opción.");

            $(".radio-group").after($aviso);

            verificaEstudios = false;
        } else {
            // Restablecer el estilo de los radio buttons si se selecciona una opción
            $(".radio-group").css({
                "border": "",
                "background-color": "",
                "padding": "",
                "border-radius": ""
            });
        }

        // Prevenir el envío del formulario si hay errores
        if(!verificaEdad || !verificaEstudios){
            event.preventDefault();
        }
    });
});
