$(document).ready(function(){
    $("#form7").on('submit', function(event){
        var verificaNumero1 = true;
        var verificaNumero2 = true;
        var verificaOperacion = true;
        var mensaje = "Por favor, corrija los siguientes errores: \n";
        var regexNumeros = /^-?\d+(\.\d+)?$/; // Solo números
        var regexNumerosSinCero = /^-?(0\.[1-9]\d*|[1-9]\d*(\.\d+)?)$/; //Solo numeros sin cero

        var numero1 = $("#numero1").val().trim();
        var numero2 = $("#numero2").val().trim();
        var operacion = $("#operacion").val();

        // Limpiar mensajes de error anteriores
        $(".error").remove();


        if(numero1 === "" || !regexNumeros.test(numero1)){
            $("#numero1").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#numero1").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaNumero1 = false;
        } else {
            $("#numero1").css({
                "border-color": "",
                "background-color": ""
            });
        }

        if(numero2 === "" || !regexNumerosSinCero.test(numero2)){
            $("#numero2").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#numero2").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verificaNumero2 = false;

        } else {
            $("#numero2").css({
                "border-color": "",
                "background-color": ""
            });
        }


        // Verificar si el valor seleccionado es el valor predeterminado
        if(operacion === "") {
            $("#operacion").css({
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

            $("#operacion").after($aviso);

            mensaje += "- Seleccione una operacion.\n";
            verificaOperacion = false;
        } else {
            $("#operacion").css({
                "border-color": "",
                "background-color": "",
                "box-shadow": "" // Restablecer box-shadow
            });
        }



        if(!verificaNumero1 || !verificaNumero2 || !verificaOperacion){
            event.preventDefault();
        }
    });
});
