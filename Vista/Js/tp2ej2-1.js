$(document).ready(function(){
    $("#form1").on('submit', function(event){
        console.log("Formulario enviado"); // Verifica si el evento se activa
        var verifica = true;
        var mensaje = "Por favor, corrija los siguientes errores: \n";
        var regexNumeros = /^-?\d+(\.\d+)?$/;

        var numero = $("#numero").val().trim();
        
        // Limpiar mensajes de error anteriores
        $(".error").remove();

        if(numero === "" || !regexNumeros.test(numero)){
            $("#numero").css({
                "border-color": "red",
                "background-color": "#FFB0B0"
            });

            // Crear y mostrar el mensaje de error debajo del campo
            var $aviso = $('<span>').addClass('error').css({
                "color": "red",
                "font-size": "12px",
                "display": "block" // Asegura que el span ocupe una línea
            }).text("Ingrese un número válido.");

            $("#numero").after($aviso);

            mensaje += "- Ingrese un número válido.\n";
            verifica = false;
        }else{
            $("#numero").css({
                "border-color": "",
                "background-color": ""
            });
        }

        if(!verifica){
            //alert(mensaje);
            event.preventDefault();
        }
    });
});
