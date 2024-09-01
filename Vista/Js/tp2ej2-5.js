$(document).ready(function(){
    $("#form5").on('submit', function(event){
        var verificaNombreApellido = true;
        var verificaEdad = true;
        var verificaDireccion = true;
        var verificaEstudios = true;
        var verificaSexo = true;
        var mensaje = "Por favor, corrija los siguientes errores: \n";
        var regexLetras = /^[a-zA-Z\s]+$/; // Letras y espacios.
        var regexNumeros = /^\d+$/; // Solo números enteros positivos
        var regexDireccion = /^[a-zA-Z0-9\s]+$/; // Números, letras y espacios

        var nombreApellido = $(".nombreApellido").val().trim();
        var edad = $("#edad").val().trim();
        var direccion = $("#direccion").val().trim();
        var sexo = $("#sexo").val();

        // Limpiar mensajes de error anteriores
        $(".error").remove();

        if(nombreApellido === "" || !regexLetras.test(nombreApellido)){
            $(".nombreApellido").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un nombre válido.");

            $(".nombreApellido").after($aviso);

            mensaje += "- Ingrese un nombre válido.\n";
            verificaNombreApellido = false;

        } else {
            $(".nombreApellido").css({
                "border-color": "",
                "background-color": ""
            });
        }

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

        if(direccion === "" || !regexDireccion.test(direccion)){
            $("#direccion").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese una dirección válida.");

            $("#direccion").after($aviso);

            mensaje += "- Ingrese una dirección válida.\n";
            verificaDireccion = false;
        } else {
            $("#direccion").css({
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

            $("label[for='lnivelestudio']").after($aviso);

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

        // Verificar si el valor seleccionado es el valor predeterminado
        if(sexo === "") {
            $("#sexo").css({
                "border-color": "red",
                "background-color": "#FFB0B0",
                "box-shadow": "0 0 5px 1px red" // Aplicar box-shadow
            });

            // Crear y mostrar el mensaje de error al lado del <select>
            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block", // Asegura que el span ocupe una línea
                "margin-left": "5px" // Espacio entre el select y el mensaje de error
            }).text("Seleccione una opción.");

            $("#sexo").after($aviso);

            mensaje += "- Seleccione un sexo.\n";
            verificaSexo = false;
        } else {
            $("#sexo").css({
                "border-color": "",
                "background-color": "",
                "box-shadow": "" // Restablecer box-shadow
            });
        }

        if(!verificaNombreApellido || !verificaEdad || !verificaDireccion || !verificaEstudios || !verificaSexo){
            event.preventDefault();
        }
    });
});
