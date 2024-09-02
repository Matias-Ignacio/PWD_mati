
function validar(){   
    if (validarNombre(document.getElementById("nombre")) && 
        validarNombre(document.getElementById("apellido")) && 
        validarFecha() && 
        validarEmail() && 
        validarObra())
    {
            document.getElementById("cartel").style.display = "none";
            alert("Los datos ingresados son correctos.");
            return true;
    }else{
        document.getElementById("cartel").style.display = "flex";
        return false;
    }     
}

//***************************************************** */
//Validar email
/****************************************************** */
function validarEmail(obj){
  
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(obj.value)){
        $(obj).removeClass();
        $(obj).addClass("input-valido form-control");
        return true;
    }else {     
        $(obj).removeClass();
        $(obj).addClass("form-control input-novalido");
        return false;
    }
}

//***************************************************** */


//***************************************************** */
//Validar nombre y apellido
/****************************************************** */
function validarNombre(obj){
    
    if (obj.value != "" && validarCadena(obj.value)){
        $(obj).removeClass();
        $(obj).addClass("input-valido form-control");
       return true;
    }else{
        $(obj).removeClass();
        $(obj).addClass("form-control input-novalido");
        return false;
    }   
}

//***************************************************** */


//***************************************************** */
//Validar fechas
/****************************************************** */
function esPositivo(obj){
    var valor = parseInt(obj.value);
    var cadena = obj.value;
    var i = 0; 
	
    while (i < cadena.length){
        if (!(/[0-9]/.test(cadena.at(i)))) {return 0;}
        i++;
    }
    return valor;
}

//Valida que la fecha sea válida, respetando los años biciestos y 
//que la fecha sea menor al día actual
function validarFecha (){
    var v_anio = false;
    var v_mes = false;
    var v_dia = false;
    var anio = esPositivo(document.getElementById("anio"));
    var mes = esPositivo(document.getElementById("mes"));
    var dia = esPositivo(document.getElementById("dia"));
    const fechaActual = new Date();

    if (((anio <= fechaActual.getFullYear()) && (anio >= 1910)) ){
        v_anio = true;
        document.getElementById("anio").style.borderColor="green";
    }else{
        document.getElementById("anio").style.borderColor="red";
    }
    if ((mes <= 12 && mes > 0) && !((anio == fechaActual.getFullYear()) && (mes > fechaActual.getMonth()+1))){
        v_mes = true
        document.getElementById("mes").style.borderColor="green";
    }else{
        document.getElementById("mes").style.borderColor="red";
    }
    if(validarDia(dia, mes, anio) && !(anio == fechaActual.getFullYear() && (mes >= (fechaActual.getMonth()+1)) && (dia > fechaActual.getDate()-1))){
        v_dia =true;
        document.getElementById("dia").style.borderColor="green";
    }else{
        document.getElementById("dia").style.borderColor="red";
    }
    if (v_anio && v_mes && v_dia){
        return true;
    }else{
        return false;
    }    
}

// valida el dia
function validarDia (dia, mes, anio){
    var validar = false;
    
    if (dia <32 && dia > 0){
        switch (mes){
            case 2:
                if ((dia <= 28) || ((dia == 29) && (anio%4 == 0))){
                    validar = true;}
                break;
            case 4:
            case 6:
            case 9:
            case 11:               
                if (dia <= 30) {validar = true;}
                break;
            default:
                validar = true;        
        }
    }    
    return validar;
}
//************************************************************************ */

//Validar la obra social

function validarCiudad(){
    var obj = document.getElementById("ciudad")
    if (obj.value != ""){
        obj.style.borderColor="green";
        return true;
    }else{
        obj.style.borderColor="red";
        return false;
    }
}

//Validar cadena por formato
function validarCadena(cadena){
    var i = 0; 
	
    while (i < cadena.length){
        if (!(/[A-z ñÑ'áéíóúüÁÉÍÓÚ]/.test(cadena.at(i)))) {return false;}
        i++;
    }
    return true;
}
