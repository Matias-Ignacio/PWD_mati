$(document).ready(function(){
    $("#form3").on('submit', function(event){
        var verificaNombreApellido = true;
        var verificaEdad = true;
        var verificaDireccion = true;
        var mensaje = "Por favor, corrija los siguientes errores: \n";
        var regexLetras = /^[a-zA-Z\s]+$/; //Letras y espacios.
        var regexNumeros = /^\d+$/; // Solo números enteros positivos
        var regexDireccion = /^[a-zA-Z0-9\s]+$/; //numeros, letra y espacios

        var nombreApellido = $(".nombreApellido").val().trim();
        var edad = $("#edad").val().trim();
        var direccion = $("#direccion").val().trim();

        //Limpiar mensajes de error anteriores
        $(".error").remove();


        if(nombreApellido === "" || !regexLetras.test(nombreApellido)){
            $(".nombreApellido").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            // Crear y mostrar el mensaje de error debajo del campo
            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" //Asegura que el span ocupe una linea
            }).text("Ingrese un número válido.");

            $(".nombreApellido").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaNombreApellido = false;

        }else{
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

            // Crear y mostrar el mensaje de error debajo del campo
            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#edad").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaEdad = false;
        }else{
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

            // Crear y mostrar el mensaje de error debajo del campo
            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#direccion").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaDireccion = false;
        }else{
            $("#direccion").css({
                "border-color": "",
                "background-color": ""
            });
        }

        if(!verificaNombreApellido || !verificaEdad || !verificaDireccion){
            //alert(mensaje);
            event.preventDefault();
        }
    });
});